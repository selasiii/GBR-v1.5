<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'customer'],
            ['name' => 'agent'],
            ['name' => 'admin'],
            ['name' => 'driver'],
            ['name' => 'conductor'],

        ]);
    }
}
