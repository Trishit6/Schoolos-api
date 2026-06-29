<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'academic_standard_id',
        'name',
        'code',
        'capacity',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function academicStandard()
    {
        return $this->belongsTo(AcademicStandard::class);
    }

    public function studentSessions()
    {
        return $this->hasMany(StudentSession::class);
    }
}
