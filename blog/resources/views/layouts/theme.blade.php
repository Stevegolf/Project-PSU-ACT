<!DOCTYPE html>

<html>
<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Activity Management- @yield('title')</title>
    <!-- Load Roboto font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- Load css styles -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/pluton.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <style>
        .white-text{
            color: #fff !important; 
            border-color: #fff !important;
            margin: 10px;

        }
    </style>
</head>

<body>
<div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a href="/index" class="brand">
                     <img src="images/LogoPSUAct.png" href="/index" width="120" height="40" alt="Logo" />
                    <!-- This is website logo -->
                </a>
                <!-- Navigation button, visible on small resolution -->
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                <!-- Main navigation -->
                <div class="nav-collapse collapse pull-right">
                        <ul class="nav navbar-nav linkEffects linkHoverEffect_12">
                        <li><a href="/index">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown"><span data-hover=""><span>Transcript</span></span> <b class="caret"></b></a>
                            <ul class="dropdown-menu agileinfo">
                                <li><a href="/event">Registration Online</a></li>
                                <li><a href="/calendar">Calendar</a></li>
                                <li><a href="https://student.psu.ac.th/TS234/" target="_blank">Check Transcript</a></li>
                            </ul>
                        </li>
                        <li><a href="/news">News</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown"><span data-hover=""><span>Student Union</span></span> <b class="caret"></b></a>
                            <ul class="dropdown-menu agileinfo">
                                <li><a href="/studentunion">Student Union</a></li>
                                <li><a href="/studentcouncil">Student Council</a></li>
                                <li><a href="/club">Club</a></li>
                            </ul>
                        </li>
                        <li><a href="/document">Document</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <!-- End main navigation -->
            </div>
        </div>
    </div>
    @section('sidebar')
    @show


    @yield('content')
    <!-- Footer section start -->
    <div class="footer">
        <p>&copy; Student Union | Prince of Songkla University, Phuket Campus</a>
    </div>
    <!-- Footer section end -->
    <!-- ScrollUp button start -->
    <div class="scrollup">
        <a href="#">
            <i class="icon-up-open"></i>
        </a>
    </div>
    <!-- ScrollUp button end -->
    <!-- Include javascript -->
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="js/jquery.cslider.js"></script>
    <script type="text/javascript" src="js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="js/jquery.inview.js"></script>
    <!-- Load google maps api and call initializeMap function defined in app.js -->
    <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
    <!-- css3-mediaqueries.js for IE8 or older -->
    <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
