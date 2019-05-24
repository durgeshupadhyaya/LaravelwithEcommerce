<?php

namespace App\Http\Controllers\Back;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::paginate(10);

        return view('cms.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.create');
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
            'name' => 'required|unique:pages,name|min:3',
            'description' => 'required'
        ]);

        $page = new Page;
        $page->name = $request->name;
        $page->description = $request->description;

        if($request->hasFile('image')) {
            try {
                $img = Image::make($request->image);

                $filename = 'img_' . date('YmdHis') . '_' . rand(1000, 9999) . '.' . $request->image->extension();

                $img->resize(640, 480, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('public/images/' . $filename);

                $page->image = $filename;
            }
            catch(\Exception $e) {
                return redirect()->back()->withInput()->withErrors($e->getMessage());
            }
        }

        $page->save();

        flash('Page created successfully.', 'success');

        return redirect()->action('Back\PagesController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('cms.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'description' => 'required'
        ]);

        $page->name = $request->name;
        $page->description = $request->description;

        if($request->hasFile('image')) {
            try {
                $img = Image::make($request->image);

                $filename = 'img_' . date('YmdHis') . '_' . rand(1000, 9999) . '.' . $request->image->extension();

                $img->resize(640, 480, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('public/images/' . $filename);

                if(!empty($page->image)) {
                    @unlink('public/images/'.$page->image);
                }

                $page->image = $filename;
            }
            catch(\Exception $e) {
                return redirect()->back()->withInput()->withErrors($e->getMessage());
            }
        }

        $page->save();

        flash('Page edited successfully.', 'success');

        return redirect()->action('Back\PagesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        if(!empty($page->image)) {
            @unlink('public/images/'.$page->image);
        }

        $page->delete();

        flash('Page deleted successfully.', 'success');

        return redirect()->action('Back\PagesController@index');
    }
}
