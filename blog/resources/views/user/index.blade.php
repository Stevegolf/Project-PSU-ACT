@extends('layouts.theme')

@section('title', 'Page Title')

@section('sidebar')
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
                        <img src="images/News01.png" alt="team 1">
                        <h3>PSU Walk Rally Episode 1</h3>
                        <div class="mask">
                            <h2>PSU Walk Rally Episode 1</h2>
                            <p>เชิญนักศึกษาร่วมโครงการร่วมแข่งขัน PSU Walk Rally Episode 1 : Penang Survival</p>
                        </div>
                    </div>
                </div>
                <div class="span4" id="second-person">
                    <div class="thumbnail">
                        <img src="images/News02.png" alt="team 1">
                        <h3>ขอเชิญร่วมประกวดภาพถ่าย</h3>
                        <div class="mask">
                            <h2>ขอเชิญร่วมประกวดภาพถ่าย</h2>
                            <p>ขอเชิญร่วมประกวดภาพถ่าย พระราชบิดาในมุมมองของฉัน</p>
                        </div>
                    </div>
                </div>
                <div class="span4" id="third-person">
                    <div class="thumbnail">
                        <img src="images/News03.png" alt="team 1">
                        <h3>ขอเชิญร่วมบริจาคน้ำมันพืชใช้แล้ว</h3>
                        <div class="mask">
                            <h2>ขอเชิญร่วมบริจาคน้ำมันพืชใช้แล้ว</h2>
                            <p>ขอเชิญร่วมบริจาคน้ำมันพืชใช้แล้ว เพื่อผลิตน้ำมันไบโอดีเซลรายได้ช่วยเหลือผู้ป่วยยากไร้หัวใจและมะเร็ง</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- News section end -->


    <!-- Portfolio section start -->
        <div class="section secondary-section " id="portfolio">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                    <h1>Event</h1>
                </div>
                <!-- Start details for portfolio project 1 -->
                <div id="single-project">
                    <div id="slidingDiv" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/event/Bigass.jpg" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>มาแล้ววววว!!! เตรียมพบกับ BIG ASS ใน 'FRESHY NIGHT PARTY!'</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                    <span>หน่วยงาน :</span>องค์การบริหาร องค์การนักศึกษา</div>
                                <div>
                                    <span>สถานที่จัด :</span>สนามบาสหลังคาคลุม</div>
                                <div>
                                    <span>วันที่ :</span>28 ตุลาคม 2559 </div>
                                <div>
                                    <span>ช่วงเวลา :</span>16.00 - 22.00 น.</div>
                                <div>
                                    <span>จำนวนรับสมัคร :</span>1500 คน</div>
                                <div>
                                    <span>วันสิ้นสุดรับสมัคร :</span>27 ตุลาคม 2559</div>
                                <div>
                                    <span>ประเภทกิจกรรม :</span>ด้านภูมิในสถาบัน</div>
                                <div>
                                    <span>จำนวนชั่วโมง :</span>6 ชั่วโมง</div>
                            </div>
                            <p>หมายเหตุ: สามารถเข้าร่วมได้เฉพาะนักศึกษามหาวิทยาลัยสงขลานครินทร์ วิทยาเขตภูเก็ตเท่านั้น</p>
                        </div>
                    </div>
                    <a href="#" class="white-text da-link button">Regist Online</a>
                    </div>
                    <!-- End details for portfolio project 1 -->
                    <!-- Start details for portfolio project 2 -->
                    <div id="slidingDiv1" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/event/Club.jpg" alt="project 2">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>เปิดโลกกิจกรรม 'New Gen New Skill'</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                    <span>หน่วยงาน :</span>องค์การบริหาร องค์การนักศึกษา</div>
                                <div>
                                    <span>สถานที่จัด :</span>สนามบาสหลังคาคลุม</div>
                                <div>
                                    <span>วันที่ :</span>24 สิงหาคม 2559 </div>
                                <div>
                                    <span>ช่วงเวลา :</span>16.00 - 22.00 น.</div>
                                <div>
                                    <span>จำนวนรับสมัคร :</span>900 คน</div>
                                <div>
                                    <span>วันสิ้นสุดรับสมัคร :</span>22 สิงหาคม 2559</div>
                                <div>
                                    <span>ประเภทกิจกรรม :</span>ด้านภูมิในสถาบัน และ ด้านวิชาการ</div>
                                <div>
                                    <span>จำนวนชั่วโมง :</span>6 ชั่วโมง</div>
                            </div>
                            <p>หมายเหตุ: เฉพาะนักศึกษาชั้นปีที่1 เท่านั้น</p>
                        </div>
                    </div>
                    <a href="#" class="white-text da-link button">Regist Online</a>
                    </div>
                    <!-- End details for portfolio project 2 -->
                    <!-- Start details for portfolio project 3 -->
                    <div id="slidingDiv2" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/event/NoSmoking.jpg" alt="project 3">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>ขอเชิญเข้าร่วมโครงการ 3 ล้าน 3 ปี เลิกสูบบุหรี่ทั่วไทย</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                <div>
                                    <span>หน่วยงาน :</span>สโมสรนักศึกษา คณะเทคโนโลยีและสิ่งแวดล้อม</div>
                                <div>
                                    <span>สถานที่จัด :</span>อาคารเรียนรวมและศูนย์การเรียนรู้ ปฎิบัติการกลาง(อาคาร 6 ) ห้อง 6310 </div>
                                <div>
                                    <span>วันที่ :</span>29 มีนาคม 60 </div>
                                <div>
                                    <span>ช่วงเวลา :</span>13.30-16.00 น.</div>
                                <div>
                                    <span>จำนวนรับสมัคร :</span>200 คน</div>
                                <div>
                                    <span>วันสิ้นสุดรับสมัคร :</span>25 มีนาคม 60</div>
                                <div>
                                    <span>ประเภทกิจกรรม :</span>ด้านวิชาการ</div>
                                <div>
                                    <span>จำนวนชั่วโมง :</span>3 ชั่วโมง</div>
                            </div>
                            <p>หมายเหตุ: </p>
                        </div>
                    </div>
                    <a href="#" class="white-text da-link button">Regist Online</a>
                    </div>
                    <!-- End details for portfolio project 3 -->
                    <!-- Start details for portfolio project 4 -->
                    <div id="slidingDiv3" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/event/Run.jpg" alt="project 4">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>วิ่งไปทู้ Run to Kathu</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                    <span>หน่วยงาน :</span>องค์การบริหาร องค์การนักศึกษา</div>
                                <div>
                                    <span>สถานที่จัด :</span>วัดกะทู้</div>
                                <div>
                                    <span>วันที่ :</span>24 กันยายน 2559 </div>
                                <div>
                                    <span>ช่วงเวลา :</span>06.00-12.00 น.</div>
                                <div>
                                    <span>จำนวนรับสมัคร :</span>1000 คน</div>
                                <div>
                                    <span>วันสิ้นสุดรับสมัคร :</span>20 กันยายน 2559</div>
                                <div>
                                    <span>ประเภทกิจกรรม :</span>ด้านสุขภาพ</div>
                                <div>
                                    <span>จำนวนชั่วโมง :</span>6 ชั่วโมง</div>
                            </div>
                            <p>หมายเหตุ: </p>
                        </div>
                    </div>
                    <a href="#" class="white-text da-link button">Regist Online</a>
                    </div>
                    <!-- End details for portfolio project 4 -->
                    <!-- Start details for portfolio project 5 -->
                    <div id="slidingDiv4" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/event/SriBlue.jpg" alt="project 5">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>SriBlue Games 17th สีบูลเกมส์ ครั้งที่ 17</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                    <span>หน่วยงาน :</span>องค์การบริหาร องค์การนักศึกษา </div>
                                <div>
                                    <span>สถานที่จัด :</span>มหาวิทยาลัยสงขลานครินทร์ วิทยาเบตภูเก็ต</div>
                                <div>
                                    <span>วันที่ :</span>12 มกราคม - 12 กุมภาพันธ์ 60 </div>
                                <div>
                                    <span>ช่วงเวลา :</span>16.30-22.00 น.</div>
                                <div>
                                    <span>จำนวนรับสมัคร :</span>ไม่จำกัดจำนวนคน</div>
                                <div>
                                    <span>วันสิ้นสุดรับสมัคร :</span>10 มกราคม 60</div>
                                <div>
                                    <span>ประเภทกิจกรรม :</span>ด้านสุขภาพ และทักษะทางสังคม</div>
                                <div>
                                    <span>จำนวนชั่วโมง :</span>60 ชั่วโมง</div>
                            </div>
                            <p>หมายเหตุ: </p>
                        </div>
                    </div>
                    <a href="#" class="white-text da-link button">Regist Online</a>
                    </div>
                    <!-- End details for portfolio project 5 -->
                    <!-- Start details for portfolio project 6 -->
                    <div id="slidingDiv5" class="toggleDiv row-fluid single-project">
                        <div class="span6">
<<<<<<< HEAD
                            <img src="images/Portfolio06.png" alt="project 6">
=======
                            <img src="images/event/Close.jpg" alt="project 6">
>>>>>>> origin/master
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
<<<<<<< HEAD
                                    <h3>Webste for Some Client</h3>
=======
                                    <h3>เชิญชวนเข้าร่วมพิธีปิดกีฬาสีบูลเกมส์ ครั้งที่ 17</h3>
>>>>>>> origin/master
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
<<<<<<< HEAD
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

=======
                                    <span>หน่วยงาน :</span>องค์การบริหาร องค์การนักศึกษา</div>
                                <div>
                                    <span>สถานที่จัด :</span>สนามบาสหลังคาคลุม</div>
                                <div>
                                    <span>วันที่ :</span>12 กุภาพันธ์ 60 </div>
                                <div>
                                    <span>ช่วงเวลา :</span>09.30-15.00 น.</div>
                                <div>
                                    <span>จำนวนรับสมัคร :</span>49 คน</div>
                                <div>
                                    <span>วันสิ้นสุดรับสมัคร :</span>10 กุมภาพันธ์ 60</div>
                                <div>
                                    <span>ประเภทกิจกรรม :</span>ด้านทักษะสังคม</div>
                                <div>
                                    <span>จำนวนชั่วโมง :</span>3 ชั่วโมง</div>
                            </div>
                            <p>หมายเหตุ: </p>
                        </div>
                    </div>
                    <a href="#" class="white-text da-link button">Regist Online</a>
                    </div>
                    <!-- End details for portfolio project 6 -->
                    
                    
>>>>>>> origin/master
                    <ul id="portfolio-grid" class="thumbnails row">
                        <li class="span4">
                            <div class="thumbnail">
                                <img src="images/event/Bigass.jpg" alt="project 1">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>มาแล้ววววว!!! เตรียมพบกับ BIG ASS ใน 'FRESHY NIGHT PARTY!'</h3>
                                <p>ในวันที่ 28 ตุลาคม 2559 นี้</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail">
                                <img src="images/event/Club.jpg" alt="project 2">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv1">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>เปิดโลกกิจกรรม 'New Gen New Skill'</h3>
                                <p>ในวันที่ 24 สิงหาคม 2559 นี้เจอกัน!!</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix identity">
                            <div class="thumbnail">
                                <img src="images/event/NoSmoking.jpg" alt="project 3">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv2">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>ขอเชิญเข้าร่วมโครงการ 3 ล้าน 3 ปี เลิกสูบบุหรี่ทั่วไทย</h3>
                                <p>ในวันที่ 29 มีนาคม 2560</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="images/event/Run.jpg" alt="project 4">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv3">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>วิ่งไปทู้ Run to Kathu</h3>
                                <p>เริ่มวิ่งกันที่ ม.อ. ปลายทางวัดกะทู้ จ้าา</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/event/SriBlue.jpg" alt="project 5">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv4">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>SriBlue Games 17th สีบูลเกมส์ ครั้งที่ 17</h3>
                                <p>มาร่วมเชียร์นักกีฬากันได้เล้ยยย</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix identity">
                            <div class="thumbnail">
                                <img src="images/event/Close.jpg" alt="project 6">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv5">
                                    <i class="icon-plus"></i>
                                </a>
<<<<<<< HEAD
                                <h3>Thumbnail label</h3>
                                <p>Thumbnail caption...</p>
                                <div class="mask"></div>
                            </div>
                        </li>

=======
                                <h3>เชิญชวนเข้าร่วมพิธีปิดกีฬาสีบูลเกมส์</h3>
                                <p>แล้วมาดูวันว่าปีนี้ใครจะได้ครอง The Bast of Sriblue Game 17th</p>
                                <div class="mask"></div>
                            </div>
                        </li>
                                       
>>>>>>> origin/master
                    </ul>
                </div>
            </div>
        </div>
        <!-- Portfolio section end -->

    <!-- Gallery section start -->
    <div class="section primary-section" id="about">
        <div class="triangle"></div>
        <div class="container">
            <div class="title">
                <h1>Gallery</h1>
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
                <p >องค์การบริหาร องค์การนักศึกษา มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตภูเก็ต </p>
                <p>80 หมู่ 1 ถ.วิชิตสงคราม อ.กะทู้ จ.ภูเก็ต 83120</p>
                <p>Phone: 0-7627-1234</p>
                <p >student_union@gmail.com</p>
            </div>
        </div>
    </div>
    <!-- Contact section  -->
    @parent
@endsection

@section('content')

@endsection
