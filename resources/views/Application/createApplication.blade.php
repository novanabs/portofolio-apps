@extends('partial._dasboard')

@section('content')
	<h2>Create New Application</h2>

	{!! Form::open(['route' => 'application.store']) !!}

		@include('partial._formApplication',['submitButtonText' =>'Add application'])

	{!! Form::close() !!}	

@stop
@section('js')

@stop