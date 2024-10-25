<?php
//input php artisan make:model DoctorRating

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorRating extends Model
{
    use HasFactory;

    protected $fillable = ['rating']; // Add 'comment' to the fillable fields

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
    
