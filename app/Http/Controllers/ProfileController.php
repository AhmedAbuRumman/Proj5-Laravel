<?php

namespace App\Http\Controllers;

use App\Recruiter;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Major;
use App\Models\Skill;
use App\Models\JobPost;
use App\Models\JobPostUser;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{


    /**
     * Display the specified resource.
     *
     * @param  \App\User  $profile
     * @return \Illuminate\Http\Response
     */

    public function show2(User $id)
    {
        $majors = Major::all();
        $categories = Category::all();
        $skills = Skill::all();
        $viewProfile = Auth::user();
        return view('user/user_profile', compact('viewProfile', 'majors', 'categories', 'skills'));
    }



    public function show3($id)
    {

        $seek = User::find($id);
        return view('user/applied_job', compact('seek'));
        // foreach($seek->jobpost as $s){
        //     return view('user/applied_job', compact('s'));
        // }

    }


    public function create(Request $request)
    {
    }

    public function edit(User $edit)
    {


        // $edit = User::find($id);
        $majors = Major::all();
        $categories = Category::all();
        $skills = Skill::all();
        return view('user/edit', compact('edit', 'categories', 'majors', 'skills'));
        // return $user;
    }


    public function update(Request $request, $id)
    {



        $user_id = Auth::user()->id;
        $this->create($request);

        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . "." . $file_extension;
        $path = 'uploads/photo';
        $request->image->move($path, $file_name);

        $file_extension = $request->video->getClientOriginalExtension();
        $file_name1 = time() . "." . $file_extension;
        $path = 'uploads/video';
        $request->video->move($path, $file_name1);


        // if($request->hasFile('video')){
        //     $video_tmp = $request->file('video');
        //     $video_name = $video_tmp->getClientOriginalName();
        //     $video_path = 'videos/';
        //     $video_tmp->move($video_path,$video_name);
        //     $user->video = $video_name;
        // }

        User::where('id', $user_id)->update([
            'name'              => $request->input('name'),
            'email'             => $request->get('email'),
            'number'            => $request->get('number'),
            'university'        => $request->get('university'),
            'category_id'       => $request->get('category'),
            'major_id'          => $request->get('major'),
            'job_title'         => $request->get('job_title'),
            'company_name'      => $request->get('company_name'),
            'desc'              => $request->get('desc'),
            'github_link'       => $request->get('github_link'),
            "image"             => $file_name,
            "video"             => $file_name1,


        ]);

        $user = User::find($user_id);

        foreach ($request->get('skill') as $skill) {
            $user->skills()->attach($skill);
        }

        return redirect("/user_profile/$id");
    }


    public function apply(User $id)
    {





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
