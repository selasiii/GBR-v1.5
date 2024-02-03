<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'role_id' => 3, // Assuming '1' is the ID for the 'customer' role
            'admin_id' => Str::uuid(),
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'conductor@example.com',
            'password' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
