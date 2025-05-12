<div class="">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            <div class="pcoded-inner-navbar main-menu mt-3">
                <div class="">
                    <div class="main-menu-header">
                        {{-- <img class="img-80 img-radius" src="{{ URL::asset('assets/images/avatar-4.jpg') }}" alt="User-Profile-Image"> --}}
                        <img src="{{ env('LIVE_IMAGE_LINK') }}{{ Auth::user()->companies?->logo ?? '' }}"
                                class="img-80 img-radius" alt="User-Profile-Image"
                                onerror="this.onerror=null; this.src='{{ asset('images/avatar-4.jpg') }}'">
                        <div class="user-details">
                            <span id="more-details">{{ strtoupper(Auth::user()->name) }}<i class="fa fa-caret-down"></i></span>
                        </div>
                    </div>
                    <div class="main-menu-content">
                        <ul>
                            <li class="more-details">
                                <a href="{{ route('profile') }}"><i class="ti-user"></i>View Profile</a>

                                <a href="{{ route('logout') }}"><i class="ti-layout-sidebar-left"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- <div class="pcoded-navigation-label">Navigation</div> -->
                <ul class="pcoded-item pcoded-left-item">
                    <li class="active">
                        <a href="{{ route('admin') }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                            <span class="pcoded-mtext">Dashboard</span>
                            
                        </a>
                    </li>
                </ul>
                @php
                $currentRoute = Route::currentRouteName();
            
                $entryMenuRoutes = [
                    'party.index', 
                    'company.index',
                    'booking.entry',
                    'manifest.entry',
                    'bill.create',
                    'companies.create',
                    'companies.edit',
                    // other ENTRY routes
                ];
            
                $utilityMenuRoutes = [
                    'user.index',
                    // other UTILITIES routes
                ];
            
                $isEntryActive = in_array($currentRoute, $entryMenuRoutes);
                $isUtilityActive = in_array($currentRoute, $utilityMenuRoutes);
            @endphp
            
                <!-- ENTRY -->
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu {{ $isEntryActive ? 'pcoded-trigger' : '' }}">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="fa fa-keyboard"></i></span>
                            <span class="pcoded-mtext">ENTRY</span>
                            
                        </a>
                        <ul class="pcoded-submenu" style="{{ $isEntryActive ? 'display:block;' : '' }}">
                            <li class="{{ $currentRoute == 'party.index' ? 'active' : '' }}">
                                <a href="{{ route('party.index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">PARTY MASTER</span>
                                </a>
                            </li>
                            @if(Auth::user()->isType(['ADMIN']))
                                <li class="{{ in_array($currentRoute, ['company.index', 'companies.create', 'companies.edit']) ? 'active' : '' }}">
                                    <a href="{{ route('company.index') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">COMPANY CREATE</span>
                                    </a>
                                </li>
                            @endif
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark active">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">BOOKING ENTRY</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">OUT-SCAN MANIFEST</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">BILL CREATE</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">CASH ENTRY</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">BANK ENTRY</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">CITY ENTRY</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">DELIVERY MAN MASTER ENTRY</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">AREA ENTRY</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">IN-SCAN ENTRY</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">DRS ENTRY</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">IN-SCAN & DRS</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">DRS STATUS UPDATION</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">NET FILE CREATE</span> 
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">POD SIGN DATE</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">BULT BOOKING ENTRY</span> 
                                </a>
                            </li>
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">BULK BILL CREATE</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- REPORT -->
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="fa fa-file" aria-hidden="true"></i><b></b></span>
                            <span class="pcoded-mtext">REPORT</span>
                            
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">C.N. REGISTER PRINT</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="button.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">C.N. USER REGISTER PRINT</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="accordion.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">C.N. PARTY STATMENT</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="tabs.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">C.N. SLIP PRINTING</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="color.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">BILL PRINTING</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="label-badge.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">DAILY REPORT COMPP.</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="tooltip.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">BILL REGISTER PRINT</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="typography.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">ARIA DELIVERY STATMENT</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="notification.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">CASH BOOK PRINT</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="notification.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">CABANK BOOK PRINT</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="notification.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">LADGER BOOK PRINT</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="notification.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">OUT STANDING LIST</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="notification.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">GST TEXT REGISTER</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- UTILITIES -->
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="fa fa-tasks" aria-hidden="true"></i></i>
                            </span>
                            <span class="pcoded-mtext">UTILITIES</span>
                            
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="breadcrumb.html" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">ENTRY</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- UTILITIES -->
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu" style="{{ $isUtilityActive ? 'pcoded-trigger' : '' }}">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="fa fa-tasks" aria-hidden="true"></i></i>
                            </span>
                            <span class="pcoded-mtext">ADMIN</span>
                            
                        </a>
                        <ul class="pcoded-submenu"   style="{{ $isUtilityActive ? 'display:block;' : '' }}">
                            <li class="{{ $currentRoute == 'user.index' ? 'active' : '' }}">
                                <a href="{{ route('user.index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext">USERS</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                
            </div>
        </nav>
    </div>
</div>