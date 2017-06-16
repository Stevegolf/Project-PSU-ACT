@extends('layouts.adminTheme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')

<div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5>สร้างกิจกรรม</h5>
      </div>
      <div class='panel-body'>
      <form class='form-horizontal' role='form' action="">
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='name'>ชื่อกิจกรรม :</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='name' placeholder='Name' type='text'>
                </div>
              </div>
            </div>
          </div>
           <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='name'>หน่วยงาน :</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='name' placeholder='Ex. Student Union' type='text'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='name'>สถานที่ :</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='locat' placeholder='Ex. สนามฟุตบอล' type='text'>
                </div>
              </div>
            </div>
          </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='begin'>เริ่ม :</label>
            <div class='col-md-8'>
              <div class='col-md-4'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' type="date" id='date_begin'>
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
              <label class='control-label col-md-2' for='time'>เวลา:</label>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' id='time_begin' type="time">
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-time'></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
            <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='date'>สิ้นสุด :</label>
            <div class='col-md-8'>
              <div class='col-md-4'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' type="date" id='date_end'>
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
              <label class='control-label col-md-2' for='time'>เวลา:</label>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' id='time_end' type="time">
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-time'></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
           <div class='form-group'>
               <label class='control-label col-md-2 col-md-offset-2' for='sem'>ภาคการศึกษา :</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <select class='form-control' id='sem'>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </div>
              </div>
              <div class='col-md-9'>
                <div class='form-group internal'>
                  <label class='control-label col-md-4' for='year'>ปีการศึกษา :</label>
                   <div class='col-md-3'>
                     <div class='form-group internal'>
                       <select class='form-control' id='year'>
                          <option>2560</option>
                          <option>2561</option>
                          <option>2562</option>
                          <option>2563</option>
                          <option>2564</option>
                          <option>2565</option>
                        </select>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            </div>
      <div class='form-group'>
      <label class='control-label col-md-1 col-md-offset-2' for='name'>ประเภท</label>
		<div class="row text-center">
			<label for="default" class="btn btn-danger"> บังคับ <input type="checkbox" id="default" class="badgebox"><span class="badge"></span></label>

	        <label for="primary" class="btn btn-primary">จิตอาสา <input type="checkbox" id="primary" class="badgebox"><span class="badge"></span></label>

	        <label for="info" class="btn btn-info">วิชาการ <input type="checkbox" id="info" class="badgebox"><span class="badge"></span></label>

	        <label for="success" class="btn btn-success">ภูมิใจในสถาบัน <input type="checkbox" id="success" class="badgebox"><span class="badge"></span></label>

	        <label for="warning" class="btn btn-warning">พหุวัฒนธรรม <input type="checkbox" id="warning" class="badgebox"><span class="badge"></span></label>

	        <label for="danger" class="btn btn-danger">สุขภาพ <input type="checkbox" id="danger" class="badgebox"><span class="badge"></span></label>
		</div>
	</div>
	<div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='name'>ข้อมูลเพิ่มเติม :</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <textarea class='form-control' id='name' cols="30" rows="10" placeholder='ข้อมูลเพิ่มเติ่ม'></textarea>
                </div>
              </div>
            </div>
          </div>
	</form>
     </div>
    </div>
</div>







<div class='container'>
    <div class='panel panel-primary dialog-panel'>
      <div class='panel-heading'>
        <h5>Almaguin Campground - Reservation</h5>
      </div>
      <div class='panel-body'>
        <form class='form-horizontal' role='form'>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Accomodation</label>
            <div class='col-md-2'>
              <select class='form-control' id='id_accomodation'>
                <option>RV</option>
                <option>Tent</option>
                <option>Cabin/Lodging</option>
              </select>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Name</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_title'>
                    <option>Mr</option>
                    <option>Ms</option>
                    <option>Mrs</option>
                    <option>Miss</option>
                    <option>Dr</option>
                  </select>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_first_name' placeholder='First Name' type='text'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_last_name' placeholder='Last Name' type='text'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Guests</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control col-md-8' id='id_adults' placeholder='18+ years' type='number'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_children' placeholder='2-17 years' type='number'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_children_free' placeholder='&lt; 2 years' type='number'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contact</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='E-mail' type='text'>
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_phone' placeholder='Phone: (xxx) - xxx xxxx' type='text'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Checkin</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' id='id_checkin'>
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
              <label class='control-label col-md-2' for='id_checkout'>Checkout</label>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' id='id_checkout'>
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Equipment type</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_equipment'>
                    <option>Travel trailer</option>
                    <option>Fifth wheel</option>
                    <option>RV/Motorhome</option>
                    <option>Tent trailer</option>
                    <option>Pickup camper</option>
                    <option>Camper van</option>
                  </select>
                </div>
              </div>
              <div class='col-md-9'>
                <div class='form-group internal'>
                  <label class='control-label col-md-3' for='id_slide'>Slide-outs</label>
                  <div class='make-switch' data-off-label='NO' data-on-label='YES' id='id_slide_switch'>
                    <input id='id_slide' type='checkbox' value='chk_hydro'>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_service'>Required Service</label>
            <div class='col-md-8'>
              <select class='multiselect' id='id_service' multiple='multiple'>
                <option value='hydro'>Hydro</option>
                <option value='water'>Water</option>
                <option value='sewer'>Sewer</option>
              </select>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_pets'>Pets</label>
            <div class='col-md-8'>
              <div class='make-switch' data-off-label='NO' data-on-label='YES' id='id_pets_switch'>
                <input id='id_pets' type='checkbox' value='chk_hydro'>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Comments</label>
            <div class='col-md-6'>
              <textarea class='form-control' id='id_comments' placeholder='Additional comments' rows='3'></textarea>
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-offset-4 col-md-3'>
              <button class='btn-lg btn-primary' type='submit'>Request Reservation</button>
            </div>
            <div class='col-md-3'>
              <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


@endsection
