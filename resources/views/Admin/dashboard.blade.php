<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="{{asset ('/img/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('plugins/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset ('plugins/icons/flags/flags.css')}}">
    <link rel="stylesheet" href="{{asset ('/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset ('/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset ('/css/style32.css')}}">
</head>

<body>

    <div class="main-wrapper">

        <!--Header Navbar Start-->
        <div class="header">

            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="{{asset ('/img/logo.png')}}" alt="Logo">
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="{{asset ('/img/logo-small.png')}}" alt="Logo" width="30" height="30">
                </a>
            </div>
            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

            <ul class="nav user-menu">
                <li class="nav-item dropdown noti-dropdown language-drop me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="{{asset ('/img/icons/header-icon-01.svg')}}" alt="">
                    </a>
                    <div class="dropdown-menu ">
                        <div class="noti-content">
                            <div>
                                <a class="dropdown-item" href="javascript:;"><i
                                        class="flag flag-lr me-2"></i>English</a>
                                <a class="dropdown-item" href="javascript:;"><i
                                        class="flag flag-bl me-2"></i>Francais</a>
                                <a class="dropdown-item" href="javascript:;"><i class="flag flag-cn me-2"></i>Turkce</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown noti-dropdown me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="{{asset ('img/icons/header-icon-05.svg')}}" alt="">
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
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{asset ('/img/profiles/avatar-02.jpg')}}">
                                            </span>
                                            <div class="media-body flex-grow-1">
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
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{asset ('/img/profiles/avatar-11.jpg')}}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">International Software
                                                        Inc</span> has sent you a invoice in the amount of <span
                                                        class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{asset ('/img/profiles/avatar-17.jpg')}}">
                                            </span>
                                            <div class="media-body flex-grow-1">
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
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{asset ('/img/profiles/avatar-13.jpg')}}">
                                            </span>
                                            <div class="media-body flex-grow-1">
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

                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list win-maximize">
                        <img src="{{asset ('/img/icons/header-icon-04.svg')}}" alt="">
                    </a>
                </li>

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{asset ('/img/profiles/avatar-01.jpg')}}" width="31"
                                alt="Temitayo">
                            <div class="user-text">
                                <h6>Temitayo</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{asset ('/img/profiles/avatar-01.jpg')}}" alt="User Image"
                                    class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>Temitayo</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ route('profile.blade.php')}}">My Profile</a>
                        <a class="dropdown-item" href="{{ route('inbox.blade.php')}}">Inbox</a>
                        <a class="dropdown-item" href="{{ route ('login.blade.php')}}">Logout</a>
                    </div>
                </li>

            </ul>

        </div>
        <!--Header Navbar End-->

        <!--Sidebar Header Start -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Dashboard</span>
                        </li>
                        <li class="submenu active">
                            <a href="{{ route('dashboard.blade.php') }}">Dashboard</a><i class="feather-grid"></i> <span> Admin</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('students.blade.php')}}">Student List</a></li>
                                <li><a href="{{ route('student-details.blade.php')}}">Student View</a></li>
                                <li><a href="{{ route('add-student.blade.php')}}">Student Add</a></li>
                                <li><a href="{{ route('edit-student.blade.php')}}">Student Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Instructors</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route ('teachers.blade.php')}}">Instructor List</a></li>
                                <li><a href="{{route ('teacher-details.blade.php')}}">Instructor View</a></li>
                                <li><a href="{{route ('add-teacher.blade.php')}}">Instructor Add</a></li>
                                <li><a href="{{route ('edit-teacher.blade.php')}}">Instructor Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Courses</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route ('courses.blade.php')}}">Courses List</a></li>
                                <li><a href="{{route ('add-course.blade.php')}}">Courses Add</a></li>
                                <li><a href="{{route ('edit-courses.blade.php')}}">Courses Edit</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-clipboard"></i> <span> Invoices</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="invoices.html">Invoices List</a></li>
                                <li><a href="invoice-grid.html">Invoices Grid</a></li>
                                <li><a href="add-invoice.html">Add Invoices</a></li>
                                <li><a href="edit-invoice.html">Edit Invoices</a></li>
                                <li><a href="view-invoice.html">Invoices Details</a></li>
                                <li><a href="invoices-settings.html">Invoices Settings</a></li>
                            </ul>
                        </li>
                       
                        <li class="submenu">
                            <a href="{{route ('settings.blade.php')}}"><i class="fas fa-shield-alt"></i> <span> Settings </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route ('login.blade.php')}}">Login</a></li>
                                <li><a href="{{route ('forgot-password.blade.php')}}">Forgot Password</a></li>
                                <li><a href="{{route ('error-404.blade.php')}}">Error Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Sidebar Header Ends -->

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Welcome Admin!</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Admin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Students</h6>
                                        <h3>50055</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{asset ('/img/icons/dash-icon-01.svg')}}" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Awards</h6>
                                        <h3>50+</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{asset ('/img/icons/dash-icon-02.svg')}}" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Department</h6>
                                        <h3>30+</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{asset ('/img/icons/dash-icon-03.svg')}}" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Revenue</h6>
                                        <h3>$505</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{asset ('/img/icons/dash-icon-04.svg')}}" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-6">

                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Overview</h5>
                                    </div>
                                    <div class="col-6">
                                        <ul class="chart-list-out">
                                            <li><span class="circle-blue"></span>Instructor</li>
                                            <li><span class="circle-green"></span>Student</li>
                                            <li class="star-menus"><a href="javascript:;"><i
                                                        class="fas fa-ellipsis-v"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="apexcharts-area"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-6">

                        <div class="card card-chart">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h5 class="card-title">Number of Students</h5>
                                    </div>
                                    <div class="col-6">
                                        <ul class="chart-list-out">
                                            <li><span class="circle-blue"></span>Girls</li>
                                            <li><span class="circle-green"></span>Boys</li>
                                            <li class="star-menus"><a href="javascript:;"><i
                                                        class="fas fa-ellipsis-v"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="bar"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 d-flex">

                        <div class="card flex-fill student-space comman-shadow">
                            <div class="card-header d-flex align-items-center">
                                <h5 class="card-title">Star Students</h5>
                                <ul class="chart-list-out student-ellips">
                                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table
                                        class="table star-student table-hover table-center table-borderless table-striped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th class="text-center">Marks</th>
                                                <th class="text-center">Percentage</th>
                                                <th class="text-end">Year</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE2209</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.html">
                                                        <img class="rounded-circle"
                                                            src="{{asset ('/img/profiles/avatar-02.jpg')}}" width="25"
                                                            alt="Star Students">
                                                        John Smith
                                                    </a>
                                                </td>
                                                <td class="text-center">1185</td>
                                                <td class="text-center">98%</td>
                                                <td class="text-end">
                                                    <div>2019</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE1245</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.html">
                                                        <img class="rounded-circle"
                                                            src="{{asset ('/img/profiles/avatar-01.jpg')}}" width="25"
                                                            alt="Star Students">
                                                        Jolie Hoskins
                                                    </a>
                                                </td>
                                                <td class="text-center">1195</td>
                                                <td class="text-center">99.5%</td>
                                                <td class="text-end">
                                                    <div>2018</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE1625</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.html">
                                                        <img class="rounded-circle"
                                                            src="{{asset ('/img/profiles/avatar-03.jpg')}}" width="25"
                                                            alt="Star Students">
                                                        Pennington Joy
                                                    </a>
                                                </td>
                                                <td class="text-center">1196</td>
                                                <td class="text-center">99.6%</td>
                                                <td class="text-end">
                                                    <div>2017</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE2516</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.html">
                                                        <img class="rounded-circle"
                                                            src="{{asset ('/img/profiles/avatar-04.jpg')}}" width="25"
                                                            alt="Star Students">
                                                        Millie Marsden
                                                    </a>
                                                </td>
                                                <td class="text-center">1187</td>
                                                <td class="text-center">98.2%</td>
                                                <td class="text-end">
                                                    <div>2016</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE2209</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.html">
                                                        <img class="rounded-circle"
                                                            src="{{asset ('/img/profiles/avatar-05.jpg')}}" width="25"
                                                            alt="Star Students">
                                                        John Smith
                                                    </a>
                                                </td>
                                                <td class="text-center">1185</td>
                                                <td class="text-center">98%</td>
                                                <td class="text-end">
                                                    <div>2015</div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-6 d-flex">

                        <div class="card flex-fill comman-shadow">
                            <div class="card-header d-flex align-items-center">
                                <h5 class="card-title ">Student Activity </h5>
                                <ul class="chart-list-out student-ellips">
                                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="activity-groups">
                                    <div class="activity-awards">
                                        <div class="award-boxs">
                                            <img src="{{asset ('/img/icons/award-icon-01.svg')}}" alt="Award">
                                        </div>
                                        <div class="award-list-outs">
                                            <h4>1st place in "Chess”</h4>
                                            <h5>John Doe won 1st place in "Chess"</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>1 Day ago</span>
                                        </div>
                                    </div>
                                    <div class="activity-awards">
                                        <div class="award-boxs">
                                            <img src="{{asset ('/img/icons/award-icon-02.svg')}}" alt="Award">
                                        </div>
                                        <div class="award-list-outs">
                                            <h4>Participated in "Carrom"</h4>
                                            <h5>Justin Lee participated in "Carrom"</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>2 hours ago</span>
                                        </div>
                                    </div>
                                    <div class="activity-awards">
                                        <div class="award-boxs">
                                            <img src="{{asset ('/img/icons/award-icon-03.svg')}}" alt="Award">
                                        </div>
                                        <div class="award-list-outs">
                                            <h4>Internation conference in "St.John School"</h4>
                                            <h5>Justin Leeattended internation conference in "St.John School"</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>2 Week ago</span>
                                        </div>
                                    </div>
                                    <div class="activity-awards mb-0">
                                        <div class="award-boxs">
                                            <img src="{{asset ('/img/icons/award-icon-04.svg')}}" alt="Award">
                                        </div>
                                        <div class="award-list-outs">
                                            <h4>Won 1st place in "Chess"</h4>
                                            <h5>John Doe won 1st place in "Chess"</h5>
                                        </div>
                                        <div class="award-time-list">
                                            <span>3 Day ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill fb sm-box">
                            <div class="social-likes">
                                <p>Like us on facebook</p>
                                <h6>50,095</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="{{asset ('/img/icons/social-icon-01.svg')}}" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill twitter sm-box">
                            <div class="social-likes">
                                <p>Follow us on twitter</p>
                                <h6>48,596</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="{{asset ('/img/icons/social-icon-02.svg')}}" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill insta sm-box">
                            <div class="social-likes">
                                <p>Follow us on instagram</p>
                                <h6>52,085</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="{{asset ('/img/icons/social-icon-03.svg')}}" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card flex-fill linkedin sm-box">
                            <div class="social-likes">
                                <p>Follow us on linkedin</p>
                                <h6>69,050</h6>
                            </div>
                            <div class="social-boxs">
                                <img src="{{asset ('/img/icons/social-icon-04.svg')}}" alt="Social Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <p>Copyright © 2022 WhiteSprout.</p>
            </footer>
        </div>
    </div>

    <script src="{{asset ('/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset ('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset ('/js/feather.min.js')}}"></script>
    <script src="{{asset ('/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset ('/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{asset ('/plugins/apexchart/chart-data.js')}}"></script>
    <script src="{{asset ('/js/script.js')}}"></script>
</body>

</html>