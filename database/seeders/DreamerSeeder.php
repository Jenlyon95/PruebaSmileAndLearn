<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DreamerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dreamers')->insert([
            [
                'nombres' => 'Kairy',
                'apellidos' => 'Ray Sánchez',
                'fecha_de_nacimiento' => '2016-07-23',
            ],
            [
                'nombres' => 'Queso',
                'apellidos' => 'Ray Sánchez',
                'fecha_de_nacimiento' => '2020-08-04',
            ],
            [
                'nombres' => 'Kiara',
                'apellidos' => 'Gonzalez Peso',
                'fecha_de_nacimiento' => '2014-04-04',
            ],
        ]);
        
    }
}
