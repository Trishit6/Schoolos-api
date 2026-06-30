<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\StudentSession;
class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dateOfBirth',
        'guardianName',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(
            User::class
        );
    }

    public function studentSessions()
    {
        return $this->hasMany(
            StudentSession::class
        );
    }
}
