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
					<a class="btn btn-success hvr-icon-float-away col-1"  href="/manageuser/create"> Create User</a>
				@endif
				</div>
					<h2>Users Management</h2>
				</div>
				<div class="form-body" >
					<table class="table table-striped table-hover">
						<tr>
							<th width="50px">ID</th>
							<th width="200px">Name</th>
							<th>E-mail</th>
							<th>Level</th>
							<th width="280px">Action</th>
						</tr>
						@foreach($users as $items)
						<tr>
							<th>{{$items->id}}</th>
							<th>{{$items->name}}</th>
							<th>{{$items->email}}</th>
							<th>{{$items->level}}</th>
							<th>
								<form action="" method="post" class="form-inline">
									<a href="" class="btn btn-warning">Show</a>
									<a href="" class="btn btn-primary">Edit</a>
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