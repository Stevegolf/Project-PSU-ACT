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
					<a class="btn btn-success hvr-icon-float-away col-1"  href="news/create"> Create News</a>
				</div>
					<h2>News Management</h2>
				</div>
				<div class="form-body" >
					<table class="table table-striped table-hover">
						<tr>
							<th width="50px">ID</th>
							<th>Title</th>
							<th>Department</th>
							<th>Action</th>
						</tr>
            @foreach($news as $index => $items)
						<tr>
              <th>{{$NUM_PAGE*($page-1) + $index+1}}</th>
							<th>{{$items->news_title}}</th>
							<th>{{$items->news_department}}</th>
							<th><form action="/news/{{$items->id}}" method="post" class="form-inline">
									<a href="" class="btn btn-warning">Show</a>
									<a href="" class="btn btn-primary">Edit</a>
									<input type="hidden" name="_method" value="DELETE"/>
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
