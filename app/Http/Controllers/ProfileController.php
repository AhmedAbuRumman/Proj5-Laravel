<?php

namespace App\Http\Controllers;

use App\Recruiter;
use Illuminate\Http\Request;
use App\User;
use App\JobPost;
use App\JobPostUser;

class ProfileController extends Controller
{
   

 /**
     * Display the specified resource.
     *
     * @param  \App\User  $profile
     * @return \Illuminate\Http\Response
     */

    public function show2(User $id){

        $viewProfile = User::find($id);
        return view('user/user_profile', compact('viewProfile'));

 
    }
    


    public function show3( $id){

       $seek = User::find($id);
       return view('user/applied_job', compact('seek'));
    // foreach($seek->jobpost as $s){
    //     return view('user/applied_job', compact('s'));
    // }

    }


    public function create(Request $request){

    }

    public function edit(User $id)
    {
        //

            $edit = User::findOrFail($id);
            return view('user/edit', compact('edit'));

    }


    public function update(Request $request,  $id)
    {
        $this->create($request);
        //
        if  ($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('images', $filename);
            
        }else{
            // $filename = User::find($id)->{"image"};
            $filename = "default.png";
        }
        User::where('id',$id)->update([
            'first_name'        => $request->input('first_name'),
            'last_name'         => $request->input('last_name'),
            'email'             => $request->input('email'),
            'university'        => $request->input('university'),
            'degree'            => $request->input('degree'),
            'major'             => $request->input('major'),
            'bio'               => $request->input('bio'),
            'ex_job_title'      => $request->input('ex_job_title'),
            'ex_company_name'   => $request->input('ex_company_name'),
            'ex_start_date'     => $request->input('ex_start_date'),
            'ex_end_date'       => $request->input('ex_end_date'),
            'ex_job_desc'       => $request->input('ex_job_desc'),
            'image'     => $filename,
            ]);
         
            return redirect("/user_profile/$id");

            
    }


    public function apply(User $id){





        $user = User::find($id);
        $job = JobPost::find($id);
        return view('user/user_profile', compact('job'));

    }



    public function store(Request $request, $id)
    {       
        $this->create($request);

        // $user = User::find($id);
        $post = JobPost::find($id);
        // return $post->id;
        $post->user()->attach(1);
        // $post->user()->attach($id);



 
       return redirect('/view_post');
    }



}