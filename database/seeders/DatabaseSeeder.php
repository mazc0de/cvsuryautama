<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(ModelHasRoles::class);
        $this->call(RoleHasPermission::class);

    }
}
