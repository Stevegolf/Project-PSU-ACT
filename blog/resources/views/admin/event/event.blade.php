@extends('layouts.adminTheme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="container">
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
	<div class='panel panel-primary dialog-panel'>
	<table class="table table-striped table-hover">
		<tr>
			<th>ลำดับ</th>
			<th>ชื่อกิจกรรม</th>
			<th>หน่วยงาน</th>
			<th>สร้างโดย</th>
			<th width="280px">Action</th>
		</tr>
		@foreach($objs as $row)
		<tr>
		<th>{{$row->act_id}}</th>
		<th>{{$row->act_name}}</th>
		<th>{{$row->act_dep}}</th>
		<th>555555555</th>
		<th>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</th>
		</tr>
		@endforeach
	</table>
	</div>
</div>

@endsection