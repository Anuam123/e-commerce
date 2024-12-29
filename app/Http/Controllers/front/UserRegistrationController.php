<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Session;
use Hash;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{
    public function show_login(){
        return view('front.user.auth.login');
    }

    public function UserRegistration(){
        return view('front.user.auth.user_registration');
    }

    public function register(Request $request)
    {
        // Validate the registration data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'required|string|unique:users',  // Validate mobile uniqueness
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new user with the new fields
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,  // Save mobile number
            'password' => Hash::make($request->password),
        ]);

        // Log the user in after registration
        auth()->login($user);
        session()->flash('success', 'Registration successful!.');
        return redirect()->route('user.login'); // Redirect to a protected page after registration
    }

    public function login(Request $request)
    {
        // Validate the user input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->route('login.form')
                ->withErrors($validator)
                ->withInput();
        }

        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirect to the intended page or home page
            return redirect()->route('home');
        }

        // If authentication fails, redirect back with error message
        return redirect()->route('user.login')
            ->withErrors(['email' => 'Invalid email or password']);
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('user.login');
    }


}
