<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images_array = ["kleding_default.jpg", "kookBoek_default.jpg",
        "leerBoek_default.jpg", "leesBoek_default.jpg", "overigBoek_default.jpg",
        "pc_default.jpg", "speelgoed_default.jpg", "stripBoek_default.jpg",
        "verzorging_default.jpg"];
        foreach($images_array as $image){
            DB::table("images")->insert([
                "image" => "/img/" . $image
            ]);  
        }
}
}
