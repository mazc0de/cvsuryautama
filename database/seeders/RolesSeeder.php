<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'Super Admin',
            'guard_name' => 'web',
            'created_at' => '2021-01-01 12:00:00',
            'updated_at' => '2021-01-01 12:00:00',
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'Admin',
            'guard_name' => 'web',
            'created_at' => '2021-01-01 12:00:00',
            'updated_at' => '2021-01-01 12:00:00',
        ]);
    }
}
