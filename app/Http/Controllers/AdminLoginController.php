<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

use Auth;

class AdminLoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest:admin');
    // }
    public function showLoginForm()
    {
        return view('admin_login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect('welcome_admin');
            // // return Auth::guard('admin')->check();
            // return Auth::guard('web')->check();
            // return Auth::guard('recruiter')->check();
        }
            // return  redirect()->back()->withInput($request->only('email', 'remember'));
            return redirect("/");


    }
}
