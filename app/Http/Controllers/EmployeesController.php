<?php

namespace App\Http\Controllers;

use DB;


class EmployeesController extends Controller
{
    public function allEmployees()
    {
        $allEmployees = DB::table('employees')->get();
        return view('employees.employees',compact('allEmployees'));
    }

    public function Employeesleave()
    {
        $Employeesleave = DB::table('employees')->get();
        return view('employees.leaves',compact('Employeesleave',));
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
}
