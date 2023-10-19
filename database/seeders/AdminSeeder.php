<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'email' => 'superprofe@gmail.com',
                'password' => 'Profe123rrr',
            ],
            [
                'email' => 'ingles@syl.com',
                'password' => 'Teaching12234',
            ],
            [
                'email' => 'lengua@syl.com',
                'password' => 'Lenguas1209349',
            ],
        ]);
    }
}
