<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $fillable = [
        'street_id',
        'address',
//        'status',
//        'created_at',
//        'created_by',
//        'updated_at',
//        'updated_by'
    ];


    public function street(){
        return $this->belongsTo(Street::class);
    }

    public function persons(){
        return $this->hasMany(Person::class);
    }

    public function car(){
        return $this->hasOne(Car::class);
    }

}
