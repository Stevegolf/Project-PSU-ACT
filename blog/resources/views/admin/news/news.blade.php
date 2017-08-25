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
					<a class="btn btn-success hvr-icon-float-away col-1"  href="/news/create"> Create News</a>
				@endif
				</div>
					<h2>News Management</h2>
				</div>
				<div class="form-body" >
					<table class="table table-striped table-hover">
						<tr>
							<th width="50px">ID</th>
							<th>News Name</th>
							<th>Department</th>
							<th>Create by</th>
							<th width="280px">Action</th>
						</tr>
						@foreach($news as $index => $items)
						<tr>
							<th>{{$NUM_PAGE*($page-1) + $index+1}}</th>
							<th>{{$items->news_title}}</th>
							<th>{{$items->department()->get()[0]['dep_name']}}</th>
							<th>{{$items->user()->get()[0]['name']}}</th>
							<th>
								<form action="/news/{{$items->id}}" method="post" class="form-inline">
									<a href="/news/{{$items->id}}" class="btn btn-warning">Show</a>
									<a href="/news/{{$items->id}}/edit" class="btn btn-primary">Edit</a>
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
