<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable = [
        'user_id', 
        'depart_id', 
        'address', 
        'place_of_birth', 
        'dob', 
        'religion', 
        'sex', 
        'phone', 
        'salary', 
        'photo', // Tambahkan kolom foto
        'employment_status' // Tambahkan kolom status kerja
    ];

    // Hubungan ke model Department
    public function department()
    {
        return $this->belongsTo(Department::class, 'depart_id');
    }

    // Hubungan ke model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Hubungan ke model Leave
    public function leaves()
    {
        return $this->hasMany(Leave::class, 'user_id');
    }
}
