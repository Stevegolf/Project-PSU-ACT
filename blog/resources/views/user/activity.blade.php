ุ@extends('layouts.theme')
<!-- test test -->
@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<!-- Event  section start -->
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
                         <a href="#" class="white-text da-link button">Register</a>
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
                                    <h3>เปิดโลกกิจกรรม 'New Gen New Skill</h3>
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
                                < <p>หมายเหตุ: เฉพาะนักศึกษาชั้นปีที่1 เท่านั้น</p>
                            </div>
                        </div>
                         <a href="#" class="white-text da-link button">Register</a>
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
                         <a href="#" class="white-text da-link button">Register</a>
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
                           <a href="#" class="white-text da-link button">Register</a>
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
                       <a href="#" class="white-text da-link button">Register</a>
                    </div>
                    <!-- End details for portfolio project 5 -->
                    <!-- Start details for portfolio project 6 -->
                    <div id="slidingDiv5" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="images/event/Sribluegame.jpg" alt="project 6">
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>พิธีเปิดการแข่งขันกีฬาสีบลูเกมส์ครั้งที่ 17</h3>
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
                         <a href="#" class="white-text da-link button">Register</a>
                        </div>

                    <!-- End details for portfolio project 6 -->
                    <ul id="portfolio-grid" class="thumbnails row">
                        <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="images/event/Bigass.jpg" alt="project 1">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>FRESHY NIGHT PARTY!</h3>
                                <p></p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix photo">
                            <div class="thumbnail">
                                <img src="images/event/Club.jpg" alt="project 2">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv1">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>เปิดโลกกิจกรรม 'New Gen New Skill</h3>
                                <p></p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix identity">
                            <div class="thumbnail">
                                <img src="images/event/NoSmoking.jpg" alt="project 3">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv2">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>โครงการ 3 ล้าน 3 ปี เลิกสูบบุหรี่ทั่วไทย</h3>
                                <p></p>
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
                                <p></p>
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
                                <p></p>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <li class="span4 mix identity">
                            <div class="thumbnail">
                                <img src="images/event/Sribluegame.jpg" alt="project 6">
                                <a href="#single-project" class="show_hide more" rel="#slidingDiv5">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>Open Sriblue Game #17</h3>
                                <p></p>
                                <div class="mask"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Event section end -->


@endsection
