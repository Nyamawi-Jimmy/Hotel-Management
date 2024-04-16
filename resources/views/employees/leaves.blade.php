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
                        <li>
                            <a href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="{{ route('form/allbooking') }}"> All Booking </a></li>
                                <li><a href="{{ route('form/booking/add') }}"> Add Booking </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a class="active" href="{{ route('form/allcustomers/page') }}"> All customers </a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="{{ route('form/allrooms/page') }}">All Rooms </a></li>
                                <li><a href="{{ url('form/room/edit') }}"> Edit Rooms </a></li>
                                <li><a href="{{ route('form/addroom/page') }}"> Add Rooms </a></li>
                            </ul>
                        </li>
{{--
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="all-staff.html">All Staff </a></li>
                                <li><a href="edit-staff.html"> Edit Staff </a></li>
                                <li><a href="add-staff.html"> Add Staff </a></li>
                            </ul>
                        </li>
--}}
                        <li>
                            <a href="pricing.html"><i class="far fa-money-bill-alt"></i> <span>Pricing</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-share-alt"></i> <span> Apps </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="chat.html"><i class="fas fa-comments"></i><span> Chat </span></a></li>
                                <li class="submenu">
                                    <a href="#"><i class="fas fa-video camera"></i> <span> Calls </span> <span class="menu-arrow"></span></a>
                                    <ul class="submenu_class" style="display: none;">
                                        <li><a href="voice-call.html"> Voice Call </a></li>
                                        <li><a href="video-call.html"> Video Call </a></li>
                                        <li><a href="incoming-call.html"> Incoming Call </a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#"><i class="fas fa-envelope"></i> <span> Email </span> <span class="menu-arrow"></span></a>
                                    <ul class="submenu_class" style="display: none;">
                                        <li><a href="compose.html">Compose Mail </a></li>
                                        <li><a href="inbox.html"> Inbox </a></li>
                                        <li><a href="mail-veiw.html"> Mail Veiw </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href={{route("form/allemployees/page")}}>Staff List </a></li>
                                <li><a class="active" href="{{route("form/employees/leave")}}">Leaves </a></li>
                                <li><a href="{{route("form/employees/holiday")}}">Holidays </a></li>
                                <li><a href="{{route("form/employees/attendance")}}">Attendance </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="invoices.html">Invoices </a></li>
                                <li><a href="payments.html">Payments </a></li>
                                <li><a href="expenses.html">Expenses </a></li>
                                <li><a href="taxes.html">Taxes </a></li>
                                <li><a href="provident-fund.html">Provident Fund </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="salary.html">Employee Salary </a></li>
                                <li><a href="salary-veiw.html">Payslip </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fe fe-table"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="blog.html">Blog </a></li>
                                <li><a href="blog-details.html">Blog Veiw </a></li>
                                <li><a href="add-blog.html">Add Blog </a></li>
                                <li><a href="edit-blog.html">Edit Blog </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="assets.html"><i class="fas fa-cube"></i> <span>Assests</span></a>
                        </li>
                        <li>
                            <a href="activities.html"><i class="far fa-bell"></i> <span>Activities</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fe fe-table"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="expense-reports.html">Expense Report </a></li>
                                <li><a href="invoice-reports.html">Invoice Report </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a>
                        </li>
                        <li class="list-divider"></li>
                        <li class="menu-title mt-3">
                            <span>UI ELEMENTS</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-laptop"></i> <span> Components </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="uikit.html">UI Kit </a></li>
                                <li><a href="typography.html">Typography </a></li>
                                <li><a href="tabs.html">Tabs </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-edit"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="form-basic-inputs.html">Basic Input </a></li>
                                <li><a href="form-input-groups.html">Input Groups </a></li>
                                <li><a href="form-horizontal.html">Horizontal Form </a></li>
                                <li><a href="form-vertical.html">Vertical Form </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="tables-basic.html">Basic Table </a></li>
                                <li><a href="tables-datatables.html">Data Table </a></li>
                            </ul>
                        </li>
                        <li class="list-divider"></li>
                        <li class="menu-title mt-3">
                            <span>EXTRAS</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="login.html">Login </a></li>
                                <li><a href="register.html">Register </a></li>
                                <li><a href="forgot-password.html">Forgot Password </a></li>
                                <li><a href="change-password.html">Change Password </a></li>
                                <li><a href="lock-screen.html">Lockscreen </a></li>
                                <li><a href="profile.html">Profile </a></li>
                                <li><a href="gallery.html">Gallery </a></li>
                                <li><a href="error-404.html">404 Error </a></li>
                                <li><a href="error-500.html">500 Error </a></li>
                                <li><a href="blank-page.html">Blank Page </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-share-alt"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="">Level 1 </a></li>
                                <li><a href="">Level 2 </a></li>
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
                                <h4 class="card-title float-left mt-2">Leave Request</h4>
                                <a href="add-leave.html" class="btn btn-primary float-right veiwbutton">Add Leave</a>
                            </div>
                        </div>
                    </div>
                </div>F
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped">
                                        <thead>
                                        <tr>
                                            <th>Employee</th>
                                            <th>Leave Type</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>No Of Days</th>
                                            <th>Reason</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Haylie Feeney</td>
                                            <td>Casual Leave</td>
                                            <td>13 May 2018</td>
                                            <td>13 July 2018</td>
                                            <td>2 days</td>
                                            <td>Not feeling well</td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="edit-leave.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Haylie Feeney</td>
                                            <td>Casual Leave</td>
                                            <td>13 May 2018</td>
                                            <td>13 July 2018</td>
                                            <td>2 days</td>
                                            <td>Not feeling well</td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="edit-leave.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Haylie Feeney</td>
                                            <td>Casual Leave</td>
                                            <td>13 May 2018</td>
                                            <td>13 July 2018</td>
                                            <td>2 days</td>
                                            <td>Not feeling well</td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="edit-leave.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="delete_asset" class="modal fade delete-modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <img src="assets/img/sent.png" alt="" width="50" height="46">
                            <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                            <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
