<?php
/*
namespace App\Http\Controllers;

use App\Models\Booking;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function show () {
        return view("screens.reservation");
    }
    public function saveRecord(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'room_type'     => 'required|string|max:255',
            'arrival_date'  => 'required|string|max:255',
            'email'      => 'required|string|max:255',
            'phone_number'  => 'required|string|max:255',
            'fileupload' => 'file',
        ]);

        DB::beginTransaction();
        try {

            $photo= $request->fileupload;
            $file_name = rand() . '.' .$photo->getClientOriginalName();
            $photo->move(public_path('/assets/upload/'), $file_name);

            $booking = new Booking;
            $booking->name = $request->name;
            $booking->room_type     = $request->room_type;
            $booking->total_numbers  = $request->total_numbers;
            $booking->date  = $request->date;
            $booking->time  = $request->time;
            $booking->arrival_date   = $request->arrival_date;
            $booking->depature_date  = $request->depature_date;
            $booking->email       = $request->email;
            $booking->ph_number   = $request->phone_number;
            $booking->fileupload  = $file_name;
            $booking->save();

            DB::commit();
            Toastr::success('Create new booking successfully :)','Success');
            return redirect()->route('form/allbooking');

        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Add Booking fail :)','Error');
            return redirect()->back();
        }
    }

    public function bookingAddd()
    {
        $data = DB::table('room_types')->get();
        $user = DB::table('users')->get();
        return view('formbooking.bookingadd',compact('data','user'));
    }



}*/
