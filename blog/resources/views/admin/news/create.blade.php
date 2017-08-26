@extends('layouts.adminTheme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="panel panel-widget forms-panel">
  <div class="forms">
    <div class=" form-grids form-grids-right">
      <div class="widget-shadow " data-example-id="basic-forms">
        <div class="form-title">
          <h2>Create News</h2>
        </div>
        <div class="form-body">
      <form class='form-horizontal' role='form' action="/news" method="post" enctype="multipart/form-data">
        <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='act_name'>ชื่อหัวข้อข่าว :</label>
            <div class='col-md-6'>
              <div class='col-md-12'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' type="text" name="news_title" id='news_title' placeholder='หัวข้อข่าว' required>
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-pencil'></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='act_dep'>หน่วยงาน :</label>
            <div class='col-md-6'>
              <div class='col-md-12'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' type="text" name="news_department" id='news_department' required>
                   
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-briefcase'></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
             <label class='control-label col-md-2 col-md-offset-2' for='act_note'>เนื้อหา :</label>
              <div class='col-md-6'>
                <div class='form-group'>
                  <div class='col-md-11'>
                    <textarea class='form-control' id='news_detail' cols="30" rows="10" placeholder='ข้อมูลเพิ่มเติ่ม' name="news_detail"></textarea>
                  </div>
                </div>
              </div>
            </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='news_img'>อัพรูปภาพ :</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input type="hidden" name="type" value="news" required>
                  <input type="file" name="news_img" accept="image/*" value="" required>
                </div>
              </div>
            </div>
          </div><br>
          <div class='form-group' >
            <div class='col-md-offset-4 col-md-1'>
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <button class='btn-lg btn-primary hvr-icon-fade col-7' type='submit'>บันทึก</button>
            </div>
            <div class='col-md-3'>
              <button class='btn-lg btn-danger hvr-icon-spin col-5' style='float:right' type='reset'>ยกเลิก</button>
            </div>
           <div class='col-md-offset-1 col-md-1' ><a class='btn-lg btn-danger hvr-icon-pulse-grow col-9' href="/news">หลัก</a></div><br><br>
          </div>
          {{csrf_field()}}
         </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
