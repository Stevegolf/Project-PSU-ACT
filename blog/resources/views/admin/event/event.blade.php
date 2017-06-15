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
			<th>No</th>
			<th>Title</th>
			<th>Deteil</th>
			<th>Post By</th>
			<th>Department</th>
			<th>Category</th>
			<th width="280px">Action</th>
		</tr>

	<tr>
		<td>1</td>
		<td>FRESHY NIGHT PARTY</td>
		<td>มาแล้ววววว!!! เตรียมพบกับ BIG ASS ใน 'FRESHY NIGHT PARTY!'</td>
		<td>Aekkamon.N</td>
		<td>องค์การบริหาร องค์การนักศึกษา</td>
		<td>ภูมิในสถาบัน</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	<tr>
		<td>2</td>
		<td>SriBlue Games 17th</td>
		<td>SriBlue Games 17th สีบูลเกมส์ ครั้งที่ 17</td>
		<td>Aekkamon.N</td>
		<td>องค์การบริหาร องค์การนักศึกษา</td>
		<td>ด้านสุขภาพ และทักษะทางสังคม</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	</table>

@endsection