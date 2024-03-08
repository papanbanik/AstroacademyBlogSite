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
        $posts= Post::orderby('id' ,'desc')->get();
        return view('admin.post',compact('posts'));
    }

    public function addpost()
    {
        $categories = Category::all();
        $objPost=new Post();

        $posts=$objPost->join('categories','categories.id', '=', 'posts.category_id')
              ->select('posts.*', 'categories.name as category_name')
              ->get();
        return view('admin.layouts.includes.addpost', compact('categories','posts'));
    }

    public function create()
    {
    }
    /**
     * Store a newly created resource in storage.
     */


public function store(Request $request)
{
    $request->validate([
        'title' => 'required|max:255',
        'category_id' => 'required|exists:categories,id',
        'description' => 'required|max:1000',
        'status' => 'nullable|in:1,0', // Assuming status can be 1 or 0
        'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = [
        'title' => $request->title,
        'description' => $request->description,
        'category_id' => $request->category_id,
        'status' => $request->status,
    ];

    if ($request->hasFile('thumbnail')) {
        $file = $request->file('thumbnail');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move(public_path('post_thumbnails'), $filename);
        $data['thumbnail'] = $filename;
    }

    Post::create($data);

    return redirect()->back()->with('success', 'Post created successfully');
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
