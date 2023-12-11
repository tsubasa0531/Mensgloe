<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
        public function create()
{
    return view('reviews.create');
}
    public function index()
    {  
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }
    //
    public function store(Request $request, $productId)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            ]);
            
            $review = new Review;
            $review->user_id = auth()->user()->id;
            $review->title = $validatedData['title'];
            $review->body = $validatedData['body'];
            $review->save();
            
            return redirect()->route('reviews.index');
    }
    public function show(Review $review)
    {
        return view('reviews.show', compact('review'));
    }
    public function showReviewPage()
    {  
      return view('review');
        
    }
}
