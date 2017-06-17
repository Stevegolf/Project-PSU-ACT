<table class="table table-striped table-hover">
		<tr>
			<th>ลำดับ</th>
			<th>ชื่อกิจกรรม</th>
			<th>สร้างโดย</th>
			<th>หน่วยงาน</th>
			<th width="280px">Action</th>
		</tr>
		@foreach($objs as $row)
		<tr>
		<td>{{$row->act_id}}</td>
		<td>{{$row->act_name}}</td>
		<td>Student Union</td>
		<td>{{$row->act_dep}}</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	</table>