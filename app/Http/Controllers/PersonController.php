<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Person;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PersonController extends BaseController
{

    /**
     * @param Request $request
     * We will use paginate method when we don't want to load full data to front-end page
     * if we want to display some fields only, we can use Person::select('XXX','XXX')->paginate(30);
     * @return JsonResponse
     */
    public function getAllPerson(Request $request): JsonResponse
    {

        try {
            return response()->json(Person::paginate(30), 200);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * @param Request $request
     * We assume that each of the car is linked with house_id , not person_id
     * return the owner(s) of a vehicle when providing a license plate
     * @return JsonResponse
     */
    public function getOwnersByLicensePlate(Request $request): JsonResponse
    {

        try {
            $owners = [];
            // we can get the value directly via using $request->license_plate if we want
            $sql = Car::where('license_plate', $request->get('license_plate'));
            if ($sql->count() === 0) {
                return response()->json($owners, 200);
            }

            $owners = $sql->first()->owners;

            return response()->json(['data' => $owners], 200);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
