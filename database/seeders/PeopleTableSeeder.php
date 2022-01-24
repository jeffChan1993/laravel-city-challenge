<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
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
         * Created 1500 house records,  house_id will between 1 and 600
         * The max age is 130 , min age is 1
         * $i can be larger
         * than house record , because each house will have at least one person
         */

        for($i=0;$i<1500;$i++){
            Person::create([
                'house_id' =>\App\Models\House::inRandomOrder()->limit(1)->first()->id,
                'name' => $faker->name,
                'age' =>$faker->numberBetween(1,130)
            ]);
        }
    }
}
