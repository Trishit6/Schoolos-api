use App\Models\User;
use App\Models\StudentSession;
use Illuminate\Database\Eloquent\Factories\HasFactory;
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->date('dateOfBirth');

            $table->string('guardianName')
                ->unique();

            $table->boolean('status')
                ->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(
            'students'
        );
    }
};
