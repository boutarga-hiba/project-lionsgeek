<?php

namespace Database\Seeders;

use App\Models\Studio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Studio::insert(
            [
                [
                    "name"=>"Studio_1",
                    "description"=>"20m * 15m"
                ],
                [
                    "name"=>"Studio_2",
                ],
                [
                    "name"=>"Espace_cafe",
                ],
                [
                    "name"=>"Espace_Agora",
                ],
                [
                    "name"=>"Co_working",
                ],
                [
                    "name"=>"Externe",
                ],
            ]

            );
    }
}
