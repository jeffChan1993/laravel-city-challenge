<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Seeder;

class HouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

        /** Assumption
         * Created 100 street records, street_id will between 1 and 100
         *
         */
        for($i=0;$i<600;$i++){
            House::create([
                'street_id' =>$faker->numberBetween(1,100),
                'address' => $faker->streetAddress,
            ]);
        }
    }
}
