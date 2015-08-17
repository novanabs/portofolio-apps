@extends('partial._profile')

@section('title')
Profile
@stop

@section('css')
{!! HTML::style('assets/css/justified-nav.css')!!}
<style type="text/css">
a:hover{
	text-decoration: none;
}
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
	@if(!$checkArticle)
	@foreach($article as $item)
	<div class=" col-md-4">
		<div class="thumbnail">
			<a href="{!! route('user.article.show',$item->slug)!!}"><h2 class="text-center page-header">{!! $item->title!!}</h2></a>
			<div class="caption">
				<p>{!! str_limit($item->content,100,'.....')!!}</p>	
				@foreach($item->articleCategories as $category)
				<p><b>categori: </b>{!!$category->name!!}</p>
				@endforeach
				@if($url)
				<a href="{!!route('user.article.show',$item->slug)!!}"><button class="btn btn-primary"><i class="fa fa-eye"></i></button></a>
				<a href="{!!route('user.article.edit',$item->slug)!!}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
				{!! Form::open(['route'=>['user.article.destroy',$item->slug],'method'=>'delete', 'class'=>'pull-left']) !!}
				{!! Form::button('<i class="fa fa-remove"></i>', array(
				'type' => 'submit',
				'class'=> 'btn btn-primary',
				'onclick'=>'return confirm("Are you sure?")'
				)); !!}

				{!! Form::close() !!}
				@endif
			</div>
		</div>
	</div>
	@endforeach
	@else
	<h2>article Kosong </h2>

	@endif
</div>

@stop