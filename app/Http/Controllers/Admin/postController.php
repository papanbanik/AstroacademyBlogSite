<?php

namespace App\Http\Controllers\Admin;
use App\Models\post;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class postController extends Controller
{

    public function index()
{
    $posts = Post::all(); // Assuming your model is named Post
    $categories = Category::all(); // Assuming your model is named Category

    return view('admin.post', compact('posts', 'categories'));
}

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $request->validate([
             'title' => 'required',
             'category_id' => 'required',
             'description' => 'required',// Ensure 'description' is required
         ]);

         $data = [
             'title' => $request->title,
             'category_id' => $request->category_id,
             'description' => $request->description,
         ];

         Post::create($data);

         return redirect()->back();
     }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
