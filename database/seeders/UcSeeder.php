<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('uc')->insert([
            ['name' => 'TWAM'],
            ['name' => 'DAW'],
        ]);
    }
}
