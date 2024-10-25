<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\GeneralRating; // I’ll assume you’re using DoctorReview for both ratings and comments
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    // Method to display all doctors and their reviews
    public function index(){
        // Fetch all doctors with their reviews
        $doctors = Doctor::with('ratings')->take(3)->get();

        // Calculate overall average rating for all doctors
        $overallRating = GeneralRating::avg('rating');

        // Return the view with both the list of doctors and the overall rating
        return view('doctors', compact('doctors', 'overallRating'));
    }

    // Method to store the rating and comment for a doctor
    public function storeReview(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Save the rating 
        GeneralRating::create([
            'rating' => $request->rating,
        ]);

        return redirect()->back()->with('success', 'Review added successfully!');
    }
}

