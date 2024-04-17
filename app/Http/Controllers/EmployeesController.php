<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Employees;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use Illuminate\Http\Request;


class EmployeesController extends Controller
{

    //Leave Requests
    public function Employeesleave()
    {
        $Employeesleave = DB::table('leaves')->get();
        return view('employees.leaves',compact('Employeesleave',));
    }


    //Staff Lists
    public function allEmployees()
    {
        $allEmployees = DB::table('employees')->get();
        return view('employees.employees',compact('allEmployees'));
    }


    public function Employeesholiday()
    {
        $Employeesholiday = DB::table('employees')->get();
        return view('employees.holidays',compact('Employeesholiday',));
    }

    public function Employeesattendance()
    {
        $Employeesattendance = DB::table('employees')->get();
        return view('employees.attendance',compact('Employeesattendance',));
    }

    public function addEmployees()
    {
        $addEmployees = DB::table('employees')->get();
        return view('employees.employeesadd',compact("addEmployees"));
    }

    public function employeeEdit($emply_id)
    {
        $employeeEdit = DB::table('employees')->where('emply_id',$emply_id)->first();
        return view('employees.employeesedit',compact('employeeEdit'));
    }

    public function updateRecord(Request $request)
    {
        DB::beginTransaction();
        try {

            $update = [
                'emply_id' => $request->emply_id,
                'name'   => $request->name,
                'role'  => $request->role,
                'date' => $request->date,
                'joining_date'   => $request->joining_date,
                'leaving_date'   => $request->leaving_date,
                'email'   => $request->email,
                'phone_number'  => $request->phone_number,
            ];

            Employees::where('emply_id',$request->emply_id)->update($update);

            DB::commit();
            Toastr::success('Staff Updated successfully :)','Success');
            return redirect()->route("form/allemployees/page");
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Failed To update Staff :)','Error');
            return redirect()->back();
        }
    }

    public function saveRecord(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'role'     => 'required|string|max:255',
            'joining_date' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'leaving_date' => 'required|string|max:255',
            'phone_number' => 'string|max:255',
            'email'      => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try {

            $employees = new Employees;
            $employees->name = $request->name;
            $employees->role   = $request->role;
            $employees->date  = $request->date;
            $employees->joining_date  = $request->joining_date;
            $employees->leaving_date   = $request->leaving_date;
            $employees->email       = $request->email;
            $employees->phone_number   = $request->phone_number;
            $employees->save();


            DB::commit();
            Toastr::success(' Employee successfully  Created:)','Success');
            return redirect()->route('form/allemployees/page');

        } catch(\Exception $e) {
            DB::rollback();
            echo $e;
            Toastr::error('Add Employee fail :)','Error');
            //return redirect()->back();
        }
    }

    public function deleteRecord(Request $request)
    {
        try {

            Employees::destroy($request->id);
            Toastr::success('Staff deleted successfully :)','Success');
            return redirect()->back();

        } catch(\Exception $e) {

            DB::rollback();
            Toastr::error('Failed to Delete :)','Error');
            return redirect()->back();
        }
    }


}
