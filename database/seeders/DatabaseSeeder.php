<?php

use Database\Seeders\ConductorSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\DriverSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\StaffSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\AdminSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            UserSeeder::class,
            ConductorSeeder::class,
            DriverSeeder::class,
            StaffSeeder::class,
            // Add other seeders as needed
        ]);
    }
}
