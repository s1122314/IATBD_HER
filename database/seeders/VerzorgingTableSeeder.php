<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VerzorgingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $verzorging_products_array = ["Beauty", "Gezondheid"];

        foreach($verzorging_products_array as $verzorging){
            DB::table("product")->insert([
                "name" => $verzorging,
                "kind" => "Verzorging",
                "description" => "Informatie over de verzorgings producten",
                "image" => "/img/verzorging_default.jpg",

            ]);
        }
    }
}
