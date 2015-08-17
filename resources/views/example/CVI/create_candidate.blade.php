@extends('CVI.dashboard')
@section('content')
<h2>Input Candidate</h2>
{!! Form::open(['route' => 'candidate.store']) !!}
<div class="form-group">
	{!! Form::label('NIM','NIM')!!}
	{!! Form::text('NIM',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('name','Nama')!!}
	{!! Form::text('name',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('birthplace','birthplace')!!}
	{!! Form::text('birthplace',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('birthday','birthday') !!}
	{!! Form::input('date','birthday',date('Y-m-d'),['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('faculty','faculty')!!}
	{!! Form::text('faculty',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('department','department')!!}
	{!! Form::text('department',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('malang_address','malang_address')!!}
	{!! Form::text('malang_address',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('origin_address','origin_address')!!}
	{!! Form::text('origin_address',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('input',['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
@stop