<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'people_id',
        'license_plate',
        'brand',
        'color',
//        'status',
//        'created_at',
//        'created_by',
//        'updated_at',
//        'updated_by'
    ];

    public function owners(){
        return $this->hasManyThrough(Person::class,House::class,'id','house_id','house_id','id');
    }
}
