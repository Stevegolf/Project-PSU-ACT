@extends('layouts.theme')

@section('title', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')
<div class="container-fluid">
  <h2></h2><br>
  <div class="panel-group" style=" box-shadow:3px 3px 2px #888888;">
    <div class="panel panel-primary">
      <div class="panel-heading"><h5><b>{{$events->act_name}}</b></h5></div><br>
      <div class="panel-body">
		<div class="container">
			<div class="col col-md-8">
			  <div class="panel-group">
	    		<div class="panel panel-primary">
	      			<div class="panel-body">
				      	<div class="row">
			              <div class="col-md-4 col-lg-3 " align="center">
			              <img src="{{url('/images/events/type/'.$events->act_img)}}" class="img-rounded img-responsive"> </div>
			              <div class=" col-md-9 col-lg-9 ">
			                <table class="table table-user-information">
			                  <tbody>
			                    <tr class="info">
			                      <td><a href="#" ><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;หน่วยงาน:</td>
			                      <td>{{$events->department->dep_name}}</td>
			                    </tr>
			                    <tr class="info">
			                      <td><a href="#" ><span class="glyphicon glyphicon-home"></span></a>&nbsp;&nbsp;สถานที่จัดกิจกรรม:</td>
			                      <td>{{$events->act_locat}}</td>
			                    </tr>
			                    <tr>
			                      <td>เริ่มกิจกรรม (ว/ด/ป:เวลา):</td>
			                      <td>{{$events->dateTime_begin}}</td>
			                    </tr>
			                    <tr>
			                      <td>สิ้นสุดกิจกรรม (ว/ด/ป:เวลา):</td>
			                      <td>{{$events->dateTime_end}}</td>
			                    </tr>
			                    <tr class="info">
			                      <td>ภาคการศึกษา:</td>
			                      <td>{{$events->act_sem}}</td>
			                    </tr>
			                     <tr class="info">
			                      <td>ปีการศึกษา:</td>
			                      <td>{{$events->act_year}}</td>
			                    </tr>
			                    <tr>
			                      <td>ประเภทกิจกรรม:</td>
			                      <td>
			                      	 @foreach($events->types as $ctype )
	                          			<span class="label label-info">
	                           			 {{$ctype->nametype}}
	                          			</span>
	                          			&nbsp;
                        			@endforeach
			                      </td>
			                    </tr>
			                     <tr>
			                      <td>ปิดรับสมัคร (ว/ด/ป:เวลา):</td>
			                      <td>{{$events->dateTime_close}}</td>
			                    </tr>
			                    <tr class="info">
			                      <td>จำนวนคนที่รับสมัคร:</td>
			                      <td>{{$events->act_req}}</td>
			                    </tr>
			                    <tr class="info">
			                      <td>จำนวนชั่วโมงที่ได้รับ:</td>
			                      <td>{{$events->act_hour}}</td>
			                    </tr>
			                    <tr>
			                      <td><b>ข้อมูลเพิ่มเติม:</b></td>
			                      <td></td>
			                    </tr>
			                  </tbody>
			                </table>
			                <p>{{$events->act_note}}</p>
			              </div>
			            </div>
				      </div>
				    </div>
				  </div>
				</div>
				<div class="col col-md-4">
				  <div class="panel-group">
		    		<div class="panel panel-primary">
		      			<div class="panel-body">

						<div id="clockdiv">
						  <div>
						    <span class="days"></span>
						    <div class="smalltext">Days</div>
						  </div>
						  <div>
						    <span class="hours"></span>
						    <div class="smalltext">Hours</div>
						  </div>
						  <div>
						    <span class="minutes"></span>
						    <div class="smalltext">Minutes</div>
						  </div>
						  <div>
						    <span class="seconds"></span>
						    <div class="smalltext">Seconds</div>
						  </div>
						</div>
				      </div>
				    </div>
				  </div>
				</div>
				<div class="col col-md-4">
				  <div class="panel-group ">
		    		<div class="panel panel-primary">
		      			<div class="panel-body">

			            <div class="countdiv">
						  <div style="background-color: #5cb85c">
						    <span class="number">100</span>
						    <div class="smallnumber">สมัครแล้ว</div>
						  </div>
						  <div style="background-color: #d9534f">
						    <span class="number2">100</span>
						    <div class="smallnumber">จำนวนที่รับ</div>
						  </div>
						</div><br>
						<div class="countdiv">
							<button type="button" class="btn btn-success  "><h6>สมัครเข้าร่วมกิจกรรม</h6></button>
						</div>
				      </div>
				    </div>
				  </div>
				</div>
				<div class="col col-md-4">
				  <div class="panel-group">
		    		<div class="panel panel-primary">
		      			<div class="panel-body">
		      			สรุปข้อมูล
				      </div>
				    </div>
				  </div>
				</div>
				<div class="col col-md-8">
				<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="3"></div>
				</div>
				</div>
		      </div>
		    </div>
		  </div>
		</div>
		<script>
			  function getTimeRemaining(endtime) {
			  var t = Date.parse(endtime) - Date.parse(new Date());
			  var seconds = Math.floor((t / 1000) % 60);
			  var minutes = Math.floor((t / 1000 / 60) % 60);
			  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
			  var days = Math.floor(t / (1000 * 60 * 60 * 24));
			  return {
			    'total': t,
			    'days': days,
			    'hours': hours,
			    'minutes': minutes,
			    'seconds': seconds
			  };
			}

			function initializeClock(id, endtime) {
			  var clock = document.getElementById(id);
			  var daysSpan = clock.querySelector('.days');
			  var hoursSpan = clock.querySelector('.hours');
			  var minutesSpan = clock.querySelector('.minutes');
			  var secondsSpan = clock.querySelector('.seconds');

			  function updateClock() {
			    var t = getTimeRemaining(endtime);

			    daysSpan.innerHTML = t.days;
			    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
			    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
			    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

			    if (t.total <= 0) {
			      clearInterval(timeinterval);
			    }
			  }

			  updateClock();
			  var timeinterval = setInterval(updateClock, 1000);
			}

			var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
			initializeClock('clockdiv', deadline);
		</script>

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.9";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>




@endsection
