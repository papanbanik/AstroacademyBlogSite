<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Category as ModelsCategory;
use Illuminate\Http\Request;
class CategoryController extends Controller
{

    public function index()
    {
        $categories= Category::orderby('id' ,'desc')->get();
        return view('admin.category',compact('categories'));
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
            'name' => 'required|unique:categories,name|max:255',
            'description' => 'required', // Fixed the typo here
        ]);

    $data=[
        'name'=>$request->name,
        'description'=>$request->description,
    ];

    Category::create($data);
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
