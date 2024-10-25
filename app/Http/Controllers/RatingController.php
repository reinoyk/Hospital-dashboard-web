<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralRating; // Assuming you have a model for general ratings

class RatingController extends Controller
{
    public function storeRating(Request $request)
    {
        // Validate the input
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Store the rating in the database (you need a GeneralRating model and table)
        GeneralRating::create([
            'rating' => $request->rating,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your rating!');
    }
}
