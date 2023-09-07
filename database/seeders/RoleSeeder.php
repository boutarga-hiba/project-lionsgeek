<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            [
                "name"=>"gestionnaire classe",
            ],
            [
                "name"=>"gestionnaire clhh",
            ],
        ]);


        // DB::table('roles')->insert(
        //     [
        //         [
        //         "name"=>"gestionnaire classe",
        //         ],
        //         [
        //             "name"=>"gestionnaire studio",
        //         ]
        //     ]
        //         );
    }
}
