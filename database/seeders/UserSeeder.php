<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'customer_id' => Str::uuid(),
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'customer@example.com',
            'password' => bcrypt('password'),
            'address' => '123 Main St, City',
            'phone_number' => '1234567890',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
