<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request){
        $validateCategorie=$request->validate([
           "name"=>"required|string"
        ]);
        $categories=Category::create([
            "name"=>$validateCategorie["name"]
        ]);
        return response()->json(["message"=>"Category added Successfuly",],201);
    }
}
