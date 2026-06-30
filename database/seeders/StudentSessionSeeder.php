<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSessionSeeder extends Seeder
{
    public function run(): void
    {
        $sessions = [
            [
                'student_id' => 54,
                'academic_session_id' => 1,
                'academic_class_id' => 2,
                'roll_no' => 1,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => 55,
                'academic_session_id' => 1,
                'academic_class_id' => 2,
                'roll_no' => 2,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('student_sessions')->insert($sessions);
    }
}
