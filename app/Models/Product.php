<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $filltable=['id','name','price','quantity'];
   public $incrementing=false;
    use HasFactory;
}
