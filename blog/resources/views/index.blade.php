@extends('layouts.theme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection
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
@section('content')


@endsection
