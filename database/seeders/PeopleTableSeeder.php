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
         * Created 600 house records,  house_id will between 1 and 600
         * The max age is 130 , min age is 1
         * $i can be large or less than house record , because each house will have at least person
         */
        for($i=0;$i<600;$i++){
            Person::create([
                'house_id' =>$faker->numberBetween(1,600),
                'name' => $faker->name,
                'age' =>$faker->numberBetween(1,130)
            ]);
        }
    }
}
