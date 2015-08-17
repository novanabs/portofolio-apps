@extends('partial._dasboard')

@section('content')
	<h2>Create New Article</h2>
<div class="col-md-4">
	{!! Form::open(['route' => 'tag.store']) !!}

		@include('partial._formTag',['submitButtonText' =>'Add'])

	{!! Form::close() !!}	

</div>
@stop