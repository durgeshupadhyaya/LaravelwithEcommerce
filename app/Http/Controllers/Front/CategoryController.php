<?php

namespace App\Http\Controllers\Front;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function show(Category $category)
    {
        return view('front.category.show', compact('category'));
    }

}
