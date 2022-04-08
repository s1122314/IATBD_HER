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
            ImagesTableSeeder::class,
            KindOfProductTableSeeder::class,
            BoekenTableSeeder::class,
            ElectronicaTableSeeder::class,
            KledingTableSeeder::class,
            SpeelgoedTableSeeder::class,
            VerzorgingTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class,

        ]);
    }
}
