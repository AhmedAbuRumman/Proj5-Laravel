<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('Major');
        
      $majors = Major::all();
      $categories = Category::all();
       
    //   return $majors;
        return view('ManageMajor',compact('majors','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $majors = Major::all();
        $categories = Category::all();
       
       return view('ManageMajor',compact('majors','categories'));

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $majors              = new Major();
         $majors->major_name   =$request->get('major_name');
         $majors->category_id  =$request->get('category_id');

         $majors->save();
         return redirect('Major');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function showMajor($id)
    {
       $majors = Major::where('category_id' ,$id)->pluck('major_name','id');
       return json_encode($majors);
        
    }

    public function show1($id)
    {
        // $post=Major::find($id)->catposts;
        // return view('Postsmajors',compact('post'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $majors = Major::where('id','=',$id)->first();
           return view('edit_Major',[
            'majors'=>$majors
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Major $id)
    {
        ////$majors = Major::where('major_name_id','=',$Major)->first();
        // $majors=Major::where("id",$id)->update([
        //     'major_name' => $request->input('major_name'),
          

        //     ]) ;
        //     return view('edit_Major',compact('majors'));
       ///

       $maj =  Major::where('id','=' ,$id)->first();
       $maj->update($request->all());
     // $category->update('job_cat' => $request('job_cat'));
     return redirect('Major');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Major::findOrFail($id)->delete();
        return redirect('Major');
    }
    // public function delete($Major)   {
    //    //$major = Major::where('major_name_id','=',$Major)->first();
    //     Major::where('id', $Major)->delete();
    //    // $major->delete();
    //     return redirect()->route('Major');
    // }
}
