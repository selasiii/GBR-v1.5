<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DriverSeeder extends Seeder
{
    public function run()
    {
        DB::table('drivers')->insert([
            'role_id' => 4, // Assuming '1' is the ID for the 'customer' role
            'driver_id' => Str::uuid(),
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'driver@example.com',
            'password' => bcrypt('password'),
            'address' => '123 Main St, City',
            'phone_number' => '1234567890',
            'licence_number' =>'GHA-420-6969',
            'gender' => 'male',
            'date_of_birth' => '1990-01-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
