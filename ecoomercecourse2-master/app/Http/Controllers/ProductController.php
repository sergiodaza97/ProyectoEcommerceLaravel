<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Models\ProductHasCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('available',true)->get();
        $categories = Category::all();
        return view('components/products.index',compact('products','categories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view ('components/products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataProductoForm = $request->validate([
            'name' => ['string', 'required'],
            'description' => ['string', 'required'],
            'price' => ['numeric','required'],
            'stock' => ['numeric','required'],
            'categories' => ['required'],
            'available' => ['nullable']
        ]);

        $newProduct = new Product();
        $newProduct->name = $dataProductoForm['name'];
        $newProduct->description = $dataProductoForm['description'];
        $newProduct->price = $dataProductoForm['price'];
        $newProduct->stock = $dataProductoForm['stock'];
        isset($dataProductoForm['available']) ? $newProduct->available = true : $newProduct->available = false;

        $newProduct ->save();
        foreach ($dataProductoForm['categories'] as $category) {
            $cat = new ProductHasCategory ();
            $cat->product_id =  $newProduct->id;
            $cat->category_id = $category->id;
            $cat->save();
        }

        foreach ($dataProductoForm['images'] as $image) {
            $img = new Image ();
            $img->product_id =  $newProduct->id;
            $img->url = $image->url['url'];
            $img->save();
        }    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        // tarea agregar a producto
        // stock
        // reviews
        // video
        // discount

       
        return view('components/products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $products = Product::where('available',true)->get();
        $categories = Category::all();
        return view('components/products.update',compact('products','categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
