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
          <h2>Add Event</h2>
        </div>
        <div class="form-body">
      <form class='form-horizontal' role='form' action="/events" method="post" enctype="multipart/form-data">
        <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='act_name'>ชื่อกิจกรรม :</label>
            <div class='col-md-6'>
              <div class='col-md-12'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' type="text" name="act_name" id='act_name' placeholder='ชื่อกิจกรรม'>
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
                   <select class='form-control' id='department_id' name="department_id">
                    @foreach($departs as $depart)
                    <option value="{{$depart->id}}">{{$depart->dep_name}}</option>
                     @endforeach
                  </select>
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-briefcase'></i>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='act_locat'>สถานที่ :</label>
            <div class='col-md-6'>
              <div class='col-md-12'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' type="text" id='act_locat' name="act_locat" placeholder='Ex. สนามฟุตบอล'>
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-pushpin'></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='act_begin' >เริ่ม (ว/ด/ป:เวลา) :</label>
            <div class='col-md-8'>
              <div class='col-md-4'>
                <div class='form-group internal input-group'>
                 <input type="datetime" id="date-start" class="form-control " placeholder="Begin Date Time" name="dateTime_begin">
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='act_date'>สิ้นสุด (ว/ด/ป:เวลา):</label>
            <div class='col-md-8'>
              <div class='col-md-4'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' type="datetime" id='date-end' name="dateTime_end" placeholder="End Date Time">
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
           <div class='form-group'>
           <label class='control-label col-md-2 col-md-offset-2' for='act_sem'>ภาคการศึกษา :</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <select class='form-control' id='act_sem' name="act_sem">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </div>
              </div>
              <div class='col-md-9'>
                <div class='form-group internal'>
                  <label class='control-label col-md-3' for='act_year'>ปีการศึกษา :</label>
                   <div class='col-md-3'>
                     <div class='form-group internal'>
                        <select class='form-control dtp-select-year-before' id='act_year' name="act_year">
                        @for ($i = 2559; $i <=2599 ; $i++)
                          <option value="<?=$i;?>"><?=$i;?></option>
                        @endfor
                        </select>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
           </div>

          <div class="form-group">
            <label for='types' class="control-label col-md-1 col-md-offset-2">ประเภท</label>
              <div class="col-sm-8">
               @foreach($types as $type)
                <div class="checkbox-inline"><label>
                <input value="{{$type->id}}" type="checkbox" name="types[]">{{$type->nametype}}</label></div>
                 @endforeach
              </div>
          </div>

      <div class='form-group'>
          <label class='control-label col-md-2 col-md-offset-2' for='act_req'>จำนวนคนที่รับสมัคร :</label>
            <div class='col-md-8'>
              <div class='col-md-4'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' type="number" id='act_req' placeholder='ใส่เฉพาะหมายเลข Ex.10 ' name="act_req">
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-user'></i>
                  </span>
                </div>
              </div>
              <label class='control-label col-md-2'>คน</label>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='act_hour'>ค่าชั่วโมง :</label>
            <div class='col-md-8'>
              <div class='col-md-4'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' type="number" id='act_hour' placeholder='ใส่เฉพาะหมายเลข Ex.3' name="act_hour">
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-time'></i>
                  </span>
                </div>
              </div>
              <label class='control-label col-md-2'>ชั่วโมง</label>
            </div>
          </div>
        <div class='form-group'>
           <label class='control-label col-md-2 col-md-offset-2' for='act_note'>ข้อมูลเพิ่มเติม :</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <textarea class='form-control' id='act_note' cols="30" rows="10" placeholder='ข้อมูลเพิ่มเติ่ม' name="act_note"></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='act_img'>อัพรูปภาพ :</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input type="hidden" name="type" value="events">
                  <input type="file" name="act_img" accept="image/*" value="">
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

           <div class='col-md-offset-1 col-md-1' ><a class='btn-lg btn-danger hvr-icon-pulse-grow col-9' href="/events">หลัก</a></div><br><br>
          </div>

          {{csrf_field()}}
         </form>
        </div>
      </div>
    </div>
  </div>
</div>







@endsection
