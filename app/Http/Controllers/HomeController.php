<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use DB;

class HomeController extends Controller
{
    public  function show(){
        return view("screens.home");
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // home page
    public function index()
    {

        $allBookings = DB::table('bookings')->get();
        $allBookingsCount = DB::table('bookings')->get()->count();
        $roomsCount = DB::table("rooms")->get()->count();
        $customerCount = DB::table("customers")->get()->count();
        return view('dashboard.home',compact('allBookings', 'allBookingsCount',"roomsCount","customerCount"));
    }

    // profile
    public function profile()
    {
        return view('profile');
    }

}
