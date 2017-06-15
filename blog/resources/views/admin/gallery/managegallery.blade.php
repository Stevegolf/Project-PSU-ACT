@extends('layouts.adminTheme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Gallery Management</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-success" href=""> Create New </a>
	        </div>
	    </div>
	</div><br>
<table class="table table-striped table-hover">
		<tr>
		<td>NO.</td>
		<td>Title</td>
		<td>Categories</td>
		<td>User Create</td>
		<td>Create at</td>
			<th width="280px">Action</th>
		</tr>
	
	<tr>
		<td>1</td>
		<td>Sport Day</td>
		<td>Sport</td>
		<td>Sakamoto.S</td>
		<td>2017-05-10 17:33:12</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Volunteer Backpack</td>
		<td>Volunteer</td>
		<td>Piyaphan.C</td>
		<td>2017-05-01 13:00:20</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	</table>

@endsection