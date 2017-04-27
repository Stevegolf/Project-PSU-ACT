@extends('layouts.theme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<!-- News section start -->
    <div class="section secondary-section" id="news">
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
@endsection

