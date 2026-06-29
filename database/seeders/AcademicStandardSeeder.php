<?php

namespace Database\Seeders;

use App\Models\AcademicStandard;
use Illuminate\Database\Seeder;

use App\Models\AcademicClass;
class AcademicStandardSeeder extends Seeder
{
    public function run(): void
    {
        $standards = [
            [
                'name' => 'Nursery',
                'code' => 'NUR',
                'status' => true,
            ],
            [
                'name' => 'LKG',
                'code' => 'LKG',
                'status' => true,
            ],
            [
                'name' => 'UKG',
                'code' => 'UKG',
                'status' => true,
            ],
            [
                'name' => 'Class 1',
                'code' => 'C1',
                'status' => true,
            ],
            [
                'name' => 'Class 2',
                'code' => 'C2',
                'status' => true,
            ],
            [
                'name' => 'Class 3',
                'code' => 'C3',
                'status' => true,
            ],
            [
                'name' => 'Class 4',
                'code' => 'C4',
                'status' => true,
            ],
            [
                'name' => 'Class 5',
                'code' => 'C5',
                'status' => true,
            ],
            [
                'name' => 'Class 6',
                'code' => 'C6',
                'status' => true,
            ],
            [
                'name' => 'Class 7',
                'code' => 'C7',
                'status' => true,
            ],
            [
                'name' => 'Class 8',
                'code' => 'C8',
                'status' => true,
            ],
            [
                'name' => 'Class 9',
                'code' => 'C9',
                'status' => true,
            ],
            [
                'name' => 'Class 10',
                'code' => 'C10',
                'status' => true,
            ],
            [
                'name' => 'Class 11',
                'code' => 'C11',
                'status' => true,
            ],
            [
                'name' => 'Class 12',
                'code' => 'C12',
                'status' => true,
            ],
        ];

        foreach ($standards as $standard) {
            AcademicStandard::updateOrCreate(
                [
                    'code' => $standard['code'],
                ],
                $standard
            );
        }
    }
}
