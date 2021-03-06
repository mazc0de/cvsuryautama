<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'laporan-list',
            'laporan-create',
            'laporan-edit',
            'laporan-delete',
            'permission-list',
            'permission-delete',
            'permission-edit',
            'permission-create'
        ];

        foreach($permissions as $permission){
            Permission::create(['name' => $permission]);
        };
    }
}
