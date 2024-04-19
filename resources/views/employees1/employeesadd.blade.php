@extends('layouts.master')
@section('menu')
    @extends('sidebar1.dashboard')
@endsection
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="main-wrapper">
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li> <a href="{{ route('adminhome') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                        <li class="list-divider"></li>
                        <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="{{ route('form/allbooking1') }}"> All Booking </a></li>
                                <li><a href="{{ route('form/booking/add1') }}"> Add Booking </a></li>
                            </ul>
                        </li>
                        <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a class="active" href="{{ route('form/allcustomers/page1') }}"> All customers </a></li>

                            </ul>
                        </li>
                        <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="{{ route('form/allrooms/page1') }}">All Rooms </a></li>
                                <li><a href="{{ route('form/addroom/page1') }}"> Add Rooms </a></li>
                            </ul>
                        </li>

                        <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a class="active" href="{{route("form/allemployees/page")}}">Employees List </a></li>
                                <li><a href="{{route("form/employees/leave")}}">Leaves </a></li>
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


                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title mt-5">Add Staff</h3> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('form/employees/save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row formtype">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="usr1" name="name" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="usr1" name="phone_number" value="{{ old('phone_number') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Joining Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name="joining_date" value="{{ old('joining_date') }}">
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name="date" value="{{ old('date') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Leaving Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name="leaving_date" value="{{ old('leaving_date') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control" id="sel1" name="role">
                                            <option>Select</option>
                                            <option>Admin</option>
                                            <option>Manager</option>
                                            <option>Staff</option>
                                            <option>Servants</option>
                                            <option>Accountant</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary buttonedit">Create Employee</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
