@extends('layouts.adminTheme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')

<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Messages</h2>
	        </div>
	    </div>
	</div><br>
<table class="table table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Detail</th>
			<th width="280px">Action</th>
		</tr>
	
	<tr>
		<td>1</td>
		<td>Pongsakon</td>
		<td>Pongsakon@gmail.com</td>
		<td>ระบบบริการสมัครกิจกรรมใช้ไม่ได้ครับ</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
		</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Akkharphon</td>
		<td>sakamoto@gmail.com</td>
		<td>ลงกิจกรรมในระบบไม่ได้ครับ รบกวนแก้หน่อยครับ</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
		</td>
	</tr>
	</table>

@endsection