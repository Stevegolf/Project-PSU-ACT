@extends('layouts.adminTheme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="forms">
  <div class=" form-grids form-grids-right">
    <div class="widget-shadow " data-example-id="basic-forms">
    <div class="row">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3>{{$event->act_name}}</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
              <div class=" col-md-9 col-lg-9 ">
                <table class="table table-user-information">
                  <tbody>
                    <tr>
                      <td>ชื่อกิจกรรม:</td>
                      <td>{{$event->act_name}}</td>
                    </tr>
                    <tr>
                      <td>หน่วยงาน:</td>
                      <td>{{$event->act_dep}}</td>
                    </tr>
                    <tr>
                      <td>สถานที่จัดกิจกรรม:</td>
                      <td>{{$event->act_locat}}</td>
                    </tr>
                    <tr>
                      <td>เริ่มกิจกรรม (ว/ด/ป:เวลา):</td>
                      <td>{{$event->dateTime_begin}}</td>
                    </tr>
                    <tr>
                      <td>สิ้นสุดกิจกรรม (ว/ด/ป:เวลา):</td>
                      <td>{{$event->dateTime_end}}</td>
                    </tr>
                    <tr>
                      <td>ภาคการศึกษา:</td>
                      <td>{{$event->act_sem}}</td>
                    </tr>
                     <tr>
                      <td>ปีการศึกษา:</td>
                      <td>{{$event->act_year}}</td>
                    </tr>
                    <tr>
                      <td>ประเภทกิจกรรม:</td>
                      <td>{{$event->types}}</td>
                    </tr>
                    <tr>
                      <td>จำนวนคนที่รับสมัคร:</td>
                      <td>{{$event->act_req}}</td>
                    </tr>
                    <tr>
                      <td>จำนวนชั่วโมงที่ได้รับ:</td>
                      <td>{{$event->act_hour}}</td>
                    </tr>
                    <tr>
                      <td><b>ข้อมูลเพิ่มเติม:</b></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
                 <p>{{$event->act_note}}</p>
              </div>
            </div>
          </div>
        </div>
        <div align="center">
        <a href="/events" class="btn btn-primary">กลับไปก่อนหน้า</a>
        </div><br>
       </div>
     </div>
    </div>
  </div>


@endsection
