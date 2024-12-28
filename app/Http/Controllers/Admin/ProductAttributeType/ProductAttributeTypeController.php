<?php

namespace App\Http\Controllers\admin\ProductAttributeType;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductAttributeType;
use Illuminate\Support\Facades\Redirect;

class ProductAttributeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attribute = ProductAttributeType::orderBy('id', 'DESC')->get();
        //dd($commodities_group);
        return view('admin.product_attribute_type.index', compact('attribute'));
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
        return view('admin.product_attribute_type.create', compact('pat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $attribute = new ProductAttributeType;
        $attribute->product_attribute_type = $request->input("product_attribute_type");
        $attribute->status = $request->input("status");
        $attribute->save();
        return redirect()->route('product_attribute_type.index')->with('success', 'Attribute created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(ProductAttributeType $product)
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
        $attribute = ProductAttributeType::find($id);
        //dd($emp);
        return view('admin.product_attribute_type.edit', compact('attribute'));
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
        $attribute = ProductAttributeType::find($id);
        $attribute->product_attribute_type = $request->input("product_attribute_type");
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
        $category = ProductAttributeType::find($id);
        $category->delete();
        return Redirect::back()->with('success', 'Attribute Deleted successfully!');
    }
}
