<div class="form-group  {{ $errors->has('title') ? 'has-error' : ''}}">
	{!! Form::label('Nama','Nama')!!}
	{!! Form::text('name',null,['class' => 'form-control']) !!}
	{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText,['class' => 'btn btn-primary']) !!}
</div>
