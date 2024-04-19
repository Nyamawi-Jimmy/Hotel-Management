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
                        <li>
                            <a href="{{ route('adminhome') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="{{ route('form/allbooking1') }}"> All Booking </a></li>
                                <li><a href="{{ route('form/booking/add1') }}"> Add Booking </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a class="active" href="{{ route('form/allcustomers/page1') }}"> All customers </a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="{{ route('form/allrooms/page1') }}">All Rooms </a></li>
                                <li><a href="{{ route('form/addroom/page1') }}"> Add Rooms </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a class="active" href="{{route("form/allemployees/page1")}}">Staff List </a></li>
                                <li><a href="{{route("form/employees/leave1")}}">Leaves </a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="invoices.html">Invoices </a></li>
                                <li><a href="payments.html">Payments </a></li>

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
                            <div class="mt-5">
                                <h4 class="card-title float-left mt-2">Staff</h4>
                                <a href="{{route("form/employees/add")}}" class="btn btn-primary float-right veiwbutton">Add Staff </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped">
                                        <thead>
                                        <tr>
                                            <th>Staff ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Role</th>
                                            <th> Date</th>
                                            <th>Join Date</th>
                                            <th>Leaving Date</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($allEmployees as $employees )
                                            <tr>
                                                <td hidden class="id">{{ $employees->id }}</td>

                                                <td>{{ $employees->emply_id }}</td>
                                                <td>{{ $employees->name }}</td>
                                                <td><a href="#" class="__cf_email__" data-cfemail="2652494b4b5f44435448474a66435e474b564a430845494b">{{ $employees->email }}</a></td>
                                                <td>{{ $employees->phone_number }}</td>
                                                <td>{{ $employees->role }}</td>
                                                <td>{{ $employees->date }}</td>

                                                <td>{{ $employees->joining_date }}</td>
                                                <td>{{ $employees->leaving_date }}</td>
                                                <td>
                                                    <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v ellipse_color"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="{{ url('form/employees/edit/'.$employees->emply_id) }}">
                                                                <i class="fas fa-pencil-alt m-r-5"></i> Edit
                                                            </a>
                                                            <a class="dropdown-item bookingDelete" href="#" data-toggle="modal" data-target="#delete_asset">
                                                                <i class="fas fa-trash-alt m-r-5"></i> Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Model delete --}}
                <div id="delete_asset" class="modal fade delete-modal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form action="{{ route('form/employees/delete') }}" method="POST">
                                @csrf
                                <div class="modal-body text-center">
                                    <img src="assets/img/sent.png" alt="" width="50" height="46">
                                    <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                        <input class="form-control" type="hidden" id="b_id" name="id" value="">

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @section('script')
        {{-- delete model --}}
        <script>
            $(document).on('click','.bookingDelete',function()
            {
                var _this = $(this).parents('tr');
                $('#b_id').val(_this.find('.id').text());
            });
        </script>
    @endsection
@endsection

