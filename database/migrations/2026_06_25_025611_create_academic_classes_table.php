<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('academic_classes', function (Blueprint $table) {

            $table->id();

            $table->foreignId('academic_session_id')
                ->constrained('academic_sessions')
                ->cascadeOnDelete();

            $table->foreignId('academic_standard_id')
                ->constrained('academic_standards')
                ->cascadeOnDelete();

            $table->string('name');

            $table->unsignedInteger('capacity')
                ->default(50);

            $table->boolean('status')
                ->default(true);

            $table->timestamps();

            $table->unique([
                'academic_session_id',
                'academic_standard_id',
                'name',
            ], 'academic_class_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(
            'academic_classes'
        );
    }
};
