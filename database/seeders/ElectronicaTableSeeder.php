<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ElectronicaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $electronica_products_array = ["Computer", "Mobiel", "Printers", "Tv", "Geluid", "Overig"];

        foreach($electronica_products_array as $electronica){
            DB::table("product")->insert([
                "name" => $electronica,
                "kind" => "Electronica",
                "description" => "Informatie over de electronica",
                "image" => "/img/pc_default.jpg",
            ]);
        }
    }
}
