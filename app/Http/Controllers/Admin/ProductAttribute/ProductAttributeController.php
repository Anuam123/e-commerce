<?php

namespace App\Http\Controllers\Admin\ProductAttribute;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductAttribute;
use App\Models\ProductAttributeType;
use Illuminate\Support\Facades\Redirect;


class ProductAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attribute = ProductAttribute::orderBy('id', 'DESC')->get();
        //dd($commodities_group);
        return view('admin.product_attribute.index', compact('attribute'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pat = ProductAttributeType::select('*')->get();
       // dd($pat);
        return view('admin.product_attribute.create',compact('pat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $attribute = new ProductAttribute;
        $attribute->product_type = $request->input("product_type");
        $attribute->names = $request->input("names");
        $attribute->sort_order = $request->input("sort_order");
        $attribute->status = $request->input("status");
        $attribute->save();
        return redirect()->route('product_attribute.index')->with('success', 'Attribute created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(ProductAttribute $product)
    {
        return view('demo.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attribute = ProductAttribute::find($id);
        //dd($emp);
        return view('admin.product_attribute.edit', compact('attribute'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        //dd($request()->all());
        $attribute = ProductAttribute::find($id);
        $attribute->product_type = $request->input("product_type");
        $attribute->names = $request->input("names");
        $attribute->sort_order = $request->input("sort_order");
        $attribute->status = $request->input("status");
        $attribute->save();
        return Redirect::back()->with('success', 'Attribute Updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = ProductAttribute::find($id);
        $category->delete();
        return Redirect::back()->with('success', 'Attribute Deleted successfully!');
    }
}
