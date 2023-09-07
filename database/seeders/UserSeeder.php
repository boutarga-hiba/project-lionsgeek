<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
                "name" => fake()->name(),
                "lastname"=>fake()->name(),
                "age"=>random_int(18,60),
                "cin"=>"BJ787678",
                "gender"=>"femme",
                "phone"=>fake()->phoneNumber(),
                "type"=>"gestion studio",
                "history"=>false,
                "email"=>'admin@gmail.com',
                "password"=>'adminadmin',
            ]);
    }
}
