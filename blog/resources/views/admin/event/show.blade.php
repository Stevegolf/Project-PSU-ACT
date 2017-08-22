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
            <h3>{{$events->act_name}}</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3 " align="center">
              <img src="{{url('/images/events/type/'.$events->act_img)}}" class="img-rounded img-responsive"> </div>
              <div class=" col-md-9 col-lg-9 ">
                <table class="table table-user-information">
                  <tbody>
                    <tr>
                      <td><a href="#" ><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<b>ชื่อกิจกรรม:</b></td>
                      <td>{{$events->act_name}}</td>
                    </tr>
                    <tr>
                      <td><a href="#"><span class="glyphicon glyphicon-home"></span></a>&nbsp;&nbsp;<b>หน่วยงาน:<b></td>
                      <td>
                        {{$events->department->dep_name}}
                      </td>
                    </tr>
                    <tr>
                      <td><a href="#"><span class="glyphicon glyphicon-map-marker"></span></a>&nbsp;&nbsp;<b>สถานที่จัดกิจกรรม:</b></td>
                      <td>{{$events->act_locat}}</td>
                    </tr>
                    <tr>
                      <td><a href="#"><span class="glyphicon glyphicon-time"></span></a>&nbsp;&nbsp;<b>เริ่มกิจกรรม (ว/ด/ป:เวลา):</b></td>
                      <td>{{$events->dateTime_begin}}</td>
                    </tr>
                    <tr>
                      <td><a href="#"><span class="glyphicon glyphicon-time"></span></a>&nbsp;&nbsp;<b>สิ้นสุดกิจกรรม (ว/ด/ป:เวลา):</b></td>
                      <td>{{$events->dateTime_end}}</td>
                    </tr>
                    <tr>
                      <td><a href="#"><span class="glyphicon glyphicon-list-alt"></span></a>&nbsp;&nbsp;<b>ภาคการศึกษา:</b></td>
                      <td>{{$events->act_sem}}</td>
                    </tr>
                     <tr>
                      <td><a href="#"><span class="glyphicon glyphicon-calendar"></span></a>&nbsp;&nbsp;<b>ปีการศึกษา:</b></td>
                      <td>{{$events->act_year}}</td>
                    </tr>
                    <tr>
                      <td><a href="#"><span class="glyphicon glyphicon-flag"></span></a>&nbsp;&nbsp;<b>ประเภทกิจกรรม:</b></td>
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
                      <td><a href="#"><span class="glyphicon glyphicon-off"></span></a>&nbsp;&nbsp;<b>ปิดรับสมัคร (ว/ด/ป:เวลา):</b></td>
                      <td>{{$events->dateTime_close}}</td>
                    </tr>
                    <tr>
                      <td><a href="#"><span class="glyphicon glyphicon-user"></span></a>&nbsp;&nbsp;<b>จำนวนคนที่รับสมัคร:</b></td>
                      <td>{{$events->act_req}}</td>
                    </tr>
                    <tr>
                      <td><a href="#"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;<b>จำนวนชั่วโมงที่ได้รับ:</b></td>
                      <td>{{$events->act_hour}}</td>
                    </tr>
                    <tr>
                      <td><a href="#"><span class="glyphicon glyphicon-list"></span></a>&nbsp;&nbsp;<b>ข้อมูลเพิ่มเติม:</b></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
                 <p>{{$events->act_note}}</p>
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
