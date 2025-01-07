<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('admins')->insert([
        //     'email' => 'prathampatel@gmail.com',
        //     'password' => Hash::make('pratham231020'), // Hashing the password
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        DB::table('admins')->insert([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'), // Hashing the password
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
