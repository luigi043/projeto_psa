<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $enrollments = [];

    
        for ($i = 1; $i <= 3; $i++) {
            $enrollments[] = ['student_id' => $i, 'uc_id' => 1]; // Para a UC TWAM
            $enrollments[] = ['student_id' => $i, 'uc_id' => 2]; // Para a UC DAW
        }

        DB::table('enrollment')->insert($enrollments);
    }
}
