<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KledingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kleding_products_array = ["Broeken", "Shirts", "Jackets", "Jassen", "Schoenen", "Overig"];

        foreach($kleding_products_array as $kleding){
            DB::table("product")->insert([
                "name" => $kleding,
                "kind" => "Kleding",
                "description" => "Informatie over de kleding",
                "image" => "/img/kleding_default.jpg",

            ]);
        }
    }
}
