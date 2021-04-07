<?php

namespace Database\Seeders;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John',
            'username' => 'superadmin',
            'password' => Hash::make('superadmin'),
            'remember_token' => NULL,
            'created_at' => '2021-01-01 12:00:00',
            'updated_at' => '2021-01-01 12:00:00',
        ]);
        DB::table('users')->insert([
            'name' => 'Mark',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'remember_token' => NULL,
            'created_at' => '2021-01-01 12:00:00',
            'updated_at' => '2021-01-01 12:00:00',
        ]);
    }
}
