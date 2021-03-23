<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

use Resource;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('Category', [
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('Category', [
            'categories' => $categories,
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
        $category            = new Category();
        $category->job_cat   = $request->get('job_cat');
        $category->image     = $request->get('image');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/photo/', $filename);
            $category->image = $filename;
        } else {
            // return $request;
            $category->image = '';
        }
        $category->save();
        return redirect('Categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $post = Category::find($id)->catposts;
        // return view('PostsCategories', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Category::where('id', '=', $id)->first();
        return view('edit_category', [
            'categorie' => $categorie
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Category $id)
    {
        // dd($id);
          $cat =  Category::where('id','=' ,$id)->first();
          $cat->update($request->all());
        // $category->update('job_cat' => $request('job_cat'));
        return redirect('Categories');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->route('Categories.create');
    }
}
