@extends('layouts.adminTheme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>User Management</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-success" href=""> Create New User</a>
	        </div>
	    </div>
	</div><br>
<table class="table table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Email</th>
			<th>Role</th>
			<th width="280px">Action</th>
		</tr>
	
	<tr>
		<td>1</td>
		<td>Piyaphan.C</td>
		<td>piyaphan6929@gmail.com</td>
		<td>Admin</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
		</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Akkharphon.S</td>
		<td>sakamoto@gmail.com</td>
		<td>User</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
		</td>
	</tr>
	</table>
@endsection