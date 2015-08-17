<div class="form-group  {{ $errors->has('photo') ? 'has-error' : ''}}">
    {!! Form::label('photo','Photo')!!}
    {!! Form::file('photo',null,['class' => 'form-control']) !!}
	{!! $errors->first('photo', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group  {{ $errors->has('full_name') ? 'has-error' : ''}}">
	{!! Form::label('full_name','Full Name')!!}
	{!! Form::text('full_name',null,['class' => 'form-control']) !!}
	{!! $errors->first('full_name', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
	{!! Form::label('birthplace','Tempat Lahir')!!}
	{!! Form::text('birthplace',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('birthday','Tanggal Lahir')!!}
	{!! Form::input('date','birthday',date('Y-m-d'),['class' => 'form-control']) !!}

</div>

<div class="form-group">
	{!! Form::label('domisili','Domilisi')!!}
	{!! Form::text('domisili',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('gender','Gender')!!}
   	{!! Form::select('gender',['Laki-Laki' => 'Laki-Laki','Perempuan' => 'Perempuan'], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('religion','Agama')!!}
	{!! Form::select('religion',['Islam' => 'Islam','Kristen'=>'Kristen','Katolik'=>'Katolik','Budha'=>'Budha','Hindu'=>'Hindu'],null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('status','status')!!}
	{!! Form::select('status',['Belum Menikah' => 'Belum menikah','Menikah' => 'Menikah'], null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('occupation','Pekerjaan')!!}
	{!! Form::text('occupation',null,['class' => 'form-control']) !!}
</div>
<div class="form-group  {{ $errors->has('phone_number') ? 'has-error' : ''}}">	
	{!! Form::label('phone_number','No. Handphone')!!}
	{!! Form::text('phone_number',null,['class' => 'form-control']) !!}
	{!! $errors->first('phone_number', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group  {{ $errors->has('email') ? 'has-error' : ''}}">	
	{!! Form::label('email','Email')!!}
	{!! Form::text('email',null,['class' => 'form-control']) !!}
	{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText,['class' => 'btn btn-primary']) !!}
</div>
