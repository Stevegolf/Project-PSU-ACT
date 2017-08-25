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
					<a class="btn btn-success hvr-icon-float-away col-1"  href="/createdepart"> Create Department</a>
				</div>
					<h2>Department Management</h2>
				</div>
				<div class="form-body" >
					<table class="table table-striped table-hover">
						<tr>
							<th width="50px">ID</th>
							<th>Department Name</th>
							<th>Status</th>
						</tr>
							@foreach($department as $depart)
						<tr>
							<th>{{$depart->id}}</th>
							<th>{{$depart->dep_name}}</th>
							<th><label class="switch">
  								<input type="checkbox">
 								 <span class="slider round"></span>
								</label>
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



