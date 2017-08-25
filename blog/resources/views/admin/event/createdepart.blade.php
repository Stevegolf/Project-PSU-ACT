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
				</div>
					<h2>Create Department</h2>
				</div>
				<div class="form-body" >
				<form class='form-horizontal' role='form' action="/savedepart" method="post" enctype="multipart/form-data">
					<div class='form-group'>
			            <label class='control-label col-md-2 ' for='act_locat'></label>
			            <div class='col-md-8'>
			              <div class='col-md-12'>
			                <div class='form-group internal input-group'>
			                  <input class='form-control datepicker' type="text" id='dep_name' name="dep_name" placeholder='Ex. องค์การบริหาร องค์การนักศึกษา' required>
			                  <span class='input-group-addon'>
			                    <i class='glyphicon glyphicon-briefcase'></i>
			                  </span>
			                </div>
			              </div>
			            </div>
			          </div><br><br>
						<div class='form-group' >
							<div class='col-md-offset-4 col-md-1'>
				              <button class='btn-lg btn-primary hvr-icon-fade col-7' type='submit'>บันทึก</button>
				            </div>
							<div class='col-md-offset-1 col-md-1' ><a class='btn-lg btn-danger hvr-icon-pulse-grow col-9' href="/department">กลับ</a>
					        </div>
					    </div>
					    {{csrf_field()}}
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection



