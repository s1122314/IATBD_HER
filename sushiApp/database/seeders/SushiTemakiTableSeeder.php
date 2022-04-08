<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SushiTemakiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $temaki_sushi_array = ["Tamago", "Kani", "Sake", "Tuna"];

        foreach($temaki_sushi_array as $temaki){
            DB::table("sushi")->insert([
                "name" => $temaki,
                "kind" => "Temaki",
                "image" => "/img/temaki.jpg",
                "description" => "A delicious sushi with " . $temaki,

            ]);
        }
    }
}

