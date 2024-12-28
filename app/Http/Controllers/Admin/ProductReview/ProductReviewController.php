<?php

namespace App\Http\Controllers\Admin\ProductReview;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductReview;
use Illuminate\Support\Facades\Redirect;
use App\Models\ProductGeneral;

class ProductReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = ProductReview::orderBy('id', 'DESC')->get();
        //dd($commodities_group);
        return view('admin.product_review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reviews = ProductReview::select('*')->get();
        $products = ProductGeneral::select('*')->get();
        // dd($pat);
        return view('admin.product_review.create', compact('reviews', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $reviews = new ProductReview;
        $reviews->user_name = $request->input("user_name");
        $reviews->user_email = $request->input("user_email");
        $reviews->select_product = $request->input("select_product");
        $reviews->comment = $request->input("comment");
        $reviews->select_rating = $request->input("select_rating");
        $reviews->status = $request->input("status");
        $reviews->save();
        return redirect()->route('product_review.index')->with('success', 'Attribute created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(ProductReview $product)
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
        $reviews = ProductReview::find($id);
        $products = ProductGeneral::select('*')->get();
        //dd($emp);
        return view('admin.product_review.edit', compact('reviews', 'products'));
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
        $reviews = ProductReview::find($id);
        $reviews->user_name = $request->input("user_name");
        $reviews->user_email = $request->input("user_email");
        $reviews->select_product = $request->input("select_product");
        $reviews->comment = $request->input("comment");
        $reviews->select_rating = $request->input("select_rating");
        $reviews->status = $request->input("status");
        $reviews->save();
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
        $reviews = ProductReview::find($id);
        $reviews->delete();
        return Redirect::back()->with('success', 'Attribute Deleted successfully!');
    }
}
