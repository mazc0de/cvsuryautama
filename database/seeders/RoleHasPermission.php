<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleHasPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=12;$i++){
            DB::table('role_has_permissions')->insert([
                'permission_id' => $i,
                'role_id' => 1
            ]);
        }

        for($o=5;$o<=8;$o++){
            DB::table('role_has_permissions')->insert([
                'permission_id' => $o,
                'role_id' => 2
            ]);
        }
    }
}
