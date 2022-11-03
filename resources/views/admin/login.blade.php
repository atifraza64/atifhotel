<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title') | Atifhotel.com </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

   <link rel="stylesheet" href="{{asset ('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('admin/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset ('admin/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset ('admin/css/feathericon.min.css')}}">
    <link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
    <link rel="stylesheet" href="{{asset ('admin/plugins/morris/morris.css')}}">
    <link rel="stylesheet" href="{{asset ('admin/css/style.css')}}"> 

</head>
<body>
   <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left"> <img class="img-fluid" src="assets/img/logo.png" alt="Logo"> </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            <form action="index.html">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Email"> </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Password"> </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                                </div>
                            </form>
                            <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a> </div>
                            <div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
                            <div class="social-login"> <span>Login with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
                            <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset ('admin/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset ('admin/popper.min.js') }}"></script>
    <script src="{{ asset ('admin/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('admin/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset ('admin/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset ('admin/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset ('admin/js/chart.morris.js') }}"></script>
    <script src="{{ asset ('admin/js/script.js') }}"></script>



</body>
</html>