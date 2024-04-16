@extends('layouts.master')
@section('menu')
    @extends('sidebar.dashboard')
@endsection
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="assets/img/hotel_logo.png" width="50" height="70" alt="logo">
                    <span class="logoclass">HOTEL</span>
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="assets/img/hotel_logo.png" alt="Logo" width="30" height="30">
                </a>
            </div>

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-left"></i>
            </a>



            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>


            <ul class="nav user-menu">

                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has
                                                    approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">International Software
Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">John Hendry</span> sent
                                                    a cancellation request <span class="noti-title">Apple iPhone
XR</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
<span class="avatar avatar-sm">
<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Mercury Software
Inc</span> added a new product <span class="noti-title">Apple
MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Soeng Souy"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>Soeng Souy</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="settings.html">Account Settings</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>

            </ul>

        </div>


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
                                <li><a href="{{ route('form/addroom/page') }}"> Add Rooms </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="all-staff.html">All Staff </a></li>
                                <li><a href="edit-staff.html"> Edit Staff </a></li>
                                <li><a href="add-staff.html"> Add Staff </a></li>
                            </ul>
                        </li>
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
                            <a href="#"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a class="active" href="{{route("form/allemployees/page")}}">Employees List </a></li>
                                <li><a href="{{route("form/employees/leave")}}">Leaves </a></li>
                                <li><a href="holidays.html">Holidays </a></li>
                                <li><a href="attendance.html">Attendance </a></li>
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
                                <h4 class="card-title float-left mt-2">Employee</h4>
                                <a href="{{route("form/employees/add")}}" class="btn btn-primary float-right veiwbutton">Add Employee</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form>
                            <div class="row formtype">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Employee ID</label>
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                </div> <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Employee Name</label>
                                        <input type="text" class="form-control" id="usr1">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control" id="sel1" name="sellist1">
                                            <option>Admin</option>
                                            <option>Manager</option>
                                            <option>Staff</option>
                                            <option>Accountant</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Search</label>
                                        <a href="#" class="btn btn-success btn-block mt-0 search_button"> Search </a>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Employee ID</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Join Date</th>
                                            <th>role</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Albina Simonis</td>
                                            <td>Ma-0001</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b7d6dbd5ded9d6c4dedad8d9dec4f7d2cfd6dac7dbd299d4d8da">[email&#160;protected]</a></td>
                                            <td>828-634-2744</td>
                                            <td>7 May 2015</td>
                                            <td>
                                                <span class="custom-badge status-green">Manager</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="edit-employee.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cristina Groves</td>
                                            <td>SF-0001</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="680b1a011b1c0106090f1a071e0d1b280d10090518040d460b0705">[email&#160;protected]</a></td>
                                            <td>928-344-5176</td>
                                            <td>1 Jan 2013</td>
                                            <td>Staff</td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="edit-employee.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mary Mericle</td>
                                            <td>SF-0003</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4825293a31252d3a212b242d082d30292538242d662b2725">[email&#160;protected]</a></td>
                                            <td>603-831-4983</td>
                                            <td>27 Dec 2017</td>
                                            <td>Accountant</td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="edit-employee.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Haylie Feeney</td>
                                            <td>SF-0002</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4f272e3623262a292a2a212a360f2a372e223f232a612c2022">[email&#160;protected]</a></td>
                                            <td>616-774-4962</td>
                                            <td>21 Apr 2017</td>
                                            <td>Room Maintainers</td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="edit-employee.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Zoe Butler</td>
                                            <td>SF-0001</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5e24313b3c2b2a323b2c1e3b263f332e323b703d3133">[email&#160;protected]</a></td>
                                            <td>444-555-9999</td>
                                            <td>19 May 2012</td>
                                            <td>Receptionist</td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="edit-employee.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
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

    </div>

@endsection
