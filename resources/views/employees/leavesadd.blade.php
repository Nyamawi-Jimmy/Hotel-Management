@extends('layouts.master')
@section('menu')
@extends('sidebar.dashboard')
@endsection
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="main-wrapper">
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li> <a href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                    <li class="list-divider"></li>
                    <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="{{ route('form/allbooking') }}"> All Booking </a></li>
                            <li><a href="{{ route('form/booking/add') }}"> Add Booking </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a  href="{{ route('form/allcustomers/page') }}"> All customers </a></li>

                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="{{ route('form/allrooms/page') }}">All Rooms </a></li>
                            <li><a href="{{ url('form/room/edit') }}"> Edit Rooms </a></li>
                            <li><a href="{{ route('form/addroom/page') }}"> Add Rooms </a></li>
                        </ul>
                    </li>
                    <li> <a href="pricing.html"><i class="far fa-money-bill-alt"></i> <span>Pricing</span></a> </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-share-alt"></i> <span> Apps </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="chat.html"><i class="fas fa-comments"></i><span> Chat </span></a></li>
                            <li class="submenu"> <a href="#"><i class="fas fa-video camera"></i> <span> Calls </span> <span class="menu-arrow"></span></a>
                                <ul class="submenu_class" style="display: none;">
                                    <li><a href="voice-call.html"> Voice Call </a></li>
                                    <li><a href="video-call.html"> Video Call </a></li>
                                    <li><a href="incoming-call.html"> Incoming Call </a></li>
                                </ul>
                            </li>
                            <li class="submenu"> <a href="#"><i class="fas fa-envelope"></i> <span> Email </span> <span class="menu-arrow"></span></a>
                                <ul class="submenu_class" style="display: none;">
                                    <li><a href="compose.html">Compose Mail </a></li>
                                    <li><a href="inbox.html"> Inbox </a></li>
                                    <li><a href="mail-veiw.html"> Mail Veiw </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="{{route("form/allemployees/page")}}">Staff </a></li>
                            <li><a class="active" href="{{route("form/employees/leave")}}">Leaves </a></li>
                            <li><a href="holidays.html">Holidays </a></li>
                            <li><a href="attendance.html">Attendance </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="invoices.html">Invoices </a></li>
                            <li><a href="payments.html">Payments </a></li>
                            <li><a href="expenses.html">Expenses </a></li>
                            <li><a href="taxes.html">Taxes </a></li>
                            <li><a href="provident-fund.html">Provident Fund </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="salary.html">Employee Salary </a></li>
                            <li><a href="salary-veiw.html">Payslip </a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Add Leave</h3> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('form/leave/save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row formtype">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Leave Type</label>
                                    <select class="form-control" id="sel1" name="leave_type" >
                                        <option value=""> Select </option>
                                        <option value="Casual Leave"> Casual Leave </option>
                                        <option value="Medical leave"> Medical Leave </option>
                                        <option value="loss of pay"> Loss of Pay </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>From</label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" name="leave_from" value="{{ old('leave_from') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>To</label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" name="leave_to" value="{{ old('leave_to') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Leave Reason</label>
                                    <textarea class="form-control @error('reason') is-invalid @enderror" rows="5" id="comment" name="reason" value="{{ old('reason') }}">

                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary buttonedit mt-5">Send Leave Request</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
