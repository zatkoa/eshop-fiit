<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //save URL
        Session::flash('backUrl', Route::currentRouteName());
        $products = Product::with('category')->get();
        return view('manage-products.products', ['products' => $products]);
    }

    /**
     * Display a listing of the resource from concrete category.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexAdmin(Category $category)
    {
        Session::flash('backUrl', Route::currentRouteName());
        $products = Product::where('category_id', $category->id)->get();
        return view('manage-products.products', ['products' => $products]);
    }

    public function search(Request $request)
    {
//        $products = Product::search($request->searchString)->get();
        $products = Product::where('name', 'ilike', '%' . $request->searchString .'%')->get();
        return view('manage-products.products', [ 'products' => $products, 'oldSearch' => $request->searchString]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view( 'manage-products.add-product', compact('categories', $categories));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'name' => 'required|min:3',
                'price' => 'required|min:1',
                'quantity' => 'required|min:1',
                'descr1' => 'required',
                'descr2' => 'required',
                'descr3' => 'required',
                'file' => 'required|image'
            ]);

        $file = $validation['file'];
        $fileName =  md5($file->getClientOriginalName()) . time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs(config('app.products-images-path'), $fileName);

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'available_quantity' => $request->quantity,
            'descr1' => $request->descr1,
            'descr2' => $request->descr2,
            'descr3' => $request->descr3,
            'image' => $fileName,
            'category_id' => $request->category
        ]);
//        return Redirect::to(Session::get('backUrl'));
        //TODO redirect double back
        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    public function showToCustomer(Product $product) {

        $product = Product::find($product->id);
        return view('products.detail', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('manage-products.edit-product',['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validation = $request->validate(
            [
                'name' => 'required|min:3',
                'price' => 'required',
                'quantity' => 'required',
                'descr1' => 'required',
                'descr2' => 'required',
                'descr3' => 'required',
                'file' => 'nullable|image|max:15000'
            ]);



        if ($request['file'] != null) {

            $deleteFile = config('app.products-images-path') . $product->image;
            if (Storage::exists($deleteFile)) {
                Storage::delete($deleteFile);
            }

            $file = $validation['file'];
            $fileName = md5($file->getClientOriginalName()) . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs(config('app.products-images-path'), $fileName);
            $product->image = $fileName;
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->available_quantity = $request->quantity;
        $product->descr1 = $request->descr1;
        $product->descr2 = $request->descr2;
        $product->descr3 = $request->descr3;
        $product->category_id = $request->category;
        $product->save();

        $request->session()->flash('message', 'Produkt bol úspešne zmenený.');

//        return Redirect::to(Session::get('backUrl'));
        //TODO redirect double back
        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product)
    {
        $file = config('app.products-images-path') . $product->image;
        if (Storage::exists($file)) {
            Storage::delete($file);
        }

        $product->delete();
        $request->session()->flash('message','Produkt bol úspešne vymazaný');
        return redirect('/admin/products');
    }
}
