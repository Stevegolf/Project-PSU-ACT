@extends('layouts.adminTheme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Document Managemant</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-success" href=""> Create New</a>
	        </div>
	    </div>
	</div><br>
<table class="table table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Category</th>
			<th>Post By</th>
			<th width="280px">Action</th>
		</tr>

	<tr>
		<td>1</td>
		<td>ใบสำคัญรับเงิน</td>
		<td>คำขอร้องทั่วไป</td>
		<td>Aekkamon.N</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	<tr>
	<td>2</td>
		<td>ใบสำคัญรับเงินทุนทำงานเเลกเปลี่ยน</td>
		<td>คำขอร้องทั่วไป</td>
		<td>Aekkamon.N</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	<tr>
	<td>3</td>
		<td>ใบสำคัญรับเงินทุนทำงานทั่วไป</td>
		<td>คำขอร้องทั่วไป</td>
		<td>Aekkamon.N</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	<tr>
	<td>4</td>
		<td>ตารางทำงานทุนทำงานแลกเปลี่ยน</td>
		<td>คำขอร้องทั่วไป</td>
		<td>Aekkamon.N</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	<tr>
	<td>5</td>
		<td>ใบสมัครขอรับทุนการศึกษา</td>
		<td>คำขอร้องทั่วไป</td>
		<td>Aekkamon.N</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	<tr>
	<td>6</td>
		<td>ขอใช้รถยนต์ของมหาวิทยาลัย</td>
		<td>คำขอร้องทั่วไป</td>
		<td>Aekkamon.N</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	<tr>
	<td>7</td>
		<td>ขออนุญาตหยุดเรียนเพื่อเข้าร่วมกิจกรรม</td>
		<td>คำขอร้องทั่วไป</td>
		<td>Aekkamon.N</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	<tr>
	<td>8</td>
		<td>ใบสมัครขอรับทุนการศึกษา</td>
		<td>คำขอร้องทั่วไป</td>
		<td>Aekkamon.N</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	<tr>
	<td>9</td>
		<td>ขอยืมพัสดุทุกชนิด</td>
		<td>คำขอร้องทั่วไป</td>
		<td>Aekkamon.N</td>
		<td>
			<a class="btn btn-info" href="">Show</a>
			<a class="btn btn-primary" href="">Edit</a>
			<a class="btn btn-success" href="">Delete</a>
		</td>
	</tr>
	</table>

@endsection