@extends('layouts.adminTheme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')

<form action="" method="POST" >
	<legend>Create new Event</legend>
	<div class="form-group">
		<label for="nameTH">ชื่อกิจกรรม: (ภาษาไทย)</label>
		<input type="text" class="form-control" name="nameTH">
	</div>
	<div class="form-group">
		<label for="nameEN">ชื่อกิจกรรม: (ภาษาอังกฤษ)</label>
		<input type="text" class="form-control" name="nameEN">
	</div>	
	<div class="form-group">
		<label for="depart">ชื่อหน่วยงาน</label>
		<input type="text" class="form-control" name="depart">
	</div>
	<div class="form-group">
		<label for="date">วัน เดือน ปี ที่จัดกิจกรรม</label>
		<input type="date" class="form-control" name="date">
	</div>
	<div class="form-group">
		<label for="time">เวลาเริ่มกิจกรรม</label>
		<input type="time" class="form-control" name="time">
	</div>
	<div class="form-group">
		<label for="locat">สถานที่จัดกิจกรรม</label>
		<input type="text" class="form-control" name="locat">
	</div>
	<div class="form-group">
		<label for="hour">จำนวนชั่วโมงที่ได้รับ</label>
		<input type="text" class="form-control" name="hour">
	</div>
	<div class="form-group">
		<label for="req">จำนวนคนที่รับสมัคร</label>
		<input type="text" class="form-control" name="req">
	</div>
	<div class="form-group">
		<label for="deadline">วันสุดท้ายที่รับสมัคร</label>
		<input type="date" class="form-control" name="deadline">
	</div>
	<div class="form-group">
		<label for="sem">ภาคการศึกษา</label>
		<input type="text" class="form-control" name="sem">
	</div>
	<div class="form-group">
		<label for="year">ปีการศึกษา</label>
		<input type="text" class="form-control" name="year">
	</div>
	<div class="form-group">
		<label for="type">ประเภทกิจกรรม</label>
		<input type="text" class="form-control" name="type">
	</div>
	<div class="form-group">
		<label for="cate">หมวดหมู่กิจกรรม</label>
		<input type="text" class="form-control" name="cate">
	</div>
	<div class="form-group">
		<label for="type">ข้อมูลเพิ่มเติม</label>
		<textarea name=""  cols="30" rows="10"></textarea>
	</div>
	<div class="form-group">
		<label for="img">อัพรูปภาพ</label>
		<input type="file" name="pic" accept="image/*">
	</div>

</form>


@endsection