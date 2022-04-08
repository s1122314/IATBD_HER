<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SpeelgoedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $speelgoed_products_array = ["Spellen", "Buitenspeelgoed", "Poppen", "Bouwen", "Knutselen"];

        foreach($speelgoed_products_array as $speelgoed){
            DB::table("product")->insert([
                "name" => $speelgoed,
                "kind" => "Speelgoed",
                "description" => "Informatie over het speelgoed",
                "image" => "/img/speelgoed_default.jpg",
            ]);
        }
    }
}
