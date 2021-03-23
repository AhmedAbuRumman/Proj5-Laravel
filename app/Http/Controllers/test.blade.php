<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Cache\RedisTaggedCache;
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
        return view('majors',[
            'majors' => $majors,]);
            
    //   $majors = Major::all();
    //   return view('ManageMajor', compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $Major              = new Major();
        //  $Major->major_name  =$request->get('major_name');
        //  $Major->save();
        //  return redirect()->route('Major');

         Major::create([
             'major_name' => $request->input('major_name')
         ]);

         return $this->index();
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

    public function show1($id)
    {
        // $post=Major::find($id)->catposts;
        // return view('Postsmajors',compact('post'));

        $major = Major::where("id",$id)->get()->first();
        return view('EditMajor',compact('major'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $major = Major::where('id','=',$id)->first();
        //    return view('edit_Major',[
        //     'major'=>$major
        // ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$Major,$id)
    {
    //     ////$major = Major::where('major_name_id','=',$Major)->first();
    //     Major::where('id','=' ,$Major)
    //     ->update(['major_name' => $request->get('major_name')]);
    //    return redirect()->route('Major');
    //    ///

       Major::where('id',$id)->update([
        'major_name' => $request->input('major_name')
       ]);


       return redirect('/ManageMajor');

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function delete($Major,$id)   {
    //    //$major = Major::where('major_name_id','=',$Major)->first();
    //     Major::where('id', $Major)->delete();
    //    // $major->delete();
    //     return redirect()->route('Major');

        Major::destroy($id);
        return redirect('ManageMajor');
    }
}
