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
          <h2>Update Event</h2>
        </div>
        <div class="form-body">
      <form class='form-horizontal' role='form' action="/events/{{$id}}" method="post" enctype="multipart/form-data">
        <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='act_name'>ชื่อกิจกรรม :</label>
            <div class='col-md-6'>
              <div class='col-md-12'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' type="text" name="act_name" id='act_name' value="{{$event->act_name}}">
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
                   <select class='form-control' id='department_id' name="department_id" disabled>
                    <option>{{$departs}}</option>
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
                  <input class='form-control datepicker' type="text" id='act_locat' name="act_locat" value="{{$event->act_locat}}">
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
                 <input type="datetime" id="date-start" class="form-control " value="{{$event->dateTime_begin}}"" name="dateTime_begin">
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
                  <input class='form-control datepicker' type="datetime" id='date-end' name="dateTime_end" value="{{$event->dateTime_end}}">
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
                  <select class='form-control' id='act_sem' name="act_sem" value="{{$event->act_sem}}">
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
                        <select class='form-control dtp-select-year-before' id='act_year' name="act_year" value="$event->act_year">
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
               <!-- {{ $chk = '' }} -->
                <div class="checkbox-inline"><label>
                 @foreach($event->types as $ctypes)
                    @if($type->id == $ctypes->id)
                    <!-- {{ $chk = 'checked' }} -->
                    @endif
                  @endforeach
                <input type="checkbox" name="types[]" value="{{$type->id}}" {{$chk}}>{{$type->nametype}}</label></div>
                 @endforeach
              </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='act_close'>ปิดรับสมัคร (ว/ด/ป:เวลา):</label>
            <div class='col-md-8'>
              <div class='col-md-4'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' type="datetime" id='min-date' name="dateTime_close" value="{{$event->dateTime_end}}">
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='act_req'>จำนวนคนที่รับสมัคร :</label>
              <div class='col-md-8'>
                <div class='col-md-4'>
                  <div class='form-group internal input-group'>
                    <input class='form-control datepicker' type="number" id='act_req' value="{{$event->act_req}}" name="act_req">
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
                    <input class='form-control datepicker' type="number" id='act_hour' value="{{$event->act_hour}}" name="act_hour">
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
                      <textarea class='form-control' id='act_note' cols="30" rows="10" placeholder='ข้อมูลเพิ่มเติ่ม' name="act_note">{{$event->act_note}}
                      </textarea>
                    </div>
                  </div>
                </div>
              </div>
              <br>

              <div class='form-group' >
                <div class='col-md-offset-4 col-md-1'>

                  <input type="hidden" name="_method" value="PUT" />
                  {{csrf_field()}}
                  <button type="submit" class="btn btn-primary hvr-icon-fade col-7">อัพเดท</button>
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
