<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;


class VendorRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.myAccount');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $vendor = new Vendor;
        $vendor->name = $request->input("name");
        $vendor->email = $request->input("email");
        $vendor->user_name = $request->input("user_name");
        $vendor->is_vendor = $request->input("is_vendor");
        $vendor->gst_number = $request->input("gst_number");
        $vendor->phone = $request->input("phone");
        $vendor->shop_name = $request->input("shop_name");
        $vendor->shop_url = $request->input("shop_url");
        $vendor->email_verified_at = $request->input("email_verified_at");
        $vendor->password = bcrypt($request->input("password"));
        $vendor->save();
        return redirect()->route('vendorDashboard')->with('success', 'You are Registered successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
