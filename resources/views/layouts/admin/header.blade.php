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
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="{{ route('admin.dashboard') }}" class="logo"> <img src="assets/img/hotel_logo.png" width="50" height="70" alt="logo"> <span class="logoclass">HOTEL</span> </a>
                <a href="{{ route('admin.dashboard') }}" class="logo logo-small"> <img src="assets/img/hotel_logo.png" alt="Logo" width="30" height="30"> </a>
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
                        <li> <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                        <li class="list-divider"></li>
                        <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="{{ route('admin.booking') }}"> All Booking </a></li>
                                <li><a href="{{ route ('admin.edit_booking')}}"> Edit Booking </a></li>
                                <li><a href="{{route ('admin.add_booking')}}"> Add Booking </a></li>
                            </ul>
                        </li>
                        <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="{{ route('admin.customers') }}"> All Customers </a></li>
                                <li><a href="{{ route('admin.edit_customers') }}"> Edit Customers </a></li>
                                <li><a href="{{ route('admin.add_customers') }}"> Add Customers </a></li>
                            </ul>
                        </li>
                        <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="{{ route('admin.rooms') }}"> All Rooms </a></li>
                                <li><a href="{{ route('admin.edit_rooms') }}"> Edit Rooms </a></li>
                                <li><a href="{{ route('admin.add_rooms') }}"> Add Rooms </a></li>
                            </ul>
                        </li>
                         <li> <a href="{{ route('admin.price') }}"><i class="far fa-money-bill-alt"></i> <span>Pricing</span></a> </li>
                        <li> <a href="{{ route('admin.settings') }}"><i class="fas fa-cog"></i> <span>Settings</span></a> </li>
                        <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="all-staff.html">All Staff </a></li>
                                <li><a href="edit-staff.html"> Edit Staff </a></li>
                                <li><a href="add-staff.html"> Add Staff </a></li>
                            </ul>
                        </li>
                        
                       
                        <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="employees.html">Employees List </a></li>
                                <li><a href="leaves.html">Leaves </a></li>
                                <li><a href="holidays.html">Holidays </a></li>
                                <li><a href="attendance.html">Attendance </a></li>
                            </ul>
                        </li>
                        
                        <li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="blog.html">Blog </a></li>
                                <li><a href="blog-details.html">Blog Veiw </a></li>
                                <li><a href="add-blog.html">Add Blog </a></li>
                                <li><a href="edit-blog.html">Edit Blog </a></li>
                            </ul>
                        </li>
                        <li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="expense-reports.html">Expense Report </a></li>
                                <li><a href="invoice-reports.html">Invoice Report </a></li>
                            </ul>
                        </li>

                       
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            @yield('content')
        </div>
    </div>

 <script src="{{ asset ('admin/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset ('admin/js/popper.min.js') }}"></script>
    <script src="{{ asset ('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('admin/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset ('admin/js/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset ('admin/js/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset ('admin/js/chart.morris.js') }}"></script>
    <script src="{{ asset ('admin/js/script.js') }}"></script>



</body>
</html>