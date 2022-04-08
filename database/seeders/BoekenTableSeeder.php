<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BoekenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boeken_products_array = ["Stripboeken", "Kookboeken", "Leesboeken", "Leerboeken", "Overig"];

        foreach($boeken_products_array as $boeken){
            DB::table("product")->insert([
                "name" => $boeken,
                "kind" => "Boeken",
                "description" => "Informatie over de boeken die je kunt lenen.",
                "image" => "/img/overigBoek_default.jpg",
                
            ]);
        }
    }
}

/*
       DB::table("product")->insert([
            "name" => "Stripboeken",
            "kind" => "Boeken",
            "image" => "/img/stripBoek_default.jpg",
            "description" => "Bekijk hier de leukste " . $boeken,
        ]);

        DB::table("product")->insert([
            "name" => "Kookboeken",
            "kind" => "Boeken",
            "image" => "/img/kookBoek_default.jpg",
            "description" => "Bekijk hier de leukste " . $boeken,
        ]);

        DB::table("product")->insert([
            "name" => "Leesboeken",
            "kind" => "Boeken",
            "image" => "/img/leesBoek_default.jpg",
            "description" => "Bekijk hier de leukste " . $boeken,
        ]);

        DB::table("product")->insert([
            "name" => "Leerboeken",
            "kind" => "Boeken",
            "image" => "/img/leerBoek_default.jpg",
            "description" => "Bekijk hier de leukste " . $boeken,
        ]);

        DB::table("product")->insert([
            "name" => "Overig",
            "kind" => "Boeken",
            "image" => "/img/leesBoek_default.jpg",
            "description" => "Bekijk hier de leukste " . $boeken,
        ]);
    }  
}    

*/