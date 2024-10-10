<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances';

    protected $fillable = [
        'user_id',
        'attendance_date',
        'status',
    ];

    // Menambahkan casting untuk kolom tanggal
    protected $casts = [
        'attendance_date' => 'datetime', // Mengonversi attendance_date ke objek Carbon
    ];

    /**
     * Get the employee that owns the attendance.
     */
    public function employee()
    {
        return $this->belongsTo(Employees::class, 'user_id');
    }
}
