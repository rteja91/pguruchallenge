<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estate extends Model
{
    //
    protected $fillable = ["name" , "image" , "builder", "location" ,"price","amenities","color","type"];

}
