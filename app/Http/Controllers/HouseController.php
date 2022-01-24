<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Person;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class HouseController extends BaseController
{
    /**
     * @param Request $request
     * fetch the full address and street of a house when providing a person's name
     * result will be related to two tables(houses,streets) , so we should join those tables by getting the person name
     * @return JsonResponse
     */
    public function getFullAddressAndStreetByPersonName(Request $request): JsonResponse
    {

        try {
            $result = DB::table('people')
                ->join('houses','people.house_id','=','houses.id')
                ->join('streets','houses.street_id','=','streets.id')
                ->select('people.id','streets.name','houses.address')
                ->where('people.name',$request->get('name'))
                ->get();


            if(count($result) == 0){
                return response()->json([],200);
            }
            return response()->json(['data'=>$result],200);

        }catch (\Exception $e){
            return response()->json(['error'=>$e->getMessage()],500);
        }

    }
}
