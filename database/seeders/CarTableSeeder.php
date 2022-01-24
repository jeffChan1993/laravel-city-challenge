<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        /** Assumption
         * Random house_id  existed in house table
         * The license plat should start with TRT + 6 digital number
         * Each house had at most one car only
         * $i should be less or equal to the house record
         */
        for($i=0;$i<300;$i++){
            Car::create([
                'house_id' =>$faker->unique()->numberBetween(1,600),
                'license_plate' => $faker->numerify('TNT######'),
                'brand' =>$faker->company(),
                'color'=>$faker->colorName,
            ]);
        }
    }
}
