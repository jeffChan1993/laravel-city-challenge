<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
//        'status',
//        'created_at',
//        'created_by',
//        'updated_at',
//        'updated_by'
    ];


    public function cars(){
        return $this->hasManyThrough(Car::class,House::class,'street_id','house_id','id','id')->select(['cars.id','cars.brand','cars.color','cars.license_plate']);
    }
}
