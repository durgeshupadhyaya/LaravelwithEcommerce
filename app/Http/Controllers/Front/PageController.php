<?php

namespace App\Http\Controllers\Front;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function show(Page $page)
    {
        return view('front.page.show', compact('page'));
    }

}
