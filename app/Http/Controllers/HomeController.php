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

    public function index1()
    {
        $allBookings1 = DB::table('bookings')->get();
        $allBookingsCount1 = DB::table('bookings')->get()->count();
        $roomsCount1 = DB::table("rooms")->get()->count();
        $customerCount1 = DB::table("customers")->get()->count();
        return view('dashboardd.home',compact('allBookings1', 'allBookingsCount1',"roomsCount1","customerCount1"));
    }

    // profile
    public function profile()
    {
        return view('profile');
    }

}
