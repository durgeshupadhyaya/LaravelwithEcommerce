<?php

namespace App\Http\Controllers\Back;

use App\Category;
use App\MainCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(10);
        return view('cms.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main_categories = MainCategory::all()->pluck('name', 'id')->toArray();

        return view('cms.category.create', compact('main_categories'));
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
            'name' => 'required|unique:categories,name|min:3',
            'main_category_id' => 'required|exists:main_categories,id'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->main_category_id = $request->main_category_id;

        $category->save();

        flash('Category created successfully.', 'success');

        return redirect()->action('Back\CategoryController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Category $category)
    {
        $main_categories = MainCategory::all()->pluck('name', 'id')->toArray();

        return view('cms.category.edit', compact('category','main_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'main_category_id' => 'required|exists:main_categories,id'
        ]);

        $category->name = $request->name;
        $category->main_category_id = $request->main_category_id;

        $category->save();

        flash('Category updated successfully.', 'success');

        return redirect()->action('Back\CategoryController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        flash('Category Delete successfully.', 'success');

        return redirect()->action('Back\CategoryController@index');
    }
}
