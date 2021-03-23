<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class RecruiterLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:recruiter');
    }
    public function showLoginForm()
    {
        return view('auth.recruiter-login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('recruiter')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('recruiter.dashboard'));
        }
            return  redirect()->back()->withInput($request->only('email', 'remember'));


    }
}
