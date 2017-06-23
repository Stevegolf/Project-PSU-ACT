<!DOCTYPE html>
<head>
<title>Student Activity Management System @yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="/backend/css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="/backend/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="/backend/css/font.css" type="text/css"/>
<link href="/backend/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<script src="/backend/js/jquery2.0.3.min.js"></script>
<script src="/backend/js/modernizr.js"></script>
<script src="/backend/js/jquery.cookie.js"></script>
<script src="/backend/js/screenfull.js"></script>
        <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }

            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });
        });
        </script>
<!-- charts -->
<script src="/backend/js/raphael-min.js"></script>
<script src="/backend/js/morris.js"></script>
<link rel="stylesheet" href="/backend/css/morris.css">
<!-- //charts -->
<!--skycons-icons-->
<script src="/backend/js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page" >
    <script>
            var theme = $.cookie('protonTheme') || 'default';
            $('body').removeClass (function (index, css) {
                return (css.match (/\btheme-\S+/g) || []).join(' ');
            });
            if (theme !== 'default') $('body').addClass(theme);
        </script>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="/dashboard">
                    <i class="fa fa-home nav_icon"></i>
                    <span class="nav-text">
                    Dashboard
                    </span>
                </a>
            </li>
             <li>
                <a href="/managenews">
                    <i class="fa fa-file-text-o nav_icon"></i>
                    <span class="nav-text">
                    News
                    </span>
                </a>
            </li>
             <li>
                <a href="/events">
                    <i class="fa fa-check-square-o nav_icon"></i>
                    <span class="nav-text">
                    Event
                    </span>
                </a>
            </li>
            <li>
                <a href="/managecalendar">
                    <i class="glyphicon glyphicon-calendar nav-icon"></i>
                    <span class="nav-text">
                    Calendar
                    </span>
                </a>
            </li>
            <li>
                <a href="/managegallery">
                    <i class="glyphicon glyphicon-picture nav-icon"></i>
                    <span class="nav-text">
                    Gallery
                    </span>
                </a>
            </li>
              <li>
                <a href="/managedocument">
                    <i class="glyphicon glyphicon-folder-open nav-icon"></i>
                    <span class="nav-text">
                    Document
                    </span>
                </a>
            </li>
            <li>
                <a href="/report">
                    <i class="fa fa-bar-chart nav_icon"></i>
                    <span class="nav-text">
                    Report
                    </span>
                </a>
            </li>
             <li>
                <a href="/messenger">
                    <i class="glyphicon glyphicon-comment nav-icon"></i>
                    <span class=" nav-text">
                    Messages
                    </span>
                </a>
            </li>
            <li>
                <a href="/manageuser">
                    <i class="glyphicon glyphicon-user nav-icon"></i>
                    <span class=" nav-text">
                    User
                    </span>
                </a>
            </li>
        </ul>


    </nav>
    <section class="wrapper scrollable">
        <nav class="user-menu">
            <a href="javascript:;" class="main-menu-access">
            <i class="icon-proton-logo"></i>
            <i class="icon-reorder"></i>
            </a>
        </nav>


        <section class="title-bar">
            <div class="logo">
                <h1><img src="/backend/images/LogoPSUActBackend.png" href="/dashboard" width="240" height="50" alt="Logo" /></h1>
            </div>
            <div class="w3l_search">
                <form action="#" method="post">
                    <input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="header-right">
                <div class="profile_details_left">
                    <div class="header-right-left">
                        <a class="btn btn-primary">{{ Auth::user()->name }}</a>
                    </div> 
                    <div class="profile_details">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">
                                        <span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                    <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
                                    <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </section>

        <div class="main-grid">
            @section('sidebar')
            @show
            @yield('content')

        </div>

        <!-- footer -->
        <div class="footer">
            <p>© 2017 Student Activity Management by Student Union</p>
        </div>
        <!-- //footer -->
    </section>
    <script src="/backend/js/bootstrap.js"></script>

</body>
</html>
