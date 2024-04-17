<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControllerUI extends Controller
{
    public  function show(){
        return view("screens.home");
    }
}
