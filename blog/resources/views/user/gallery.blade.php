@extends('layouts.theme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
    <div class="section secondary-section" id="about">
        <div class="triangle"></div>
        <div class="container">
            <div class="title">
                <h1>Gallery</h1>
            </div>
            <div class="row-fluid team">
                <div class="span4" id="first-person">
                    <div class="thumbnail">
                        <img src="images/gallery/Sribluegame.jpg" alt="team 1">
                        <h3>สีบลูเกมครั้งที่ 17</h3>
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
                            <h2>สีบลูเกมครั้งที่ 17</h2>
                            <p>การแข่งขันกี่ฬามหาวิทยาลัย สีบลูเกมครั้งที่17</p>
                        </div>
                    </div>
                </div>
                <div class="span4" id="second-person">
                    <div class="thumbnail">
                        <img src="images/gallery/krue.jpg" alt="team 1">
                        <h3>ไหว้ครู 2016</h3>
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
                            <h2>ไหว้ครู 2016</h2>
                            <p>มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตภูเก็ตจัดพิธีไหว้ึครู เนื่องในวันครู</p>
                        </div>
                    </div>
                </div>
                <div class="span4" id="third-person">
                    <div class="thumbnail">
                        <img src="images/gallery/5wit.jpg" alt="team 1">
                        <h3>การแข่งขันกีฬา5วิทยาเขต</h3>
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
                            <h2>การแข่งขันกีฬา5วิทยาเขต</h2>
                            <p>มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตภูเก็ตร่วมการแข่งขันกีฬา5วิทยาเขต ณ ม.อ. สุราษฏร์</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery section end -->
@endsection
