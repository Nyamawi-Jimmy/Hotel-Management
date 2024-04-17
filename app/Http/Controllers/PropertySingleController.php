<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertySingleController extends Controller
{
    public  function show(){
        return view("screens.property-single");
    }
}
