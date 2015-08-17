@extends('partial._profile')

@section('title')
Profile {!! $user->name!!}
@stop

@section('css')
<style type="text/css">
img:hover
{
	opacity: 0.4;
}

</style>
@stop

@section('content')
<!--====================================================  header ==================================================================-->
  <div class="row" style="height:80px;">
      <div class="col-md-12">
        <a href="{!! route('profile.show',$user->id) !!}"><button class="btn btn-warning">Profile</button></a>
        @if($url)
        <a href="{!! route('user.article.create')!!}"><button class="btn btn-warning">Create Articles</button></a>
        <a href="{!! route('user.app.create')!!}"><button class="btn btn-warning">Upload App</button></a>
        <a href="{!! route('profile.create')!!}"><button class="btn btn-warning">Create Profile</button></a>
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
              <li><a href="{!! route('user.show',$user->name)!!}">Applications</a></li>
              <li><a href="{!! route('user.article.index',$user->name)!!}">Article</a></li>
              @if($url)
              <li><a href="#">Notification</a></li>
              @endif
            </ul>
          </nav>
        </div>
      </div>
    </div>
<!--======================================================================================================================-->


<div class="row">
	<div class="container">
		@foreach($app as $item)
		<div class="col-md-4 col-sm-4">
			@if(!$checkApp)
			<div class="thumbnail" style="background-color:wheat;">
          <div class="bg-success text-center">
            <img src="{!! asset($item->photo)!!}" style="height:220px;width:220px;margin-top:20px; margin-bottom:10px;" class="bg-success img-thumbnail img-circle">
          </div>  
          <div class="caption">
            @foreach($item->AppCategories as $category)
              <small class="label label-warning"><a href="{!! route('AppCategories.show',$category->name)!!}">{!! $category->name!!}</a></small>
            @endforeach
            <a href="{!! route('user.app.show',$item->slug)!!}"><h3 class="">{!! $item->name!!}</h3></a>
            <div class="bg-warning img-rounded" style="padding:10px;margin-bottom:5px;">
              <p>{!!  str_limit($item->description,59,'.....')!!}</p>
            </div>
            <p><b>Platform : </b>{!! $item->platform!!} <i class="fa fa-{!!$item->platform!!}" style="margin-left:10px;"></i></p>
            <p><b>Develope by:</b> <a href="{!! url('user/'.$item->users->name)!!}">{!! $item->users->name!!}</a></p>
            <p class="pull-left">
              @if($item->rating_cache != 0)
                @for($i=0;$i<$item->rating_cache;$i++)
                  <i class="fa fa-star"></i>
                @endfor
              @else
                <p>No rating</p>
              @endif
            </p>
            <p class="pull-right">{!! $item->rating_count!!} <i class="fa fa-male"></i></p>
            <br><br>
            @if($url)
				<a href="{!! route('user.app.edit',$item->slug) !!}"><button class="btn btn-primary">Edit</button></a>
				{!! Form::open(['route'=>['user.app.destroy',$item->slug],'method'=>'delete', 'class'=>'pull-left']) !!}
				{!! Form::submit('Delete', ['class' => 'btn btn-warning', 'onclick'=>'return confirm(\'Are you sure?\')']) !!}
				{!! Form::close() !!}
				@else
				<a class="text-center" href="{{$item->application}}" target="_blank"><p class=" label label-warning btn-block">Download</p></a>
				@endif
          </div>
        </div>
			@else
			<h1>Kosong</h1>
			@endif
		</div>
		@endforeach
		<div class="col-md-12 text-center">
		{!!  str_replace('/?', '?', $app->render())!!}
	</div>
</div>
@stop