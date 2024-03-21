<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $categoryNames = Category::whereIn('id', $posts->pluck('category_id')->unique())->pluck('name', 'id');
        return view('post/post', ['posts' => $posts,'categoryNames' => $categoryNames]);
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all(); 
        return view('post/create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            'name' => 'required|string',
            'category_id' => 'required',
            'description' => 'required|string|min:10|max:255'
        ]);
        Post::create($data);

        $posts = Post::all();
        $categoryNames = Category::whereIn('id', $posts->pluck('category_id')->unique())->pluck('name', 'id');
        return view('post/post', ['posts' => $posts,'categoryNames' => $categoryNames]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('post/show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('post/edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = request()->validate([
            'name' => 'required|string',
            'category_id' => 'required',
            'description' => 'required|string|min:10|max:255',
        ]);
        Post::where('id', $id)->update($data);
        $posts=Post::all();
        $categoryNames = Category::whereIn('id', $posts->pluck('category_id')->unique())->pluck('name', 'id');
        return view('post/post', ['posts' => $posts,'categoryNames' => $categoryNames]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        $posts = Post::all();
        $categoryNames = Category::whereIn('id', $posts->pluck('category_id')->unique())->pluck('name', 'id');
        return view('post/post', ['posts' => $posts,'categoryNames' => $categoryNames]);
    }
}
