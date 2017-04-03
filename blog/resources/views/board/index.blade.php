
@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')

	@foreach($boards as $item)
		{{$item->body}}: {{$item->body}} <br>
		<hr>
		<br>
		<a href="/boards/create"> Create New Masgssage

	@endforeach
		
@endsection
