<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Helper\CustomHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            $user = auth()->guard('admin')->user();
            if ($user->is_admin == 1) {
                // Store the admin's ID and role in the session
                Session::put('admin_id', $user->id);
                Session::put('admin_role', $user->is_admin);

                // Login as a regular user (optional)
                auth()->loginUsingId($user->id);

                return redirect()->route('adminDashboard')->with('success', 'You are Logged in successfully as an admin.');
            }
        } else {
            return back()->with('error', 'Whoops! invalid email and password.');
        }
    }

    public function adminLogout(Request $request)
    {
        // Clear the stored admin session data
        Session::forget('admin_id');
        Session::forget('admin_role');

        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('success', 'You are logout successfully');
        return redirect(route('adminLogin'));
    }
}
