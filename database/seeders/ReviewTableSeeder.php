<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($review_array as $kleding){
            DB::table("review")->insert([
                "user_id" => 1,
                "Name" => "Goede kleding",
                "Description" => "Goede kleding geleend!",

            ]);
        }
    }
}
