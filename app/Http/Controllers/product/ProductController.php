<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Projects\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\product;
use App\Models\Projects\Project;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return product::orderBy('code')->get();

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Product\StoreProductRequest $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreProductRequest $request)
    {
        return Product::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $project
     * @return \Illuminate\Http\Response
     */


    public function show(Product $product)
    {
        return $product;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Product\UpdateProductRequest $request
     * @param \App\Models\Product $product
     * @return Product
     */


    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return string
     */

    public function destroy(Product $product)
    {
        $product->delete();
        return 'Eliminado exitosamente';
    }
}
