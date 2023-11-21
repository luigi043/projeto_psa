<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('student')->insert([
            ['number' => 20347, 'name' => 'Luiz Morais'],
            ['number' => 20346, 'name' => 'Tomas Miguel'],
            ['number' => 20346, 'name' => 'Pedro Paulo'],
        ]);
    }
}
