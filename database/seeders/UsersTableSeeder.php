<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "Niels Lusink",
            "email" => "Nielslusink12@gmail.com",
            "password" => bcrypt("radiot12"),
            "age" => 20,
            "role" => "Admin",
            "image" => "/img/no-profile-picture.jpg",
        ]);

        DB::table("users")->insert([
            "name" => "Lisanne  Lusink",
            "email" => "Lisannelusink@gmail.com",
            "password" => bcrypt("laravel"),
            "age" => 17,
            "image" => "/img/no-profile-picture.jpg",
        ]);
    }
}
