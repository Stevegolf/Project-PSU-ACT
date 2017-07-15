@extends('layouts.theme')

@section('title', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')
<div class="section secondary-section " >
    <div class="container">
      <div class=" title">
      <h1>Activity</h1>
    </div>
        <div id="single-project">
            <ul id="portfolio-grid" class="thumbnails row">
            @foreach($events as $event)
                <li class="span4 mix web">
                    <div class="thumbnail">
                       <img src="{{url('/images/events/type/'.$event->act_img)}}">
                        <a href="" class="more show_hide" rel="#slidingDiv">
                            <i class="icon-plus"></i>
                        </a>
                        <ul class="w3-ul">
                        <h3><b>{{$event->act_name}}</b></h3>
                            <li align="left"><i class="material-icons">event</i>เริ่มกิจกรรม:&nbsp;&nbsp;{{$event->dateTime_begin}}</li>
                            <li align="left"><i class="material-icons">home</i> สถานที่ :&nbsp;&nbsp;{{$event->act_locat}}</li>
                            </ul>
                        <div class="mask"></div>
                    </div>
                </li>
              @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
