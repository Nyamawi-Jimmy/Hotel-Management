<?php

namespace App\Http\Controllers;

use App\Models\Blocks;
use App\Models\Room;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $roomCount = Room::all()->count();
        $blocksCount = Blocks::all()->count();
        return view('dashboard.index', compact("roomCount","blocksCount"));
    }
}
