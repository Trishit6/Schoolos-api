<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'employee_id',
        'designation',
        'joining_date',
        'salary',
        'status',
    ];

    protected $casts = [
        'joining_date' => 'date',
        'status' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(
            User::class
        );
    }
}
