<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'name' => 'Aarav Sharma',
                'dateOfBirth' => '2009-04-12',
                'guardianName' => 'Rajesh Sharma',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ananya Patel',
                'dateOfBirth' => '2011-11-23',
                'guardianName' => 'Sunita Patel',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Vivaan Gupta',
                'dateOfBirth' => '2010-01-05',
                'guardianName' => 'Amit Gupta',
                'status' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Diya Reddy',
                'dateOfBirth' => '2012-08-19',
                'guardianName' => 'Anita Reddy',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Aditya Verma',
                'dateOfBirth' => '2009-07-31',
                'guardianName' => 'Suresh Verma',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Saanvi Nair',
                'dateOfBirth' => '2011-03-14',
                'guardianName' => 'Kiran Nair',
                'status' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Vihaan Kumar',
                'dateOfBirth' => '2010-09-22',
                'guardianName' => 'Ramesh Kumar',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Isha Singh',
                'dateOfBirth' => '2012-01-11',
                'guardianName' => 'Priya Singh',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Arjun Rao',
                'dateOfBirth' => '2009-12-03',
                'guardianName' => 'Sanjay Rao',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Aadhya Joshi',
                'dateOfBirth' => '2011-06-25',
                'guardianName' => 'Anil Joshi',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sai Sharma',
                'dateOfBirth' => '2010-05-17',
                'guardianName' => 'Amit Sharma',
                'status' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Prisha Gupta',
                'dateOfBirth' => '2012-10-02',
                'guardianName' => 'Sunita Gupta',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Reyansh Patel',
                'dateOfBirth' => '2009-02-28',
                'guardianName' => 'Rajesh Patel',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Riya Verma',
                'dateOfBirth' => '2011-02-14',
                'guardianName' => 'Anita Verma',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Krishna Kumar',
                'dateOfBirth' => '2010-11-30',
                'guardianName' => 'Anil Kumar',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Kavya Singh',
                'dateOfBirth' => '2012-04-05',
                'guardianName' => 'Riya Singh',
                'status' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ishaan Nair',
                'dateOfBirth' => '2009-08-15',
                'guardianName' => 'Suresh Nair',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Myra Reddy',
                'dateOfBirth' => '2011-07-09',
                'guardianName' => 'Kiran Reddy',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Shaurya Joshi',
                'dateOfBirth' => '2010-03-24',
                'guardianName' => 'Ramesh Joshi',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Anika Rao',
                'dateOfBirth' => '2012-12-25',
                'guardianName' => 'Sunita Rao',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Vivaan Sharma',
                'dateOfBirth' => '2009-10-10',
                'guardianName' => 'Sanjay Sharma',
                'status' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ananya Gupta',
                'dateOfBirth' => '2011-05-19',
                'guardianName' => 'Anita Gupta',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Aarav Patel',
                'dateOfBirth' => '2010-07-07',
                'guardianName' => 'Raju Patel',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Diya Verma',
                'dateOfBirth' => '2012-03-30',
                'guardianName' => 'Priya Verma',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Aditya Reddy',
                'dateOfBirth' => '2009-05-01',
                'guardianName' => 'Amit Reddy',
                'status' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('students')->insert($students);
    }
}
