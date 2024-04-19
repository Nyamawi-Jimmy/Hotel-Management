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
                <a href="{{ route('home') }}" class="logo"> <img src="assets/img/hotel_logo.png" width="50" height="70" alt="logo"> <span class="logoclass">HOTEL</span> </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
            <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
            <ul class="nav user-menu">
                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media"> <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media"> <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">International Software
                                                    Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span> </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media"> <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone
                                                    XR</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span> </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media"> <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Mercury Software
                                                    Inc</span> added a new product <span class="noti-title">Apple
                                                    MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span> </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
                    </div>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Soeng Souy"></span> </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm"> <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle"> </div>
                            <div class="user-text">
                                <h6>Soeng Souy</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div> <a class="dropdown-item" href="profile.html">My Profile</a> <a class="dropdown-item" href="settings.html">Account Settings</a> <a class="dropdown-item" href="login.html">Logout</a> </div>
                </li>
            </ul>
        </div>
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
                                <li><a class="active" href="{{ route('form/allcustomers/page') }}"> All customers </a></li>

                            </ul>
                        </li>
                        <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="{{ route('form/allrooms/page') }}">All Rooms </a></li>
                                <li><a href="{{ url('form/room/edit') }}"> Edit Rooms </a></li>
                                <li><a href="{{ route('form/addroom/page') }}"> Add Rooms </a></li>
                            </ul>
                        </li>
                        <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="all-staff.html">All Staff </a></li>
                                <li><a href="edit-staff.html"> Edit Staff </a></li>
                                <li><a href="add-staff.html"> Add Staff </a></li>
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
                        <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href={{route("form/allemployees/page")}}>Employees List </a></li>
                                <li><a  href="{{route("form/employees/leave")}}">Leaves </a></li>
                                <li><a href="{{route("form/employees/holiday")}}">Holidays </a></li>
                                <li><a class="active" href="{{route("form/employees/attendance")}}">Attendance </a></li>
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
                        <li> <a href="calendar.html"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a> </li>
                        <li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="blog.html">Blog </a></li>
                                <li><a href="blog-details.html">Blog Veiw </a></li>
                                <li><a href="add-blog.html">Add Blog </a></li>
                                <li><a href="edit-blog.html">Edit Blog </a></li>
                            </ul>
                        </li>
                        <li> <a href="assets.html"><i class="fas fa-cube"></i> <span>Assests</span></a> </li>
                        <li> <a href="activities.html"><i class="far fa-bell"></i> <span>Activities</span></a> </li>
                        <li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="expense-reports.html">Expense Report </a></li>
                                <li><a href="invoice-reports.html">Invoice Report </a></li>
                            </ul>
                        </li>
                        <li> <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a> </li>
                        <li class="list-divider"></li>
                        <li class="menu-title mt-3"> <span>UI ELEMENTS</span> </li>
                        <li class="submenu"> <a href="#"><i class="fas fa-laptop"></i> <span> Components </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="uikit.html">UI Kit </a></li>
                                <li><a href="typography.html">Typography </a></li>
                                <li><a href="tabs.html">Tabs </a></li>
                            </ul>
                        </li>
                        <li class="submenu"> <a href="#"><i class="fas fa-edit"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="form-basic-inputs.html">Basic Input </a></li>
                                <li><a href="form-input-groups.html">Input Groups </a></li>
                                <li><a href="form-horizontal.html">Horizontal Form </a></li>
                                <li><a href="form-vertical.html">Vertical Form </a></li>
                            </ul>
                        </li>
                        <li class="submenu"> <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="tables-basic.html">Basic Table </a></li>
                                <li><a href="tables-datatables.html">Data Table </a></li>
                            </ul>
                        </li>
                        <li class="list-divider"></li>
                        <li class="menu-title mt-3"> <span>EXTRAS</span> </li>
                        <li class="submenu"> <a href="#"><i class="fas fa-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
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
                        <li class="submenu"> <a href="#"><i class="fas fa-share-alt"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
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
                                <h4 class="card-title float-left mt-2">Attendance Sheet</h4> </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form>
                            <div class="row formtype">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Employee Name</label>
                                        <input class="form-control" type="text" value="BKG-0001"> </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Select Month</label>
                                        <select class="form-control" id="sel1" name="sellist1">
                                            <option>Select</option>
                                            <option>Jan</option>
                                            <option>Feb</option>
                                            <option>Mar</option>
                                            <option>April</option>
                                            <option>May</option>
                                            <option>June</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Select Year</label>
                                        <select class="form-control" id="sel2" name="sellist1">
                                            <option>Select</option>
                                            <option>2017</option>
                                            <option>2016</option>
                                            <option>2015</option>
                                            <option>2014</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Search</label> <a href="#" class="btn btn-success btn-block mt-0 search_button"> Search </a> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive" style="box-shadow: 0 0.5em 1em -0.125em rgba(10,10,10,.1), 0 0 0 1px rgba(10,10,10,.02);">
                            <table class="table table-striped custom-table mb-0">
                                <thead>
                                <tr>
                                    <th>Employee</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                    <th>8</th>
                                    <th>9</th>
                                    <th>10</th>
                                    <th>11</th>
                                    <th>12</th>
                                    <th>13</th>
                                    <th>14</th>
                                    <th>15</th>
                                    <th>16</th>
                                    <th>17</th>
                                    <th>18</th>
                                    <th>19</th>
                                    <th>20</th>
                                    <th>22</th>
                                    <th>23</th>
                                    <th>24</th>
                                    <th>25</th>
                                    <th>26</th>
                                    <th>27</th>
                                    <th>28</th>
                                    <th>29</th>
                                    <th>30</th>
                                    <th>31</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Albina Simonis</td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td>
                                        <div class="half-day"><span class="first-off"><i class="fa fa-check text-success"></i></span> <span class="first-off"><i class="fas fa-times text-danger"></i></span> </div>
                                    </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td>
                                        <div class="half-day"><span class="first-off"><i class="fa fa-close text-danger"></i></span> <span class="first-off"><i class="fas fa-check text-success"></i></span> </div>
                                    </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                </tr>
                                <tr>
                                    <td>Cristina Groves</td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                </tr>
                                <tr>
                                    <td>Haylie Feeney</td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                </tr>
                                <tr>
                                    <td>Mary Mericle</td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                </tr>
                                <tr>
                                    <td>Zoe Butler</td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                </tr>
                                <tr>
                                    <td>Cristina Groves</td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                </tr>
                                <tr>
                                    <td>Marie Wells</td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                </tr>
                                <tr>
                                    <td>Henry Daniels</td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                </tr>
                                <tr>
                                    <td>Mark Hunter</td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                </tr>
                                <tr>
                                    <td>Michael Sullivan</td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-times text-danger"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                    <td><i class="fas fa-check text-success"></i> </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
