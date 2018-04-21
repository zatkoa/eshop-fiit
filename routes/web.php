<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main-page');
});

Route::get('/category/{id}', 'CategoryController@index');

Route::get('/products/{product}', 'ProductController@showToCustomer');

Route::get('/mobile/login', function () {
    if (Auth::check())
        return redirect('/');
    return view('mobile/login');
});

Route::get('/mobile/registration', function () {
    return view('mobile/registration');
});

Route::get('/search', function() {
    return view('products/search');
});

/*Authentication*/

$this->post('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

/*Shopping cart */

Route::get('/cart', 'Cart\CartController@showCart')->name("cart");
Route::get('add/{product}','Cart\CartController@addToCart');
Route::get('add/{product}/{qty}','Cart\CartController@updateCart');
Route::get('remove/{rowId}','Cart\CartController@removeCartItem');

/*order*/

Route::get('/order-first', 'OrderController@orderFirst');

/*Admin routes*/
Route::resource('/admin/products', 'ProductController')->middleware('admin');

Route::get('/admin/category/{category}', 'ProductController@indexAdmin');

Route::get('/admin/login', function() {
    if (Auth::check())
        return redirect()->back();
    return view('auth.login-admin');
});

Route::post('/admin/search', 'ProductController@search');



