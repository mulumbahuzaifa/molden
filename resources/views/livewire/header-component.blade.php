<header class="main-header sticky-header sticky-header--normal">
    <div class="main-header__inner">
        <div class="main-header__logo">
            <a href="/">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Hiredots HTML" width="100">
            </a>
        </div><!-- /.main-header__logo -->
        <a href="#" class="search-toggler main-header__search">
            <i class="icon-magnifying-glass" aria-hidden="true"></i>
            <span class="sr-only">Search</span>
        </a><!-- /.search-toggler -->
        <div class="main-header__menu">
            <nav class="main-header__nav main-menu">
                <ul class="main-menu__list">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li class="jobs-abroad-item">
                        <a href="{{ route('jobs') }}" class="jobs-abroad-link">Find Jobs Abroad
                            <span class="urgent-badge">Hot</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="{{ route('services') }}">Services</a>
                        <ul>
                            @foreach ($services as $service )
                                <li><a href="{{ route('service.detail', ['serviceId' => $service->id]) }}">{{ $service->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('blogs') }}">News</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->utype === 'ADM')
                          <li class="dropdown">
                            <a href="#">My Account <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul>
                                <li>
                                    <a href="{{ route('admin.services') }}">Services</a></li>
                                <li>
                                <li>
                                    <a href="{{ route('admin.categories') }}">Job Categories</a></li>
                                <li>
                                <li>
                                    <a href="{{ route('admin.jobs') }}">Jobs</a></li>
                                <li>
                                <li>
                                    <a href="{{ route('admin.applications') }}">Applications</a></li>
                                <li>
                                <li>
                                    <a href="{{ route('admin.blogs') }}">Blogs</a></li>
                                <li>
                                <li>
                                    <a href="{{ route('admin.contact') }}">Contacts</a></li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                                </li>
                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                    @csrf

                                </form>
                            </ul>
                        </li>
                        @else
                        <li class="dropdown" >
                            <a title="My Account" href="#">My Account <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul>
                                <li>
                                    <a href="{{ route('user.dashboard') }}">User Dashboard</a></li>
                                <li>
                                <li class="menu-item dropdown-item" >
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                                </li>
                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                    @csrf

                                </form>
                            </ul>
                        </li>
                    @endif
                    @else
                    <li class="dropdown">
                        <a href="#">Account</a>
                        <ul>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </li>
                    @endauth
                    @endif
                </ul>
            </nav><!-- /.main-header__nav -->
            <div class="main-header__call">
                <i class="icon-telephone"></i>
                <a href="tel:+256759104567">+256-759-104-567</a>
            </div>
        </div>
        <div class="main-header__link">
            <a class="main-header__btn" href="{{ route('contact') }}">Book <br> Appointment</a>
        </div>
        <div class="mobile-nav__btn mobile-nav__toggler">
            <span></span>
            <span></span>
            <span></span>
        </div><!-- /.mobile-nav__toggler -->
    </div>
</header>
