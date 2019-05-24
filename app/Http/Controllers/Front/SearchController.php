<?php

namespace App\Http\Controllers\Front;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{

    public function show(Request $request)
    {
        $term = $request->q;

        $products = Product::where("name", "like", "%{$term}%")
                           ->orWhere("description", "like", "%{$term}%")
                           ->orWhere("price", $term)
                           ->orWhere("discount", $term)
                           ->get();

        return view('front.search.show', compact('products'));
    }

}
