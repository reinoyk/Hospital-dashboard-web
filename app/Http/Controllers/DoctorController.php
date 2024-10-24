<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;  // Assuming you have a Doctor model
use App\Models\DoctorRating;

class DoctorController extends Controller
{
    public function rate(Request $request, $doctorId)
    {
        $rating = $request->input('rating');

        // Validate the rating input
        if ($rating < 1 || $rating > 5) {
            return response()->json(['error' => 'Invalid rating'], 400);
        }

        // Save the rating (assuming you have a DoctorRating model)
        DoctorRating::create([
            'doctor_id' => $doctorId,
            'rating' => $rating
        ]);

        return response()->json(['success' => 'Rating saved successfully']);
    }
}
