<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $classes = [];

        // Insira pelo menos 2 aulas para cada Unidade Curricular
        for ($i = 1; $i <= 2; $i++) {
            $classes[] = ['uc_id' => 1, 'student_id' => $i, 'state' => 0, 'timestamp' => now()];
            $classes[] = ['uc_id' => 2, 'student_id' => $i, 'state' => 0, 'timestamp' => now()];
        }

        DB::table('class')->insert($classes);
    }
}
