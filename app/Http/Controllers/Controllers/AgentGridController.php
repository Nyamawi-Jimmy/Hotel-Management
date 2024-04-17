<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentGridController extends Controller
{
    public  function  show(){
        return view("screens.agents-grid");
    }
}
