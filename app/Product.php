<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{



    protected $fillable = ['name', 'description', 'price','quantity', 'avatar','avatar1','avatar2','avatar3','avatar4'];

}
