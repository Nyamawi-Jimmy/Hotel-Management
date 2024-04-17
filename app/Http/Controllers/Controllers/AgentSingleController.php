<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentSingleController extends Controller
{
    public  function  show(){
        return view("screens.agent-single");
    }
}
