@extends('partial._dasboard')
{!! HTML::style('assets/css/select2.min.css')!!}
@section('content')
	
	
	{!! Form::model($app,['route' =>['application.update',$app->id], 'method' => 'PATCH']) !!}
		
		@include('partial._formApplication',['submitButtonText' =>'Update APP'])

	{!! Form::close() !!}	

@stop
