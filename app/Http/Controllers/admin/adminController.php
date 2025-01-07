<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'email' => 'required|email',  // Validate email format
            'password' => 'required', // Validate password
        ]);

        // Get credentials from the request
        $credentials = $request->only('email', 'password');

        // Attempt login with the 'admin' guard
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('dashbord')->with('login_success', true); // Use 'dashbord' as the route name
        }
        // Authentication failed
        return back()->withErrors(['login_error' => 'Invalid credentials'])->withInput();
    }


    public function dashbord()
    {
        return view('admin.dashbord');
    }
    
    public function logout(Request $request)
    {
        // Logout the user
        Auth::guard('admin')->logout();

        // Invalidate the session and regenerate the session ID to prevent session fixation
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the login page
        return redirect()->route('admin-login')->with('logout_success', true);
    }
}
