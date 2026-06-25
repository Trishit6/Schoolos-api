<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'admission_no',
        'admission_date',
        'status',
    ];

    protected $casts = [
        'admission_date' => 'date',
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
