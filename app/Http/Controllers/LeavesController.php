<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Leaves;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class LeavesController extends Controller
{
    public function addLeavess()
    {
        $addLeavess = DB::table('leaves')->get();
        return view('employees.leavesadd',compact("addLeavess"));
    }

    public function saveRecord(Request $request)
    {
        $request->validate([
            'name'   => 'required|string|max:255',
            'leave_type'   => 'required|string|max:255',
            'leave_from'     => 'required|string|max:255',
            'leave_to' => 'required|string|max:255',
            'reason' => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try {

            $leaves = new Leaves();
            $leaves->name = $request->name;
            $leaves->leave_type = $request->leave_type;
            $leaves->leave_from   = $request->leave_from;
            $leaves->leave_to  = $request->leave_to;
            $leaves->reason   = $request->reason;
            $leaves->save();

            DB::commit();
            Toastr::success(' Leave successfully  Created:)','Success');
            //return redirect()->route('form/employees/leave');

        } catch(\Exception $e) {
            DB::rollback();
            echo $e;
            Toastr::error('Leave failed :)','Error');
            //return redirect()->back();
        }
    }


}
