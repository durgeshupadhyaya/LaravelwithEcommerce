<?php

namespace App\Http\Controllers\Front;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function home()
    {
        $featuredProducts = Product::where('featured', 'yes')
                                   ->latest()
                                   ->take(4)
                                   ->get();

        $latestProducts = Product::latest()
                                 ->take(4)
                                 ->get();

        $topProducts = Product::withCount('order_details')
                              ->orderBy('order_details_count', 'desc')
                              ->take(4)
                              ->get();

        return view('front.pages.home', compact('featuredProducts', 'latestProducts', 'topProducts'));
    }

}
