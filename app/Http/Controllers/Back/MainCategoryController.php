<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MainCategory;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main_categories = \App\MainCategory::paginate(10);
        return view('cms.maincategory.index' ,compact('main_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.maincategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:main_categories,name|min:3',

        ]);
        $maincategory = new \App\MainCategory;
        $maincategory->name = $request->get('name');
        $maincategory->save();
        flash('Main Category created successfully.', 'success');

        return redirect()->action('Back\MainCategoryController@index');


    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(MainCategory $maincategory)
    {

        return view('cms.maincategory.edit', compact('maincategory'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainCategory $maincategory)
    {
       $this->validate($request, [
            'name' => 'required|min:3',

        ]);

        $maincategory->name = $request->get('name');
        $maincategory->save();
        flash('Main Category created successfully.', 'success');

        return redirect()->action('Back\MainCategoryController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainCategory $maincategory)
    {


        $maincategory->delete();
        flash('Main Category Delete successfully.', 'success');

        return redirect()->action('Back\MainCategoryController@index');
    }
}
