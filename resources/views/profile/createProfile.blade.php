@extends('partial._profile')
@section('title') Create Profile @stop
@section('content')
	<h2>Isi Data Diri Lengkap</h2>

	{!! Form::open(['route' => 'profile.store','files'=>'true']) !!}

		@include('partial._formProfile',['submitButtonText' =>'Buat Biodata'])

	{!! Form::close() !!}	

@stop
@section('js')

@stop