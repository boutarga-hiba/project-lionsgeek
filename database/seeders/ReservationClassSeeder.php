<?php

namespace Database\Seeders;

use App\Models\ReservationClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReservationClass::insert([
            [
                "name"=>"class 1",
                "description"=>fake()->paragraph(3),
                "user_id"=>1,
                "classe_id"=>1,
                "start_time"=>9,
                "end_time"=>12,
                "comment"=>"manque de chaise",
                "history"=>false,
            ]
            ]);
    }
}
