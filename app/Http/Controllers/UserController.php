<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\User;
use  App\Models\Profile;


class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('Manage_Users',[
            'users' => $users,
        ]);
    }

    public function create()
    {

        $users = User::all();
        return view('Manage_Users',[
            'users' => $users,
        ]);

    }

    

    
    public function show(){

        $users = User::OrderBy('created_at', 'desc')->get();
        return view('Manage_Users', compact('users'));

    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect ('/Users');

    }
}
