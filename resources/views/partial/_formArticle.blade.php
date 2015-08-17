<!--{!! Form::hidden('user_id',1)!!}-->
<div class="form-group  {{ $errors->has('title') ? 'has-error' : ''}}">
	{!! Form::label('title','Title')!!}
	{!! Form::text('title',null,['class' => 'form-control']) !!}
	{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group">
	{!! Form::label('content','Content')!!}
	{!! Form::textarea('content',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('ArticleCategoryList','Platform')!!}
	{!! Form::select('ArticleCategoryList[]',$ArticleCategories,null, ['id' =>'ArticleCategoryList','class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText,['class' => 'btn btn-primary']) !!}
</div>
