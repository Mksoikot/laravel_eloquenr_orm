<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Option 1
        // $data['categories'] = Category::all();
        // return view('backend.category.index',$data);

        // Option 2
        // $categories = Category::all();
        // return view('backend.category.index',['categories'=>$categories]);

         // Option 3
        $categories = Category::all();
        return view('backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ],[
            'name.required'=>'Name Field is Required',
            'description.required'=>'Description Field is Required',
        ]);
         // Option 1
        // $data['name'] = $request->name;
        // $data['description'] = $request->description;
        // Category::create($data);
        // return redirect()->route('categories.index');

         // Option 2
        Category::create([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //Option 1
        // $data['category']= $category;
        // return view('backend.category.show',$data);

        //Option 2
        // return view('backend.category.show',['category'=>$category]);

        //Option 3
        return view('backend.category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //Option 1
        // $data['category'] = $category;
        // return view('backend.category.edit',$data);

        //Option 2
        return view('backend.category.edit',['category'=>$category]);

        //Option 3
        // return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // Option 1
        // $data['name'] = $request->name;
        // $data['description'] = $request->description;
        // $category->update($data);

        // return redirect()->route('categories.index');
        // Option 2
        // Category::where('id',$category->id)->update([
        //     'name'=> $request->name,
        //     'description'=> $request->description
        // ]);
        // return redirect()->route('categories.index');

        // Option 3
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
