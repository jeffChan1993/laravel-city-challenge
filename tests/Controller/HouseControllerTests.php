<?php

namespace Tests\Controller;

use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Tests\TestCase;

class HouseControllerTests extends TestCase
{
    public function testHouseApiIndexReturnsDataInValidFormat(){
        $person_name = \App\Models\Person::find(1)->first()->name;

        $this->json('get','api/houses?name='.$person_name)
            ->assertStatus(ResponseAlias::HTTP_OK)
            ->assertJsonStructure(
                [
                    'data'=>[
                        '*'=>[
                            "id",
                            "name",
                            "address"
                        ]
                    ]
                ]
            );
    }


    public function testHouseApiIndexNoResultReturnsDataInValidFormat(){
        $person_name = \Faker\Factory::create()->name;

        $this->json('get','api/houses?name='.$person_name)
            ->assertStatus(ResponseAlias::HTTP_OK)
            ->assertJsonStructure(
                []
            );
    }
}
