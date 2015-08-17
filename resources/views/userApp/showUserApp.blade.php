@extends('partial._profile')
@section('title') App : {!! $app->name!!} @stop
@section('css')
{!!HTML::style('assets/css/star.css')!!}
{!!HTML::style('fonts/font-awesome.min.css')!!}


@stop
@section('content')
<!--====================================================  header ==================================================================-->
  <div class="row" style="height:80px;">
      <div class="col-md-12">
        <a href="{!! route('profile.show',$user->id) !!}"><button class="btn btn-primary">Profile</button></a>
        @if($url)
        <a href="{!! route('article.create')!!}"><button class="btn btn-primary">Create Articles</button></a>
        <a href="{!! route('user.app.create')!!}"><button class="btn btn-primary">Upload App</button></a>
        <a href="{!! route('profile.create')!!}"><button class="btn btn-primary">Create Profile</button></a>
        @endif

      </div>
    </div>
    <div class="row" style="margin-bottom:20px;">
      <div class="col-md-12">
        <div class="masthead">
          <nav>
            <ul class="nav nav-justified">
              @if($url)
              <li><a href="#">Timeline</a></li>
              @endif
              <li><a href="{!! route('user.show',$app->users->name)!!}">Applications</a></li>
              <li><a href="{!! route('user.article.index',$app->users->name)!!}">Article</a></li>
              @if($url)
              <li><a href="#">Notification</a></li>
              @endif
            </ul>
          </nav>
        </div>
      </div>
    </div>
<!--======================================================================================================================-->

<div class="col-md-4">

</div>
<div class="col-md-8">
	<div class="caption">
		<img src="{!!asset($app->photo)!!}" class=" img-circle img-thumbnail">
		<h2>{!!$app->name!!}</h2>
		<p>Version  : {!!$app->version!!}</p>
		<p>Platform : {!!$app->platform!!}</p>
		<p>Description : 
			{!!$app->description!!}
		</p>
		<p>email : {!!$app->email!!}</p>
		<p class="pull-left">
			@if($app->rating_cache != 0)
			@for($i=0;$i<$app->rating_cache;$i++)
			<i class="fa fa-star fa-2x"></i>
			@endfor
			@else
			<p>No rating</p>
			@endif
		</p>
		<p class="pull-right">{!! $app->rating_count!!} <i class="fa fa-male"></i></p>
		<br><br>
	</div>
</div>
<div class="col-md-12">
	{!! Form::open(['route'=>['review.store']]) !!}
	{!! Form::hidden('application_id',$app->id) !!}
	
	<input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
	<label class="star star-5" for="star-5"></label>
	<input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
	<label class="star star-4" for="star-4"></label>
	<input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
	<label class="star star-3" for="star-3"></label>
	<input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
	<label class="star star-2" for="star-2"></label>
	<input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
	<label class="star star-1" for="star-1"></label>

	<div class="form-group  {{ $errors->has('comment') ? 'has-error' : ''}}">
		{!! Form::label('comment','Submit Your Review!')!!}
		{!! Form::textarea('comment',null,['class' => 'form-control']) !!}
		{!! $errors->first('comment', '<span class="help-block">:message</span>') !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
	</div>
</div>
<div class="col-md-12">
	<h2>Review Apps</h2>
	@foreach($review as $review)
	@if($review->rating !=0)
	@for($i=0;$i<$review->rating;$i++)
	<i class="fa fa-star"></i>
	@endfor
	@else
	<p>No rating</p>
	@endif
	<p>{{$review->users->name}}</p>
	<p>{{$review->comment}}</p>
	<hr>
	@endforeach
</div>

{!! Form::close() !!}	


@stop