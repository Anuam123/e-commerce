<?php

namespace App\Http\Controllers\Admin\OrderCoupon;
use App\Http\Controllers\Controller;
use App\Models\OrderCoupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


class OrderCouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons=OrderCoupon::where('status','Active')->orderBy('id','DESC')->get();
       // dd($coupons);
        return view('admin.order_coupon.index',compact('coupons'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // echo "create";
        return view('admin.order_coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'discount_type'=>'required|in:percentage,fixed',
            'discount_value'=>'required|numeric|min:0',
            'min_order_value'=>'required|numeric|min:0',
            'max_discount'=>'nullable|numeric|min:0',
            'start_date'=>'required|date',
            'end_date'=>'required|date|after_or_equal:start_date',
            'usage_limit'=>'nullable|integer|min:0',
            'usage_count'=>'nullable|integer|min:0',
            'description'=> 'nullable|string',
        ]);
       
        $letters = strtoupper(Str::random(5));
        $numbers = random_int(10000, 99999); 
        $unique_code = $letters . $numbers;

    // Check if the code already exists
    while (OrderCoupon::where('unique_code', $unique_code)->exists()) {
        // If the code exists, generate a new one
        $letters = strtoupper(Str::random(5)); 
        $numbers = random_int(10000, 99999); 
        $unique_code = $letters . $numbers;
    }
    $coupons=OrderCoupon::create([
        'unique_code' => $unique_code,
        'discount_type' => $request->discount_type,
        'discount_value' => $request->discount_value,
        'min_order_value' => $request->min_order_value,
        'max_discount' => $request->max_discount,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
        'usage_limit' => $request->usage_limit,
        'usage_count' => $request->usage_count,
        'description' => $request->description,
    ]);
       
        return redirect()->route('order_coupon.index')->with('success', 'Coupon created successfully!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //echo "Show data";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coupons=OrderCoupon::find($id);
      //  dd($coupons);
        return view('admin.order_coupon.edit',compact('coupons'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'discount_type'=>'required|in:percentage,fixed',
            'discount_value'=>'required|numeric|min:0',
            'min_order_value'=>'required|numeric|min:0',
            'max_discount'=>'nullable|numeric|min:0',
            'start_date'=>'required|date',
            'end_date'=>'required|date|after_or_equal:start_date',
            'usage_limit'=>'nullable|integer|min:0',
            'usage_count'=>'nullable|integer|min:0',
            'description'=> 'nullable|string',
        ]);
        $coupons=OrderCoupon::findOrFail($id);
        $coupons->update([
            'discount_type' => $request->discount_type,
            'discount_value' => $request->discount_value,
            'min_order_value' => $request->min_order_value,
            'max_discount' => $request->max_discount,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'usage_limit' => $request->usage_limit,
            'usage_count' => $request->usage_count,
            'description' => $request->description
        ]);
        return redirect()->route('order_coupon.index')->with('success', 'Coupon updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      
        $coupons=OrderCoupon::find($id);
        $coupons->delete();
        return redirect::back()->with('success','Coupon Deleted successfully!');
    }
}
