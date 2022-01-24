<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(StreetTableSeeder::class);
        $this->call(HouseTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(CarTableSeeder::class);
    }
}
