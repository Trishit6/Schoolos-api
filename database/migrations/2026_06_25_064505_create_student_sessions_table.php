<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('student_sessions', function (Blueprint $table) {

            $table->id();

            $table->foreignId('student_id')
                ->constrained('students')
                ->cascadeOnDelete();

            $table->foreignId('academic_session_id')
                ->constrained('academic_sessions')
                ->cascadeOnDelete();

            $table->foreignId('academic_class_id')
                ->constrained('academic_classes')
                ->cascadeOnDelete();

            $table->unsignedInteger('roll_no');

            $table->boolean('status')
                ->default(true);

            $table->timestamps();

            $table->unique([
                'academic_session_id',
                'academic_class_id',
                'roll_no',
            ], 'unique_roll_per_class');

            $table->unique([
                'student_id',
                'academic_session_id',
            ], 'unique_student_session');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(
            'student_sessions'
        );
    }
};
