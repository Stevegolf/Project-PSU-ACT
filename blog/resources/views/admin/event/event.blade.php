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
				<div class="form-body" >
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
							<th>{{$row->id}}</th>
							<th>{{$row->act_name}}</th>
							<th>{{$row->dep_name}}</th>
							<th>{{$row->name}}</th>

							<th>
						<form action="/events/{{$row->id}}" method="post" class="form-inline">
							<a href="/events/{{$row->id}}" class="btn btn-warning">Show</a>
							<a href="/events/{{$row->id}}/edit" class="btn btn-primary">Edit</a>
							<input type="hidden" name="_method" value="DELETE" />
							{{csrf_field()}}
							<button class="btn btn-info">Delete</button>
						</form>
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