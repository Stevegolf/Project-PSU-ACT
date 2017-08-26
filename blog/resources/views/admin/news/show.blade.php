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
              <img src="{{url('/images/news/type/'.$news->news_img)}}" class="img-rounded img-responsive"> </div>
              <div class=" col-md-9 col-lg-9 ">
                <table class="table table-user-information">
                  <tbody>
                    <tr>
                      <td><a href="#" ><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<b>ชื่อหัวข้อข่าว:</b></td>
                      <td>{{$news->news_title}}</td>
                    </tr>
                    <tr>
                      <td><a href="#"><span class="glyphicon glyphicon-home"></span></a>&nbsp;&nbsp;<b>หน่วยงาน:<b></td>
                      <td>
                        {{$news->news_department}}
                      </td>
                    </tr>
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
        <a href="/news" class="btn btn-primary">กลับไปก่อนหน้า</a>
        </div><br>
       </div>
     </div>
    </div>
  </div>


@endsection
