<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">

    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Poppins:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif">

    <!-- Additional Styles (if any) -->
    @stack('styles')
</head>
<body>
    <!-- Header Top Section -->
    <div class="header_top_section">
        <div class="header_top_container">
            <!-- Left section (Call) -->
            <div class="header_top_main">
                <span class="call_text">
                    <a href="tel:+6283478293023">
                        Call: +62 83478293023
                    </a>
                </span>
            </div>

            <!-- Center section (Email) -->
            <div class="header_top_main">
                <span class="call_text_2">
                    <a href="mailto:aeonmed@gmail.com">
                        aeonmed@gmail.com
                    </a>
                </span>
            </div>

            <!-- Right section (Login and Register / Account and Logout) -->
            <div class="header_top_right">
                @guest
                    <!-- Jika user belum login, tampilkan Login dan Register -->
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                @else
                    <!-- Jika user sudah login, tampilkan logo akun dan tombol Logout -->
                    <a href="#" class="account-logo">
                        <img src="{{ asset('images/account.png') }}" alt="Account" class="h-8 w-8 rounded-full" />
                    </a>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>


    <!-- Header Section -->
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <div class="logo-text">Aeon Medical Center</div>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links (if needed) -->
                </div>
            </nav>

            <div class="custom_bg">
                <div class="custom_menu">
                    <ul>
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/treatment') }}">Treatment</a></li>
                        <li><a href="{{ url('/doctors') }}">Doctors</a></li>
                        <li><a href="{{ url('/appointment') }}">Appointment</a></li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <div class="footer_section">
        <div class="container">
            <div class="input_bt">
                <input type="text" class="mail_bt" placeholder="Enter Your Email">
                <span class="subscribe_bt"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <h3 class="footer_taital">Address</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-map-marker"></i> Making this the first true</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> Call: +62 83478293023</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> Email: aeonmed@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h3 class="footer_taital">Help & Support</h3>
                        <p>Our dedicated team is here to assist you with any questions...</p>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h3 class="footer_taital">Our Services</h3>
                        <ul>
                            <li>Comprehensive Checkups</li>
                            <li>Specialist Consultations</li>
                            <li>Emergency Care</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h3 class="footer_taital">Opening Hours</h3>
                        <ul>
                            <li>Mon-Fri: 8:00 AM - 8:00 PM</li>
                            <li>Sat: 9:00 AM - 5:00 PM</li>
                            <li>Sun: Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    @stack('scripts')
</body>
</html>
