<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
        KindOfSushiTableSeeder::class,
        SushiMakiTableSeeder::class,
        SushiNigiriTableSeeder::class,
        SushiSashimiTableSeeder::class,
        SushiTemakiTableSeeder::class,
        SushiUramakiTableSeeder::class,
        UsersTableSeeder::class,
        KindOfDrinksTableSeeder::class,
        BeerTableSeeder::class,
        WineTableSeeder::class,
        SakeTableSeeder::class,
      ]);
    }
}
