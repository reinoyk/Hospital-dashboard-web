<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function ratings()
    {
        return $this->hasMany(DoctorRating::class);
    }

    public function averageRating()
    {
        return $this->ratings()->avg('rating');
    }
}
