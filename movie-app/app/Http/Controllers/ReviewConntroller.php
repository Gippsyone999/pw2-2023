<?php

namespace App\Http\Controllers;

use App\models\review;
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
        $reviews = Review::all();

        return view ('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reviews = Review::all();

        return view('reviews.create', compact('reviews'));
        
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
    public function edit(Review $review)
    {
        return view('reviews.edit', compact('review', 'review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $validateData = $request->validate([
            'film' => 'required',
            'user' => 'required',
            'rating' => 'required|numeric',
            'review' => 'required',
            'tanggal' => 'required',
        ]);

        $review->update($validateData);
        return redirect('/reviews')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect('/reviews')->with('success', 'Movie deleted successfully!');
    }
}
