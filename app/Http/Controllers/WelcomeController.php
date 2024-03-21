<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Category;
use App\Models\Post;
use App\Models\Order;
class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::all();
        $message = "";
        return view('welcome/welcome',['tours' => $tours, 'message' => $message]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'pip' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|email',
            'tour_id' => 'required|integer',
            'count_day' => 'required|integer',
            'price' => 'required|numeric',
        ]);
       
        Order::create($data);
        $tours = Tour::all();
        $message = "Ваше замовлення прийнято. Наш менеджер зв'яжеться з вами найближчим часом";
        return view('welcome/welcome', ['tours' => $tours, 'message' => $message]);
        //return redirect()->route('order.index');
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

    public function category()
    {
        $categories=Category::all();
        return view('welcome/category',['categories' => $categories]);
    }

    public function post(string $id)
    {
        $posts = Post::where('category_id', $id)->get();
        $categoryNames = Category::whereIn('id', $posts->pluck('category_id')->unique())->pluck('name', 'id');
        return view('welcome.post', ['posts' => $posts,'categoryNames' => $categoryNames]);

    }

    public function allpost()
    {
        $posts=Post::all();
        $categoryNames = Category::whereIn('id', $posts->pluck('category_id')->unique())->pluck('name', 'id');
        return view('welcome/post',['posts' => $posts,'categoryNames' => $categoryNames]);
    }
}
