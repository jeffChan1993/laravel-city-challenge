<?php

namespace Tests\Controller;

use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Tests\TestCase;
class CarControllerTests extends TestCase
{
    public function testCarsApiIndexReturnsDataInValidFormat(){
        $street_name = \App\Models\Street::find(1)->first()->name;
        $this->json('get','api/cars?street_name='.$street_name)
            ->assertStatus(ResponseAlias::HTTP_OK)
            ->assertJsonStructure(
                [
                    'data'=>[
                        '*'=>[
                            "id",
                            "brand",
                            "color",
                            "laravel_through_key"
                        ]
                    ]
                ]
            );
    }


    public function testCarsApiIndexNoResultReturnsDataInValidFormat(){
        $street_name = \Faker\Factory::create()->streetName;

        $this->json('get','api/cars?street_name='.$street_name)
            ->assertStatus(ResponseAlias::HTTP_OK)
            ->assertJsonStructure(
                []
            );
    }


    /**
     * Test The create API
     * @return void
     */
//    public function testCreateCarApiIndexReturnsDataInValidFormat(){
//        $car = [
//            'id'=>1199,
//            'house_id'=>1,
//            'license_plate'=>'TNT123456',
//            'brand' =>'ANA',
//            'color'=>'Blue'
//        ];
//
//        $this->json('post','api/create_car' , $car)
//            ->assertStatus(ResponseAlias::HTTP_OK)
//            ->assertJsonStructure(
//                [
//                    'data'=>[
//                        'id'=>1199,
//                        'house_id'=>1,
//                        'license_plate'=>'TNT123456',
//                        'brand' =>'ANA',
//                        'color'=>'Blue'
//                    ]
//                ]
//            );
//    }
}
