<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'academic_session_id',
        'academic_standard_id',
        'name',
        'capacity',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function academicSession()
    {
        return $this->belongsTo(
            AcademicSession::class
        );
    }

    public function academicStandard()
    {
        return $this->belongsTo(
            AcademicStandard::class
        );
    }

    public function studentSessions()
    {
        return $this->hasMany(
            StudentSession::class
        );
    }
}
