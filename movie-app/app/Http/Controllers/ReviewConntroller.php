<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewConntroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $review = new review;
        $data2 = $review->getAllreviews();

        return view ('reviews/index', ['reviews' => $data2]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $Review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $Review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $Review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $Review)
    {
        //
    }
}
