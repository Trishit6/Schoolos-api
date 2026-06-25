<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'academic_session_id',
        'academic_class_id',
        'roll_no',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function student()
    {
        return $this->belongsTo(
            Student::class
        );
    }

    public function academicSession()
    {
        return $this->belongsTo(
            AcademicSession::class
        );
    }

    public function academicClass()
    {
        return $this->belongsTo(
            AcademicClass::class
        );
    }
}
