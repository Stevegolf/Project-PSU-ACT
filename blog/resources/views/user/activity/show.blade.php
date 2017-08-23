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
			                      <td><i class="material-icons">account_balance</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หน่วยงาน:</td>
			                      <td>{{$events->department->dep_name}}</td>
			                    </tr>
			                    <tr class="info">
			                      <td><i class="material-icons">add_location</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สถานที่จัดกิจกรรม:</td>
			                      <td>{{$events->act_locat}}</td>
			                    </tr>
			                    <tr>
			                      <td><i class="material-icons">access_time</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เริ่มกิจกรรม (ว/ด/ป:เวลา):</td>
			                      <td>{{$events->dateTime_begin}}</td>
			                    </tr>
			                    <tr>
			                      <td><i class="material-icons">access_time</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สิ้นสุดกิจกรรม (ว/ด/ป:เวลา):</td>
			                      <td>{{$events->dateTime_end}}</td>
			                    </tr>
			                    <tr class="info">
			                      <td><i class="material-icons">event_available</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ภาคการศึกษา:</td>
			                      <td>{{$events->act_sem}}</td>
			                    </tr>
			                     <tr class="info">
			                      <td><i class="material-icons">insert_invitation</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปีการศึกษา:</td>
			                      <td>{{$events->act_year}}</td>
			                    </tr>
			                    <tr>
			                      <td><i class="material-icons">loyalty</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ประเภทกิจกรรม:</td>
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
			                      <td><i class="material-icons">access_alarms</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปิดรับสมัคร (ว/ด/ป:เวลา):</td>
								<td id="cat">{{$events->dateTime_close}}</td>
			                    </tr>
			                    <tr class="info">
			                      <td><i class="material-icons">person</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวนคนที่รับสมัคร:</td>
			                      <td>{{$events->act_req}}</td>
			                    </tr>
			                    <tr class="info">
			                      <td><i class="material-icons">timer</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวนชั่วโมงที่ได้รับ:</td>
			                      <td>{{$events->act_hour}}</td>
			                    </tr>
			                    <tr>
			                      <td><b><i class="material-icons">event_note</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลเพิ่มเติม:</b></td>
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
						<center><p id="demo"></p></center>
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
						    <span class="number2">{{$events->act_req}}</span>
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
				
				</div>
		      </div>
		    </div>
		  </div>
		</div>

<script>
var date = "{{$events->dateTime_close}}";
var countDownDate = new Date(date).getTime();
console.log(countDownDate)
var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("demo").innerHTML = 
    "<div id='clockdiv'>"+
    	"<div>"+
    		"<center><span class='days'></span></center>"+ days +
    			 "<div class='smalltext'>Days</div> " + 
        "</div>" + 
    	"&nbsp;<div>"+
    		"<center><span class='hours'></span></center>"+ hours +
    			 "<div class='smalltext'>Hours</div> " + 
        "</div>" + 
    	"&nbsp;<div>"+
    		"<center><span class='minutes'></span></center>"+ minutes +
    			 "<div class='smalltext'>Minutes</div> " + 
        "</div>" + 
         "&nbsp;<div>"+
    		"<center><span class='seconds'></span></center>"+ seconds +
    			 "<div class='smalltext'>Seconds</div> " + 
        "</div>" + 
    "</div>";

    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "<h2 style='color: #d9534f;'>Time out to register!</h2>";
    }
}, 1000);
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
