<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelHasRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1 ; $i<=2 ; $i++){

            DB::table('model_has_roles')->insert([
                'role_id' => $i,
                'model_type' => 'App\Models\User',
                'model_id' => $i
            ]);
        }
    }
}
