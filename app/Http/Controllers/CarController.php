<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Street;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CarController extends BaseController
{
    //


    /**
     * @param Request $request
     * Get all car when providing a particular street name
     * @return JsonResponse
     */
    function getCarByStreetName(Request $request): JsonResponse
    {

        try {

            $cars = [];

            $sql  = Street::where('name',$request->get('street_name'));

            if($sql->count() ===0){
                return response()->json($cars,200);
            }
            /**
             * if it's a relationship entity, we can't use pagination
             * if we want to use pagination , we need to use where() / join method
             */
            $cars = $sql->first()->cars;

            return response()->json(['data'=>$cars],200);
        }catch (\Exception $e){
            return response()->json(['error'=>$e->getMessage()],500);
        }

    }

    function store(Request $request){
//    try {
//        $cars = Car::create($request->all);
//        return response()->json(['data'=>$cars],200);
//    }catch (\Exception $e){
//            return response()->json(['error'=>$e->getMessage()],500);
//        }
    }

    function update(Request $request){
//    try {
//        $cars = Car::update($request->all);
//        return response()->json(['data'=>$cars],200);
//    }catch (\Exception $e){
//            return response()->json(['error'=>$e->getMessage()],500);
//        }
    }

    function delete(Request $request){
//        try {
//        $cars = Car::destory($request->id);
//        return response()->json(['data'=>$cars],200);
//        }catch (\Exception $e){
//            return response()->json(['error'=>$e->getMessage()],500);
//        }

    }
}
