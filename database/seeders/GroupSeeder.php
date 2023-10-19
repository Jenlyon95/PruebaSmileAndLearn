<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('groups')->insert([
            [
                'dreamers' => 'Kairy',
            ],
            [
                'dreamers' => 'Queso',
            ],
            [
                'dreamers' => 'Kiara',
            ],
        ]);
    }
}
