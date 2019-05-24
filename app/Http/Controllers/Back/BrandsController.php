<?php
namespace App\Http\Controllers\Back;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BrandsController extends Controller{
  
   
    public function index(){
        $brands = Brand::paginate(10);
        return view('cms.brands.index', compact('brands'));
    }

     public function create(){
        return view('cms.brands.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|unique:brands,name|min:3'
        ]);

        $brand = new Brand;
        $brand->name = $request->name;

        $brand->save();
        flash('Brand created successfully.', 'success');

        return redirect()->action('Back\BrandsController@index');
    }

    public function edit(Brand $brand)
    {
        return view('cms.brands.edit', compact('brand'));
    }

    
    public function update(Request $request, Brand $brand){
        $this->validate($request, [
            'name' => 'required|min:3'
        ]);

        $brand->name = $request->name;

        $brand->save();

        flash('Brand edited successfully.', 'success');

        return redirect()->action('Back\BrandsController@index');
    }

    public function destroy(Brand $brand){
        
        $brand->delete();

        flash('Brand deleted successfully.', 'success');

        return redirect()->action('Back\BrandsController@index');
    }
}