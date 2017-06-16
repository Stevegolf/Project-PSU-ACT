@extends('layouts.adminTheme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Event Managemant</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-success"  href="/events/create"> Create Event</a>
	        </div>
	    </div>
	</div><br>
<table class="table table-striped table-hover">
		<tr>
			<th>ลำดับ</th>
			<th>ชื่อกิจกรรม</th>
			<th>สร้างโดย</th>
			<th>หน่วยงาน</th>
			<th width="280px">Action</th>
		</tr>

	<tr>
		<td>1</td>
		<td>FRESHY NIGHT PARTY</td>
		<td>Aekkamon.N</td>
		<td>องค์การบริหาร องค์การนักศึกษา</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	</table>

@endsection