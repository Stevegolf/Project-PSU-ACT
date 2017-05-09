@extends('layouts.theme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<div class="section secondary-section " id="calendar">
  <div class="container">
    <div class=" title">
      <h1>Calendar</h1>
    </div>
    <div align="center" width="100%; hight="100%;">
		    <iframe  src="https://calendar.google.com/calendar/embed?src=studentunion.psupk%40gmail.com&ctz=Asia/Bangkok" style="border-width:0" width="1200" height="800" frameborder="0" scrolling="no"></iframe>
    </div>
  </div>
</div>
@endsection
