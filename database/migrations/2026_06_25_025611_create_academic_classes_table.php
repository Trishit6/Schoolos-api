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

            $table->foreignId('academic_standard_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('name');

            $table->string('code')->unique();

            $table->unsignedInteger('capacity')->default(50);

            $table->boolean('status')->default(true);

            $table->timestamps();

            $table->unique([
                'academic_standard_id',
                'name',
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('academic_classes');
    }
};
