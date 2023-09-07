<?php

namespace Database\Seeders;

use App\Models\ClassImg;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        ClassImg::insert([
            [
                'img_url' => fake()->imageUrl(640, 480, 'nature'), // Exemple : générer une URL d'image de chat de 640x480 pixels
                'classe_id'=>1,
            ]
            ]);
    }
}
