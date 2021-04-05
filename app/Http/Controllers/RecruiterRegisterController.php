<?php

namespace App\Http\Controllers;

use App\Models\Recruiter;
use App\RecruiterController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Auth;

class RecruiterRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Auth/recruiter-register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $recruiters = Recruiter::all();
        return view('home',[
            'recruiters' => $recruiters,
        ]);

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recruiter = new Recruiter();
        $recruiter->id       =$request->get('id');
        $recruiter->name     =$request->get('name');
        $recruiter->email    =$request->get('email');
        $recruiter->password = Hash::make($request->get('password'));
        $recruiter->save();
       

        if (Auth::guard('recruiter')->attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            return redirect()->route('recruiter.dashboard');
            
        }

        return redirect('recruiter/login');
    }







}
