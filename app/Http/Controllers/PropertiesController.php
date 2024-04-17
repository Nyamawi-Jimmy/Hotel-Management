<?php

namespace App\Http\Controllers;

use App\Models\Blocks;
use App\Models\Properties;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class PropertiesController extends Controller
{
    public function show () {

        $properties=$this->getAllProperties();

        return view("pages.property",compact("properties"));
    }

    public function store(Request $request)
    {

        try {
            $validator = Validator::make($request->all(), [
                "name" => "required|string",
                "location" => "required|string",
                "city" => "required|string",
                "phone" => "required|integer",
             //   "longlat" => "required|string",
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 400);
            }

            $property = new Properties();
            $property->name = $request->input('name');
            $property->location = $request->input('location');
            $property->city = $request->input('city');
            $property->phone = $request->input('phone');
            $property->longlat = "0.0";

            if ($property->save()) {
                return back()->with('success', 'Property added successful');
            } else {
                return back()->with('fail', 'An error occurred');
            }
        } catch (Exception $e) {
            Log::error('Error saving property: ' . $e->getMessage());
            return back()->with('fail', $e->getMessage());
        }

    }
    public function getAllProperties() {
        $properties = Properties::all();
        return $properties;
    }

    public function findProperty($id)
    {
        $property = Properties::find($id);

        return $property;
    }

    public function update(Request $request, $id)
    {
        $property = $this->findProperty($id);
        $property->name = $request->input('name');

        if ($property->save()) {
            return back()->with('success', 'Property updated successfully');
        } else {
            return back()->with('fail', 'An error occurred');
        }
    }

    public function delete($id) {
        $property = Properties::find($id);
        $property->delete();

        return redirect() -> back() ->with('success', 'Property deleted successfully');
    }



}
