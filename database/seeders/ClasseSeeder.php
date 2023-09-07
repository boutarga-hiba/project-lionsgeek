<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Classe::insert([
            [
                "name"=>"Salle_1",
            ],
            [
                "name"=>"Salle_2",
            ],
            [
                "name"=>"Salle_3",
            ],
            [
                "name"=>"Salle_4",
            ],
            [
                "name"=>"Salle_5",
            ],
            [
                "name"=>"Salle_6",
            ],
        ]

            );
    }
}
