<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert ([
            [ 
        'name' => 'Rosemarie Faller',
        'address' => 'Hilongos City',
        'age' => '17',
        'phone_number' => '09106019843',
        'email' => 'rosemariefaller48@gmail.com',
        'gender' => 'male',
        
            ]
            ]);
    }
}
