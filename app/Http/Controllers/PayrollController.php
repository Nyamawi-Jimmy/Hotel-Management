<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayrollController extends Controller
{
    public function allSalary()
    {
       $allSalary=DB::table("payrolls")->get();
       return view('Payroll.staffsalary',compact('allSalary'));
    }
    public function allPayslips()
    {
        $allPayslips=DB::table("payrolls")->get();
        return view('Payroll.payslip',compact('allPayslips'));
    }
}
