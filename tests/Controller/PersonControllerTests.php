<?php

namespace Tests\Controller;


use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Tests\TestCase;

class PersonControllerTests extends  TestCase
{
   public function testPersonApiIndexReturnsDataInValidFormat(){

       $this->json('get','api/persons')
           ->assertStatus(ResponseAlias::HTTP_OK)
           ->assertJsonStructure(
               [
                   'current_page',
                   'data'=>[
                       '*'=>[
                           "id",
                           "house_id",
                           "name",
                           "age",
                           "created_at",
                           "updated_at"
                       ]
                   ],
                   'first_page_url',
                   "from",
                   "last_page",
                   "last_page_url",
                   "links"=>[
                       '*'=>[
                           "url",
                           "label",
                           "active"
                       ]
                   ],
                   "next_page_url",
                   "path",
                   "per_page",
                   "prev_page_url",
                   "to",
                   "total"
                ]
           );
   }

   public function testPersonApiPageIndexReturnsDataInValidFormat(){
       $page = 20;
       $this->json('get','api/persons?page=' . $page)
           ->assertStatus(ResponseAlias::HTTP_OK)
           ->assertJsonStructure(
               [
                   'current_page',
                   'data'=>[
                       '*'=>[
                           "id",
                           "house_id",
                           "name",
                           "age",
                           "created_at",
                           "updated_at"
                       ]
                   ],
                   'first_page_url',
                   "from",
                   "last_page",
                    "last_page_url",
                   "links"=>[
                       '*'=>[
                           "url",
                           "label",
                           "active"
                       ]
                   ],
                   "next_page_url",
                   "path",
                   "per_page",
                   "prev_page_url",
                   "to",
                   "total"
               ]
           );
   }

   public function testOwnersApiIndexReturnsDataInValidFormat(){
       $license_plate = \App\Models\Car::find(1)->first()->license_plate;

       $this->json('get','api/owners?license_plate='.$license_plate)
           ->assertStatus(ResponseAlias::HTTP_OK)
           ->assertJsonStructure(
               [
                'data'=>[
                    '*'=>[
                        "id",
                        "house_id",
                        "name",
                        "age",
                        "created_at",
                        "updated_at",
                        "laravel_through_key"
                    ]
                ]
               ]
           );
   }

    public function testOwnersApiIndexNoResultReturnsDataInValidFormat(){
        $license_plate = \Faker\Factory::create()->numerify('TNT######');

        $this->json('get','api/owners?license_plate='.$license_plate)
            ->assertStatus(ResponseAlias::HTTP_OK)
            ->assertJsonStructure(
                []
            );
    }
}
