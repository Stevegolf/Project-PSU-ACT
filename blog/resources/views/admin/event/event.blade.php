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
				<div class="pull-right">
					<a class="btn btn-success"  href="/events/create"> Create Event</a>
				</div>
					<h2>Event Management</h2>
				</div>
				<div class="form-body">
					<table class="table table-striped table-hover">
						<tr>
							<th width="50px">ลำดับ</th>
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
							<th>{{$row->name}}</th>

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
		</div>
	</div>
</div>

@endsection