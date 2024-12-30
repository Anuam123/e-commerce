<?php

namespace App\Http\Controllers\Admin\OrderCoupon;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class AllOrderController extends Controller
{
    public function index()
    {
        $orders=Order::orderBy('id', 'DESC')->get();
        return view('admin.order_coupon.all_order',compact('orders'));
    }
}
?>
