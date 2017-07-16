@extends('layouts.theme')

@section('title', 'Page Title')

@section('sidebar')
@parent
@endsection

@section('content')
<div class="container-fluid">
  <h2></h2><br>
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">Panel with panel-default class</div><br>
      <div class="panel-body">
		<div class="container">
			<div class="col col-md-8">
			  <div class="panel-group">
	    		<div class="panel panel-primary">
	      			<div class="panel-body">
				      	<div class="row">
			              <div class="col-md-4 col-lg-3 " align="center">
			              <img src="{{url('/images/events/type/events-21.png')}}" class="img-rounded img-responsive"></div>
			              <div class=" col-md-9 col-lg-9 ">
			                <table class="table table-user-information">
			                  <tbody>
			                    <tr>
			                      <td>ชื่อกิจกรรม:</td>
			                      <td>11</td>
			                    </tr>
			                    <tr>
			                      <td>หน่วยงาน:</td>
			                      <td>
			                        11
			                      </td>
			                    </tr>
			                    <tr>
			                      <td>สถานที่จัดกิจกรรม:</td>
			                      <td>11</td>
			                    </tr>
			                    <tr>
			                      <td>เริ่มกิจกรรม (ว/ด/ป:เวลา):</td>
			                      <td>11</td>
			                    </tr>
			                    <tr>
			                      <td>สิ้นสุดกิจกรรม (ว/ด/ป:เวลา):</td>
			                      <td>11</td>
			                    </tr>
			                    <tr>
			                      <td>ภาคการศึกษา:</td>
			                      <td>11</td>
			                    </tr>
			                     <tr>
			                      <td>ปีการศึกษา:</td>
			                      <td>11</td>
			                    </tr>
			                    <tr>
			                      <td>ประเภทกิจกรรม:</td>
			                      <td>

			                       11
			                      </td>
			                    </tr>
			                    <tr>
			                      <td>จำนวนคนที่รับสมัคร:</td>
			                      <td>11</td>
			                    </tr>
			                    <tr>
			                      <td>จำนวนชั่วโมงที่ได้รับ:</td>
			                      <td>11</td>
			                    </tr>
			                    <tr>
			                      <td><b>ข้อมูลเพิ่มเติม:</b></td>
			                      <td></td>
			                    </tr>
			                  </tbody>
			                </table>
			                 <p>11</p>
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
						  <div>
						    <span class="minutes">100</span>
						    <div class="smallnumber">สมัคร</div>
						  </div>
						  <div>
						    <span class="seconds">100</span>
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
				  <div class="panel-group">
		    		<div class="panel panel-primary">
		      			<div class="panel-body">
						<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button_count&size=large&mobile_iframe=true&width=120&height=28&appId" width="120" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					    </div>
					 </div>
				  </div>
				</div>
				<div class="col col-md-8">
				  <div class="panel-group">
		    		<div class="panel panel-primary">
		      			<div class="panel-body">
						event
					    </div>
					</div>
				  </div>
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

@endsection
