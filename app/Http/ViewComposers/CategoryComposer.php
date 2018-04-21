<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Category;

class CategoryComposer
{
    public function compose(View $view) {

        $categoryList = Category::all();
        $view->with('categoryList',$categoryList);
    }
}