<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'house_id',
        'name',
        'age',
//        'status',
//        'created_at',
//        'created_by',
//        'updated_at',
//        'updated_by'
    ];

    public function house(){
        return $this->belongsTo(House::class);
    }

//    public function street(){
//        return $this->hasManyThrough(Street::class,House::class,'id','id','house_id','street_id');
//    }
}
