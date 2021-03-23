<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use Illuminate\Http\Request;

use Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('Manage_Admins');
        $admins = Admin::all();
        return view('Manage_Admins', [
            'admins' => $admins,
        ]);
    }


    /**
     * new cooode
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        //   $admins = Admin::all();
        $admins = Admin::all();
        return view('Manage_Admins',[
            'admins' => $admins,
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
        $admin = new Admin();
        $admin->name       =$request->get('name');
        $admin->email      =$request->get('email');
        $admin->password   = Hash::make($request->get('password'));


        $admin->save();
        return redirect('Admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::where('id','=',$id)->first();
        return view('edit_Admins',[
            'admin'=>$admin
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
   

    public function update(Request $request,$id)
    {
        $admin = Admin::findOrfail($id);
        $admin->name=$request->get('name');
        $admin->email=$request->get('email');
        $admin->password=$request->get('password');

       
        $admin->save();
        return redirect('Admin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
      {
       
        Admin::findOrFail($id)->delete();
        return redirect('Admin');
    }



}
