@extends('db')
@section('title','主页')
@section('like')
	@foreach ($data as $value)
		<b>{{$value->UsersName}}</b>
	@endforeach
@endsection



