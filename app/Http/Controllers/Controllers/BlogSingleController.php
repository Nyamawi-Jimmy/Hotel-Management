<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogSingleController extends Controller
{
    public  function  show(){
        return view("screens.blog-single");
    }
}
