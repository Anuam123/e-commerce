<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Vendor;

class VendorAuthController extends Controller
{
    public function getLogin()
    {
        return view('vendor.auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->guard('vendor')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            $user = auth()->guard('vendor')->user();
            if ($user->is_vendor == 1) {
                // Set the vendor session
                Session::put('is_vendor', true);
                return redirect()->route('vendorDashboard')->with('success', 'You are logged in successfully.');
            }
        } else {
            return back()->with('error', 'Whoops! Invalid email and password.');
        }
    }


    public function vendorLogout(Request $request)
    {
        auth()->guard('vendor')->logout();
        // Session::flush(); // Remove this line to avoid logging out the user
        Session::put('success', 'You are logged out successfully');
        return redirect(route('vendorLogin'));
    }
}
