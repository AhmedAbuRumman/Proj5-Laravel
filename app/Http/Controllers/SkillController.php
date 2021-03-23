<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Major;
use App\Models\Category;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('Skill');
        
        $majors = Major::all();
        $categories = Category::all();
        $skills = Skill::all();

         return view('ManageSkill',compact('majors','categories','skills'));
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
        $skills = Skill::all();

       
        return view('ManageSkill',compact('majors','categories','skills'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $skills              = new Skill();
         $skills->skill_name  =$request->get('skill_name');
         $skills->save();
         $skills->majors()->attach($request->get('major_id'));
         return redirect('Skill');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $skills = Skill::findOrFail($id);
         return view('ManageSkill',compact('skills','id'));
    }

    public function show1($id)
    {
        // $post=Skill::find($id)->catposts;
        // return view('Postsskills',compact('post'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skills = Skill::where('id','=',$id)->first();
           return view('editSkill',[
            'Skills'=>$skills
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$skills)
    {
        ////$Skill = Skill::where('Skill_name_id','=',$Skill)->first();
        Skill::where('id','=' ,$skills)
        ->update(['skill_name' => $request->get('skill_name')]);
       return redirect()->route('Skill');
       ///

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function destroy($skills)   {
       //$Skill = Skill::where('Skill_name_id','=',$Skill)->first();
        Skill::where('id', $skills)->delete();
       // $Skill->delete();
        return redirect('Skill');
    }
}
