<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
        [ 
        'user_name' => 'Rosemarie Faller',
        'email' => 'rosemariefaller48@gmail.com',
        'password' => Hash::make('12345678'),
        'role' => 'admin',
        ],
        [
            'user_name' => 'Antonette Lozares',
            'email' => 'antonettelo@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'spectator'
            ]
        ]);
        
        // DB::table('abouts')->insert ([
        //     [ 
        // 'name' => 'Rosemarie Faller',
        // 'address' => 'Hilongos City',
        // 'age' => '17',
        // 'phone_number' => '09106019843',
        // 'email' => 'rosemariefaller48@gmail.com',
        // 'gender' => 'male',
        
        //     ]
                

        // ]);
    }
}

?>