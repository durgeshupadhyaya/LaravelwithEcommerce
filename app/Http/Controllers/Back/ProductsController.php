<?php

namespace App\Http\Controllers\Back;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products  = Product::paginate(10);

        return view('cms.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->pluck('name', 'id')->toArray();

        $brands = Brand::all()->pluck('name', 'id')->toArray();

        return view('cms.products.create', compact('categories', 'brands'));
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
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'price' => 'required|numeric',
            'qty' => 'required|numeric',
            'featured' => 'required',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id'
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->qty = $request->qty;
        $product->featured = $request->featured;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;

        try {
            $img = Image::make($request->image);

            $filename = 'img_' . date('YmdHis') . '_' . rand(1000, 9999) . '.' . $request->image->extension();

            $img->resize(640, 480, function ($constraint) {
                $constraint->aspectRatio();
            })->save('public/images/' . $filename);

            $product->image = $filename;
        }
        catch(\Exception $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }

        $product->save();

        flash('Product created successfully.', 'success');

        return redirect()->action('Back\ProductsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all()->pluck('name', 'id')->toArray();

        $brands = Brand::all()->pluck('name', 'id')->toArray();

        return view('cms.products.edit', compact('categories', 'brands', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'qty' => 'required|numeric',
            'featured' => 'required',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id'
        ]);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->qty = $request->qty;
        $product->featured = $request->featured;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;

        if($request->hasFile('image')) {
            try {
                $img = Image::make($request->image);

                $filename = 'img_' . date('YmdHis') . '_' . rand(1000, 9999) . '.' . $request->image->extension();

                $img->resize(640, 480, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('public/images/' . $filename);

                @unlink('public/images/'.$product->image);

                $product->image = $filename;
            } catch (\Exception $e) {
                return redirect()->back()->withInput()->withErrors($e->getMessage());
            }
        }

        $product->save();

        flash('Product updated successfully.', 'success');

        return redirect()->action('Back\ProductsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        @unlink('public/images/'.$product->image);

        $product->delete();

        flash('Product deleted successfully.', 'success');

        return redirect()->action('Back\ProductsController@index');
    }
}
