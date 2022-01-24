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

    /**
     *  if we make sure all the crate / update / delete function of different Controller is the same
     *  We can write it into a new Controller and extends this Controller
     *  For example
     *  defines =>public $model_class = Car::class in CarController.php
     *  then =>$this->model_class::find(1) to get the Car Model result in Controller.php
     */


//    function store(Request $request){
//    try {
//        $cars = Car::create([
//            'house_id'=>$request->get('house_id'),
//            'license_plate'=>$request->get('license_plate'),
//            'brand'=>$request->get('brand'),
//            'color'=>$request->get('color'),
//          ]);
//        return response()->json(['data'=>$cars],200);
//    }catch (\Exception $e){
//            return response()->json(['error'=>$e->getMessage()],500);
//        }
//    }

//    function update(Request $request){
//    try {
//        $cars = Car::update([
//            'house_id'=>$request->get('house_id'),
//            'license_plate'=>$request->get('license_plate'),
//            'brand'=>$request->get('brand'),
//            'color'=>$request->get('color'),
//            ]);
//        return response()->json(['data'=>$cars],200);
//    }catch (\Exception $e){
//            return response()->json(['error'=>$e->getMessage()],500);
//        }
//    }

//    function delete(Request $request){
//        try {
//
//            $result = null;
//
//            $car = Car::find($request->get('id'));
//            $result = $car->delete();
//
//            // or you can ues destory
//             $result = Car::destory($request->get('id'));
//        return response()->json(['data'=>$result],200);
//        }catch (\Exception $e){
//            return response()->json(['error'=>$e->getMessage()],500);
//        }

//    }
}
