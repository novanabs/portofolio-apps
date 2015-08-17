{!! Form::hidden('user_id',Auth::user()->id) !!}
@if($update)
	<img src="{{asset($app->photo)}}" style="height:100px; width:80px;">
@endif
<div class="form-group  {{ $errors->has('photo') ? 'has-error' : ''}}">
    {!! Form::label('photo','Photo')!!}
    {!! Form::file('photo',null,['class' => 'form-control']) !!}
	{!! $errors->first('photo', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group  {{ $errors->has('name') ? 'has-error' : ''}}">
	{!! Form::label('name','Name')!!}
	{!! Form::text('name',null,['class' => 'form-control']) !!}
	{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group">
	{!! Form::label('AppCategoryList','category')!!}
	{!! Form::select('AppCategoryList[]', $AppCategories , null , ['id' =>'AppCategoryList','class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('description','description')!!}
	{!! Form::textarea('description',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('version','Version')!!}
	{!! Form::text('version',null,['class' => 'form-control']) !!}
</div>

<div class="form-group  {{ $errors->has('email') ? 'has-error' : ''}}">
	{!! Form::label('email','Email')!!}
	{!! Form::text('email',null,['class' => 'form-control']) !!}
	{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group">
	{!! Form::label('platform','Platform')!!}
	    {!! Form::select('platform',['android' => 'android','windows' => 'windows','apple' => 'apple','web-based'=>'web-based'], null, ['class' => 'form-control']) !!}
</div>
@if($update)
	<p>{{$app->application}}</p>
@endif
<div class="form-group  {{ $errors->has('application') ? 'has-error' : ''}}">
    {!! Form::label('application','Upload File App')!!}
    {!! Form::file('application',null,['class' => 'form-control']) !!}
	{!! $errors->first('application', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText,['class' => 'btn btn-primary']) !!}
</div>


