<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Feature1Controller extends Controller
{
    public function show(){
        return view('features');
    }
}
