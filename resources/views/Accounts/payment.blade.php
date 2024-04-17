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
                            <a href="{{route("home")}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
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
                                <li><a href={{route("form/allemployees/page")}}>Employees List </a></li>
                                <li><a class="active" href="{{route("form/employees/leave")}}">Leaves </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="{{route("form/accounts/invoice")}}">Invoices </a></li>
                                <li><a class="active"  href="{{route("form/accounts/payments")}}">Payments </a></li>
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
                                <h4 class="card-title float-left mt-2">Payments</h4>
                            </div>
                        </div>
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
                                            <th>Invoice ID</th>
                                            <th>Customer Name</th>
                                            <th>Customer Age</th>
                                            <th>Payment Type</th>
                                            <th>Paid Date</th>
                                            <th>Paid Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a href="invoice-view.html">#INV-0001</a></td>
                                            <td>Charles Ortega</td>
                                            <td>50</td>
                                            <td>Paypal</td>
                                            <td>5-5-2020</td>
                                            <td>$320,000</td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice-view.html">#INV-0002</a></td>
                                            <td>Jason Cripps</td>
                                            <td>63</td>
                                            <td>Paypal</td>
                                            <td>10-5-2020</td>
                                            <td>$170,750</td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoice-view.html">#INV-0003</a></td>
                                            <td>Silvia Ryan</td>
                                            <td>66</td>
                                            <td>Payer</td>
                                            <td>12-5-2020</td>
                                            <td>$86,000</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
