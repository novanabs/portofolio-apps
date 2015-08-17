@extends('partial.layout')
@section('title') All Articles @stop
@section('content')
<div class="container" >
<div class="row">
	<div class="col-md-3" style="height:300px; background-color:white;">
	<h3>Article Category</h3>
     @foreach($ArticleCategory as $category)
    <a href="{!! route('ArticleCategories.show',$category->name)!!}"><h3><span class="label label-success">{!! $category->name!!}</span></h3></a>
     @endforeach
	</div>
	<div class="col-md-9">
	<div class="row">
		@foreach($articles as $item)
		<div class="col-md-4">
			<div class="thumbnail">
				<h4 class="text-center"><a href="{!! route('user.article.show',$item->slug)!!}">{!! $item->title!!}</a></h4>
				<hr>
				<div class="caption">
				<p>{!! 'Post on '.$item->updated_at->format('Mm, Y') !!} by <a href="{!! route('user.show',$item->users->name)!!}">{!!$item->users->name!!}</a></p>
				<br>
				<p>{!! str_limit($item->content,200,'......')!!} <a href="{!! route('user.article.show',$item->slug)!!}"><button class="btn">read More</button></a></p>
				</div>
			</div>	
		</div>
		@endforeach
		<div class="col-md-12 text-center">
			{!! $articles->render()!!}
		</div>
	</div>
	</div>
</div>
</div>
@stop