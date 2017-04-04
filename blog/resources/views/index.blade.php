<!DOCTYPE html>

<html>
<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Activity Management</title>
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
</head>

<body>
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a href="#" class="brand">
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
                        <li class="active"><a href="/index">Home</a></li>
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
                                <li><a href="/club" >Club</a></li>
                            </ul>
                        </li>
                        <li><a href="/doucment">Doucment</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <!-- End main navigation -->
            </div>
        </div>
    </div>


    <!-- Start home section -->
    <div id="home">
        <!-- Start cSlider -->
        <div id="da-slider" class="da-slider">
            <div class="triangle"></div>
            <!-- mask elemet use for masking background image -->
            <div class="mask"></div>
            <!-- All slides centred in container element -->
            <div class="container">
                <!-- Start first slide -->
                <div class="da-slide">
                    <h2 class="fittext2"></h2>
                    <h2 class="fittext2">Welcome to Student Activity Management</h2>
                    <h4>Easy for use to everyone</h4>
                    <p>Student Activity Management is about ...</p>
                    <a href="#" class="da-link button">Read more</a>
                    <div class="da-img">
                        <img src="images/Slider01.jpg" alt="image01" width="320">
                    </div>
                </div>
                <!-- End first slide -->
                <!-- Start second slide -->
                <div class="da-slide">
                    <h2>Green University by FOTEC Club</h2>
                    <h4>Easy for save world</h4>
                    <p>Green University will in 15 March 2017. It's about ... </p>
                    <a href="#" class="da-link button">Read more</a>
                    <div class="da-img">
                        <img src="images/Slider02.jpg" width="320" alt="image02">
                    </div>
                </div>
                <!-- End second slide -->
                <!-- Start third slide -->
                <div class="da-slide">
                    <h2>Southwest University of Political Science and Law (SWUPL)</h2>
                    <h4>Chinese is not far aways from you</h4>
                    <p>Chinese want 10 student for go to chinese. You can read more form student email.</p>
                    <a href="#" class="da-link button">Read more</a>
                    <div class="da-img">
                        <img src="images/Slider03.jpg" width="320" alt="image03">
                    </div>
                </div>
                <!-- Start third slide -->
                <!-- Start cSlide navigation arrows -->
                <div class="da-arrows">
                    <span class="da-arrows-prev"></span>
                    <span class="da-arrows-next"></span>
                </div>
                <!-- End cSlide navigation arrows -->
            </div>
        </div>
    </div>
    <!-- End home section -->

<!-- News section start -->
    <div class="section primary-section" id="about">
        <div class="triangle"></div>
        <div class="container">
            <div class="title">
                <h1>News</h1>
            </div>
            <div class="row-fluid team">
                <div class="span4" id="first-person">
                    <div class="thumbnail">
                        <img src="images/Portfolio01.png" alt="team 1">
                        <h3>John Doe</h3>
                        <div class="mask">
                            <h2>Copywriter</h2>
                            <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                        </div>
                    </div>
                </div>
                <div class="span4" id="second-person">
                    <div class="thumbnail">
                        <img src="images/Portfolio01.png" alt="team 1">
                        <h3>John Doe</h3>
                        <div class="mask">
                            <h2>Designer</h2>
                            <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                        </div>
                    </div>
                </div>
                <div class="span4" id="third-person">
                    <div class="thumbnail">
                        <img src="images/Portfolio01.png" alt="team 1">
                        <h3>John Doe</h3>
                        <div class="mask">
                            <h2>Photographer</h2>
                            <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- News section end -->


    <!-- Event section start -->
    <div class="section secondary-section" id="event">
        <div class="triangle"></div>
        <div class="container">
            <div class=" title">
                <h1>Event</h1>
            </div>
            <!-- Start details for portfolio project 1 -->
            <div id="single-project">
                <div id="slidingDiv" class="toggleDiv row-fluid single-project">
                    <div class="span6">
                        <img src="images/Portfolio01.png" alt="project 1" />
                    </div>
                    <div class="span6">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Webste for Some Client</h3>
                                <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Client</span>Some Client Name</div>
                                <div>
                                    <span>Date</span>July 2013</div>
                                <div>
                                    <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                <div>
                                    <span>Link</span>http://examplecomp.com</div>
                            </div>
                            <p>Believe in yourself! Have faith in your abilities! Without a humble but reasonable confidence in your own powers you cannot be successful or happy.</p>
                        </div>
                    </div>
                </div>
                <!-- End details for portfolio project 1 -->
                <!-- Start details for portfolio project 2 -->
                <div id="slidingDiv1" class="toggleDiv row-fluid single-project">
                    <div class="span6">
                        <img src="images/Portfolio02.png" alt="project 2">
                    </div>
                    <div class="span6">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Webste for Some Client</h3>
                                <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Client</span>Some Client Name</div>
                                <div>
                                    <span>Date</span>July 2013</div>
                                <div>
                                    <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                <div>
                                    <span>Link</span>http://examplecomp.com</div>
                            </div>
                            <p>Life is a song - sing it. Life is a game - play it. Life is a challenge - meet it. Life is a dream - realize it. Life is a sacrifice - offer it. Life is love - enjoy it.</p>
                        </div>
                    </div>
                </div>
                <!-- End details for portfolio project 2 -->
                <!-- Start details for portfolio project 3 -->
                <div id="slidingDiv2" class="toggleDiv row-fluid single-project">
                    <div class="span6">
                        <img src="images/Portfolio03.png" alt="project 3">
                    </div>
                    <div class="span6">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Webste for Some Client</h3>
                                <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Client</span>Some Client Name</div>
                                <div>
                                    <span>Date</span>July 2013</div>
                                <div>
                                    <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                <div>
                                    <span>Link</span>http://examplecomp.com</div>
                            </div>
                            <p>How far you go in life depends on your being tender with the young, compassionate with the aged, sympathetic with the striving and tolerant of the weak and strong. Because someday in your life you will have been all of these.</p>
                        </div>
                    </div>
                </div>
                <!-- End details for portfolio project 3 -->
                <!-- Start details for portfolio project 4 -->
                <div id="slidingDiv3" class="toggleDiv row-fluid single-project">
                    <div class="span6">
                        <img src="images/Portfolio04.png" alt="project 4">
                    </div>
                    <div class="span6">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Project for Some Client</h3>
                                <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Client</span>Some Client Name</div>
                                <div>
                                    <span>Date</span>July 2013</div>
                                <div>
                                    <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                <div>
                                    <span>Link</span>http://examplecomp.com</div>
                            </div>
                            <p>Life's but a walking shadow, a poor player, that struts and frets his hour upon the stage, and then is heard no more; it is a tale told by an idiot, full of sound and fury, signifying nothing.</p>
                        </div>
                    </div>
                </div>
                <!-- End details for portfolio project 4 -->
                <!-- Start details for portfolio project 5 -->
                <div id="slidingDiv4" class="toggleDiv row-fluid single-project">
                    <div class="span6">
                        <img src="images/Portfolio05.png" alt="project 5">
                    </div>
                    <div class="span6">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Webste for Some Client</h3>
                                <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Client</span>Some Client Name</div>
                                <div>
                                    <span>Date</span>July 2013</div>
                                <div>
                                    <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                <div>
                                    <span>Link</span>http://examplecomp.com</div>
                            </div>
                            <p>We need to give each other the space to grow, to be ourselves, to exercise our diversity. We need to give each other space so that we may both give and receive such beautiful things as ideas, openness, dignity, joy, healing,
                                and inclusion.</p>
                        </div>
                    </div>
                </div>
                <!-- End details for portfolio project 5 -->
                <!-- Start details for portfolio project 6 -->
                <div id="slidingDiv5" class="toggleDiv row-fluid single-project">
                    <div class="span6">
                        <img src="images/Portfolio06.png" alt="project 6">
                    </div>
                    <div class="span6">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Webste for Some Client</h3>
                                <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Client</span>Some Client Name</div>
                                <div>
                                    <span>Date</span>July 2013</div>
                                <div>
                                    <span>Skills</span>HTML5, CSS3, JavaScript</div>
                                <div>
                                    <span>Link</span>http://examplecomp.com</div>
                            </div>
                            <p>I went to the woods because I wished to live deliberately, to front only the essential facts of life, and see if I could not learn what it had to teach, and not, when I came to die, discover that I had not lived.</p>
                        </div>
                    </div>
                </div>
                <!-- End details for portfolio project 6 -->
                <ul id="portfolio-grid" class="thumbnails row">
                    <li class="span4 mix web">
                        <div class="thumbnail">
                            <img src="images/Portfolio01.png" alt="project 1">
                            <a href="#single-project" class="more show_hide" rel="#slidingDiv">
                                <i class="icon-plus"></i>
                            </a>
                            <h3>Thumbnail label</h3>
                            <p>Thumbnail caption...</p>
                            <div class="mask"></div>
                        </div>
                    </li>
                    <li class="span4 mix photo">
                        <div class="thumbnail">
                            <img src="images/Portfolio02.png" alt="project 2">
                            <a href="#single-project" class="show_hide more" rel="#slidingDiv1">
                                <i class="icon-plus"></i>
                            </a>
                            <h3>Thumbnail label</h3>
                            <p>Thumbnail caption...</p>
                            <div class="mask"></div>
                        </div>
                    </li>
                    <li class="span4 mix identity">
                        <div class="thumbnail">
                            <img src="images/Portfolio03.png" alt="project 3">
                            <a href="#single-project" class="more show_hide" rel="#slidingDiv2">
                                <i class="icon-plus"></i>
                            </a>
                            <h3>Thumbnail label</h3>
                            <p>Thumbnail caption...</p>
                            <div class="mask"></div>
                        </div>
                    </li>
                    <li class="span4 mix web">
                        <div class="thumbnail">
                            <img src="images/Portfolio04.png" alt="project 4">
                            <a href="#single-project" class="show_hide more" rel="#slidingDiv3">
                                <i class="icon-plus"></i>
                            </a>
                            <h3>Thumbnail label</h3>
                            <p>Thumbnail caption...</p>
                            <div class="mask"></div>
                        </div>
                    </li>
                    <li class="span4 mix photo">
                        <div class="thumbnail">
                            <img src="images/Portfolio05.png" alt="project 5">
                            <a href="#single-project" class="show_hide more" rel="#slidingDiv4">
                                <i class="icon-plus"></i>
                            </a>
                            <h3>Thumbnail label</h3>
                            <p>Thumbnail caption...</p>
                            <div class="mask"></div>
                        </div>
                    </li>
                    <li class="span4 mix identity">
                        <div class="thumbnail">
                            <img src="images/Portfolio06.png" alt="project 6">
                            <a href="#single-project" class="show_hide more" rel="#slidingDiv5">
                                <i class="icon-plus"></i>
                            </a>
                            <h3>Thumbnail label</h3>
                            <p>Thumbnail caption...</p>
                            <div class="mask"></div>
                        </div>
                    </li>
                    <div class="container centered">
                        <a href="#" class="button">More..</a>
                    </div>

                </ul>
            </div>
        </div>
    </div>
    <!-- Event section end -->

    <!-- Gallery section start -->
    <div class="section primary-section" id="about">
        <div class="triangle"></div>
        <div class="container">
            <div class="title">
                <h1>Gallery</h1>
                <p>Photo Gallery of activity this here...</p>
            </div>
            <div class="row-fluid team">
                <div class="span4" id="first-person">
                    <div class="thumbnail">
                        <img src="images/Team1.png" alt="team 1">
                        <h3>John Doe</h3>
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="mask">
                            <h2>Copywriter</h2>
                            <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                        </div>
                    </div>
                </div>
                <div class="span4" id="second-person">
                    <div class="thumbnail">
                        <img src="images/Team2.png" alt="team 1">
                        <h3>John Doe</h3>
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="mask">
                            <h2>Designer</h2>
                            <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                        </div>
                    </div>
                </div>
                <div class="span4" id="third-person">
                    <div class="thumbnail">
                        <img src="images/Team3.png" alt="team 1">
                        <h3>John Doe</h3>
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="mask">
                            <h2>Photographer</h2>
                            <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery section end -->
    <!-- Related system section start -->
    <div class="section third-section">
        <div class="container centered">
            <div class="sub-section">
                <div class="title clearfix">
                    <div class="pull-left">
                        <h3>System Related</h3>
                    </div>
                    <ul class="client-nav pull-right">
                        <li id="client-prev"></li>
                        <li id="client-next"></li>
                    </ul>
                </div>
                <ul class="row client-slider" id="clint-slider">
                    <li>
                        <a href="">
                            <img src="images/clients/ClientLogo01.png" alt="client logo 1">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/clients/ClientLogo02.png" alt="client logo 2">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/clients/ClientLogo03.png" alt="client logo 3">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/clients/ClientLogo04.png" alt="client logo 4">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/clients/ClientLogo05.png" alt="client logo 5">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/clients/ClientLogo02.png" alt="client logo 6">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="images/clients/ClientLogo04.png" alt="client logo 7">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>    
    <!-- Related system section end -->

    <!-- Contact section start -->
    <div id="contact" class="section secondary-section">
        <div class="container">
            <div class="title">
                <p >กองกิจการนักศึกษา มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตภูเก็ต </p>
                <p>80 หมู่ 1 ถ.วิชิตสงคราม อ.กะทู้ จ.ภูเก็ต 83120</p>
                <p>Phone: 0-7627-6061</p>
                <p>Fax: 0-7627-6508</p>
                <p >Student_Development@phuket.psu.ac.th</p>
            </div>
        </div>
    </div>
    <!-- Contact section  -->
    <!-- Footer section start -->
    <div class="footer">
        <p>&copy; กองกิจจการนักศึกษา <a href="http://www.phuket.psu.ac.th/index1.php">มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตภูเก็ต</a>
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
