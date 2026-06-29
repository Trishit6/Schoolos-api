<?php

namespace Database\Seeders;

use App\Models\AcademicClass;
use Illuminate\Database\Seeder;

class AcademicClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [

            // Nursery
            ['academic_standard_id' => 1, 'name' => 'A', 'code' => 'NUR-A', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 1, 'name' => 'B', 'code' => 'NUR-B', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 1, 'name' => 'C', 'code' => 'NUR-C', 'capacity' => 50, 'status' => true],

            // LKG
            ['academic_standard_id' => 2, 'name' => 'A', 'code' => 'LKG-A', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 2, 'name' => 'B', 'code' => 'LKG-B', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 2, 'name' => 'C', 'code' => 'LKG-C', 'capacity' => 50, 'status' => true],

            // UKG
            ['academic_standard_id' => 3, 'name' => 'A', 'code' => 'UKG-A', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 3, 'name' => 'B', 'code' => 'UKG-B', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 3, 'name' => 'C', 'code' => 'UKG-C', 'capacity' => 50, 'status' => true],

            // Class 1
            ['academic_standard_id' => 4, 'name' => 'A', 'code' => 'C1-A', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 4, 'name' => 'B', 'code' => 'C1-B', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 4, 'name' => 'C', 'code' => 'C1-C', 'capacity' => 50, 'status' => true],

            // Class 2
            ['academic_standard_id' => 5, 'name' => 'A', 'code' => 'C2-A', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 5, 'name' => 'B', 'code' => 'C2-B', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 5, 'name' => 'C', 'code' => 'C2-C', 'capacity' => 50, 'status' => true],

            // Class 3
            ['academic_standard_id' => 6, 'name' => 'A', 'code' => 'C3-A', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 6, 'name' => 'B', 'code' => 'C3-B', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 6, 'name' => 'C', 'code' => 'C3-C', 'capacity' => 50, 'status' => true],

            // Class 4
            ['academic_standard_id' => 7, 'name' => 'A', 'code' => 'C4-A', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 7, 'name' => 'B', 'code' => 'C4-B', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 7, 'name' => 'C', 'code' => 'C4-C', 'capacity' => 50, 'status' => true],

            // Class 5
            ['academic_standard_id' => 8, 'name' => 'A', 'code' => 'C5-A', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 8, 'name' => 'B', 'code' => 'C5-B', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 8, 'name' => 'C', 'code' => 'C5-C', 'capacity' => 50, 'status' => true],

            // Class 6
            ['academic_standard_id' => 9, 'name' => 'A', 'code' => 'C6-A', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 9, 'name' => 'B', 'code' => 'C6-B', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 9, 'name' => 'C', 'code' => 'C6-C', 'capacity' => 50, 'status' => true],

            // Class 7
            ['academic_standard_id' => 10, 'name' => 'A', 'code' => 'C7-A', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 10, 'name' => 'B', 'code' => 'C7-B', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 10, 'name' => 'C', 'code' => 'C7-C', 'capacity' => 50, 'status' => true],

            // Class 8
            ['academic_standard_id' => 11, 'name' => 'A', 'code' => 'C8-A', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 11, 'name' => 'B', 'code' => 'C8-B', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 11, 'name' => 'C', 'code' => 'C8-C', 'capacity' => 50, 'status' => true],

            // Class 9
            ['academic_standard_id' => 12, 'name' => 'A', 'code' => 'C9-A', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 12, 'name' => 'B', 'code' => 'C9-B', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 12, 'name' => 'C', 'code' => 'C9-C', 'capacity' => 50, 'status' => true],

            // Class 10
            ['academic_standard_id' => 13, 'name' => 'A', 'code' => 'C10-A', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 13, 'name' => 'B', 'code' => 'C10-B', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 13, 'name' => 'C', 'code' => 'C10-C', 'capacity' => 50, 'status' => true],

            // Class 11
            ['academic_standard_id' => 14, 'name' => 'A', 'code' => 'C11-A', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 14, 'name' => 'B', 'code' => 'C11-B', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 14, 'name' => 'C', 'code' => 'C11-C', 'capacity' => 50, 'status' => true],

            // Class 12
            ['academic_standard_id' => 15, 'name' => 'A', 'code' => 'C12-A', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 15, 'name' => 'B', 'code' => 'C12-B', 'capacity' => 50, 'status' => true],
            ['academic_standard_id' => 15, 'name' => 'C', 'code' => 'C12-C', 'capacity' => 50, 'status' => true],
        ];
        foreach ($classes as $class) {
            AcademicClass::create($class);
        }
    }
}
