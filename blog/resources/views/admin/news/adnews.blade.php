@extends('layouts.adminTheme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>News Managemant</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-success" href=""> Create News</a>
	        </div>
	    </div>
	</div><br>
<table class="table table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Deteil</th>
			<th>Post By</th>
			<th>Category</th>
			<th width="280px">Action</th>
		</tr>

	<tr>
		<td>1</td>
		<td>PSU Walk Rally Episode 1</td>
		<td>เชิญนักศึกษาร่วมโครงการร่วมแข่งขัน PSU Walk Rally Episode 1 : Penang Survival</td>
		<td>Aekkamon.N</td>
		<td>Activity</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	<tr>
		<td>2</td>
		<td>ขอเชิญร่วมประกวดภาพถ่าย</td>
		<td>ขอเชิญร่วมประกวดภาพถ่าย ในหัวข้อ พระราชบิดาในมุมมองของฉัน</td>
		<td>Aekkamon.N</td>
		<td>General</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	</table>
@endsection