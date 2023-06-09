<?php

namespace App\Http\Controllers;

use App\models\Review;
use App\Http\Controllers\Controller;
use App\Models\review as ModelsReview;
use Illuminate\Http\Request;

class ReviewConntroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Reviews = Review::all();

        return view ('Reviews.index', compact('Reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Reviews = Review::all();
        return view('reviews.create', compact('Reviews'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'film' => 'required',
            'user' => 'required',
            'rating' => 'required|numeric',
            'review' => 'required',
            'tanggal' => 'required',
        ]);

        Review::create($validateData);
        return redirect('/reviews')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $Reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $Reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $Reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $Reviews)
    {
        $Reviews->delete();
        return redirect('/reviews')->with('success', 'Movie deleted successfully!');
    }
}
