<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::all();
        return view('tour/tour', ['tours' => $tours]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tour/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'short_description' => 'required|string|min:10|max:100',
            'description' => 'required|string|min:10|max:512',
            'price' => 'required|string|max:10',
            'img' => 'required|url|max:255',
        ]);

         $status = $request->has('status') && $request->input('status') === 'on' ? 1 : 0;         
         
         $data['status'] = $status;

         Tour::create($data);
         $tours = Tour::all();
         return view('tour/tour', ['tours' => $tours]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tour = Tour::find($id);
        return view('tour/show', ['tour' => $tour]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tour = Tour::find($id);
        return view('tour/edit', ['tour' => $tour]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $data = $request->validate([
        'name' => 'required|string',
        'short_description' => 'required|string|min:10|max:100',
        'description' => 'required|string|min:10|max:512',
        'price' => 'required|string|max:10',
        'img' => 'required|url|max:255'          
       ]);
         $status = $request->has('status') && $request->input('status') === '1' ? 1 : 0;
         $data['status'] = $status;
         
       Tour::where('id', $id)->update($data);
       $tours = Tour::all();
       return view('tour/tour', ['tours' => $tours]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tour = Tour::find($id);
        $tour->delete();
        $tours = Tour::all();
        return view('tour/tour', ['tours' => $tours]);
    }
}
