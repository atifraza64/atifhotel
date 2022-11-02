<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title') | Atifhotel.com </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 

    <!-- Vendor CSS File -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor//font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor//animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor//slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor//slick/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor//tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="css/hover-style.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
	       <!-- Header Section Start -->
        <header id="header">
            <a href="index.html" class="logo"><img src="img/logo.jpg" alt="logo"></a>
            <div class="phone"><i class="fa fa-phone"></i>+1 234 567 8900</div>
            <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
            <nav class="main-menu top-menu">
                <ul>
                    <li class="active"><a href="{{ route('home') }}">Home</a></li>
                    <!-- {{ url('/about') }} -->
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('rooms') }}">Rooms</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </nav>
        </header>
        <!-- Header Section End -->
	@yield('content')
	        <!-- Footer Section Start -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="social">
                            <a href=""><li class="fa fa-instagram"></li></a>
                            <a href=""><li class="fa fa-twitter"></li></a>
                            <a href=""><li class="fa fa-facebook-f"></li></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <p>Copyright &#169; 2045 <a href="">Your Site Name</a> All Rights Reserved.</p>
						
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						<p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section End -->
        <!-- Vendor JavaScript File -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/easing/easing.min.js') }}"></script>
    <script src="{{ asset('vendor/stickyjs/sticky.js') }}"></script>
    <script src="{{ asset('vendor/superfish/hoverIntent.js') }}"></script>
    <script src="{{ asset('vendor/superfish/superfish.min.js') }}"></script>
    <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('vendor/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('vendor/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    
    <!-- Booking Javascript File -->
    <script src="{{ asset('js/booking.js') }}"></script>
    <script src="{{ asset('js/jqBootstrapValidation.min.js') }}"></script>

    <!-- Main Javascript File -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>