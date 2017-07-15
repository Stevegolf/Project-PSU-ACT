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
				@if ( !Auth::guest())
					<a class="btn btn-success hvr-icon-float-away col-1"  href="/events/create"> Create Event</a>
				@endif
				</div>
					<h2>Event Management</h2>
				</div>
				<div class="form-body" >
					<table class="table table-striped table-hover">
						<tr>
							<th width="50px">ID</th>
							<th>Event Name</th>
							<th>Department</th>
							<th>Create by</th>
							<th width="280px">Action</th>
						</tr>
						@foreach($events as $index => $items)
						<tr>
							<th>{{$NUM_PAGE*($page-1) + $index+1}}</th>
							<th>{{$items->act_name}}</th>
							<th>{{$items->department()->get()[0]['dep_name']}}</th>
							<th>{{$items->user()->get()[0]['name']}}</th>
							<th>
								<form action="/events/{{$items->id}}" method="post" class="form-inline">
									<a href="/events/{{$items->id}}" class="btn btn-warning">Show</a>
									<a href="/events/{{$items->id}}/edit" class="btn btn-primary">Edit</a>
									<input type="hidden" name="_method" value="DELETE"/>
									{{csrf_field()}}
									<button class="btn btn-info">Delete</button>
								</form>
							</th>
						</tr>
						@endforeach
					</table>
					{{ $events->links() }}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection