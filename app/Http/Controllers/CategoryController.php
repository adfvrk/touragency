<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('category/category', ['categories' => $categories]);        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('category/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required | string',
        ]);

        Category::create($data);
        $categories = Category::all();
        return view('category/category',['categories'=> $categories]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        return view('category/show',['category'=>$category]);
    } 
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('category/edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = request()->validate([
            'name' => 'required | string',
        ]);
        Category::where('id', $id)->update($data);
        $categories = Category::all();
        return view('category/category',['categories'=> $categories]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $category = Category::find($id);
       $category->delete();
       $categories = Category::all();
       return view('category/category',['categories'=> $categories]); 
    }
}
