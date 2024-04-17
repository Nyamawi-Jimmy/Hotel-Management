@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" {{ route('dashboard') }} ">
            <img src="{{ asset('assets1') }}/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-white">{{ auth()->user()->name }}</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'dashboard' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'blocks' ? ' active bg-gradient-primary' : '' }} "
                   href="{{ route('blocks') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">house</i>
                    </div>
                    <span class="nav-link-text ms-1">Blocks</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'rooms' ? ' active bg-gradient-primary' : '' }} "
                   href="{{ route('rooms') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">room</i>
                    </div>
                    <span class="nav-link-text ms-1">Rooms</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'billing' ? ' active bg-gradient-primary' : '' }} "
                   href="{{ route('billing') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">people</i>
                    </div>
                    <span class="nav-link-text ms-1">Tenants</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white" data-bs-toggle="collapse" aria-expanded="false" href="#usersExample">
                    <i class="material-icons opacity-10">money</i>
                    <span class="sidenav-normal  ms-2  ps-1"> Finance <b class="caret"></b></span>
                </a>
                <div class="collapse" id="usersExample">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item return-side">
                            <a class="nav-link text-white {{ $activePage == 'billing' ? ' active bg-gradient-primary' : '' }}  "
                               href="{{ route('billing') }}">
                                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons opacity-10">chevron_right</i>
                                </div>
                                <span class="nav-link-text ms-1">Chart of Accounts</span>
                            </a>
                        </li>
                        <li class="nav-item return-side">
                            <a class="nav-link text-white {{ $activePage == 'billing' ? ' active bg-gradient-primary' : '' }}  "
                               href="{{ route('billing') }}">
                                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons opacity-10">chevron_right</i>
                                </div>
                                <span class="nav-link-text ms-1">Banking</span>
                            </a>
                        </li>
                        <li class="nav-item return-side">
                            <a class="nav-link text-white {{ $activePage == 'billing' ? ' active bg-gradient-primary' : '' }}  "
                               href="{{ route('billing') }}">
                                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons opacity-10">chevron_right</i>
                                </div>
                                <span class="nav-link-text ms-1">Receipts</span>
                            </a>
                        </li>
                        <li class="nav-item return-side">
                            <a class="nav-link text-white {{ $activePage == 'billing' ? ' active bg-gradient-primary' : '' }}  "
                               href="{{ route('billing') }}">
                                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class="material-icons opacity-10">chevron_right</i>
                                </div>
                                <span class="nav-link-text ms-1">Payment Vouchers</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'billing' ? ' active bg-gradient-primary' : '' }}  "
                   href="{{ route('billing') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">settings</i>
                    </div>
                    <span class="nav-link-text ms-1">Settings</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
