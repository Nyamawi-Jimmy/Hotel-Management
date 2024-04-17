<?php

namespace App\Http\Controllers;

use App\Models\Blocks;
use App\Models\Post;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Mockery\Exception;

class RoomsController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            "name" => ["required", "string"],
            "block_id" => ["required", "integer"],
            "category" => ["required", "string"],
            "rent" => ["required", "integer"],
            "deposit" => ["required", "integer"],
                        "status" => ["required", "string"]

        ]);

        $room = Room::create($data);

        if ($room) {
            return back()->with('success', 'Room added successfully');
        } else {
            return back()->with('fail', 'An error occurred');
        }
    }

    public function create()
    {
        $rooms = Room::all();
        $blocks=Blocks::all();

        return view("pages.rooms", compact('rooms',"blocks"));
    }

    public function list()
    {
        $rooms = Room::orderByDesc("created_at")
            ->get();

        return view("pages.rooms", [
            "rooms" => $rooms
        ]);
    }

    public function edit(Room $room)
    {

        return view("edit", [
            'rooms' => $room
        ]);
    }
    public function find($id)
    {
        $room = Room::find($id);

        return $room;
    }

    public function update(Request $request, $id)
    {
        $room = $this->find($id);
        $room->name = $request->input('name');
        $room->block = $request->input('block');
        $room->category = $request->input('category');
        $room->rent = $request->input('rent');
        $room->deposit = $request->input('deposit');
        $room->status = $request->input('status');




        if ($room->save()) {
            return back()->with('success', 'Room updated successfully');
        } else {
            return back()->with('fail', 'An error occurred');
        }
    }

    public function destroy($id) {
        $room = Room::find($id);
        $room->delete();

        return redirect() -> back() ->with('success', 'Room deleted successfully');
    }


}
