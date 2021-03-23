<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\JobPost;
use App\Models\Recruiter;
use DB;
use Illuminate\Http\Request;

class JobPostController extends Controller
{


    public function index()
    {
        $all_posts = JobPost::all();

    
        return view ('recruiter.view_post' , compact('all_posts'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function indexhome()
    {
        $all_posts1 = JobPost::all();

        return view ('/home' , compact('all_posts1'));
    }


    public function indexsinglepage($id)
    {
        $all_posts1 = JobPost::find($id);

        return view ('/single' , compact('all_posts1'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $validatedInputs= $request->validate([
           

            "email"          => "required|email",
            "job_title"      => "required",
            "job_desc"       => "required",
            "category_id"    => "required",
            "company_name"   => "required",
            "job_city"       => "required",
            "company_logo"       => "required",
            "phone"          => "required",
            

        ]);


    

        return $this->store($request);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_extension = $request->company_logo->getClientOriginalExtension();
        $file_name=time().".".$file_extension;
        $path = 'uploads/logo';
        $request->company_logo->move($path ,$file_name);

                JobPost::create([
                "email"           =>request('email'),
                "job_title"       =>request('job_title'),
                "job_desc"        =>request('job_desc'),
                "category_id"     =>request('category_id'),
                "company_name"    =>request('company_name'),
                "job_city"        =>request('job_city'),
                "company_logo"    =>$file_name,
                "phone"           =>request('phone'),
        ]);


        return redirect('view_post');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobPost  $JobPost
     * @return \Illuminate\Http\Response
     */
    public function show(JobPost $Jobpost,$id)
    {
        $user=JobPost::where("id",$id)->get()->first();
        return view('view_post',compact('user'));
    }

    public function show1(JobPost $Jobpost,$id)
    {
        $user=JobPost::where("id",$id)->get()->first();
        return view('recruiter.single',compact('user'));
    }

    public function show2(JobPost $id)
    {
        $view=Recruiter::find($id);
         return view('recruiter.recruiter_profile',compact('view'));
        // foreach($view as $v){
        // return $v->id;
        // }
        

    }    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobPost  $recruiter
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPost $JobPost,$id)
    {
        $recruiterEdit=JobPost::find($id);

        return view ('recruiter.edit_post', compact('recruiterEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobPost  $Jobpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPost $Jobpost,$id)
    {
        JobPost::where ("id" , $id)->update(
            [
                "email"           =>request('email'),
                "job_title"       =>request('job_title'),
                "job_desc"        =>request('job_desc'),
                "company_name"    =>request('company_name'),
                "job_city"        =>request('job_city'),
                "street_address"  =>request('street_address'),
                "phone"           =>request('phone'),



        ]);

        return redirect('view_post');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobPost  $recruiter
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPost $Jobpost,$id)
    {
        $delete_post=JobPost::destroy($id);
    
        return redirect ('view_post');

    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create11()
    {
      return view('recruiter.job_post',[
          'categories' => Category::all(),
      ]);
    }

    public function search(Request $request)
    {
        $posts = JobPost::where('job_title', 'like', '%' . request('job_title') . '%')
                                     ->get();
        return view('searchPost',[
            'posts' => $posts
        ]);
    }
    

}









