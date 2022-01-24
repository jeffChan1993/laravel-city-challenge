<?php

namespace Database\Seeders;

use App\Models\Street;
use Illuminate\Database\Seeder;

class StreetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         *  Because table have FK here, therefore we can't run the truncate function here
        */
        //Street::truncate();

        $faker = \Faker\Factory::create();

        /**
         * it will create street name only. we can custom the formatter.
         * reference => https://github.com/fzaninotto/Faker
         */
        for($i=0;$i<100;$i++){
            Street::create([
                'name' => $faker->streetName,
            ]);
        }
    }
}
