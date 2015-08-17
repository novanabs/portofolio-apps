@extends('partial.layout')
@section('title') All Articles @stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3" style="height:400px; background-color:white;">

		</div>
		<div class="col-md-9">
			<div class="row">
				@foreach($article as $item)
				<div class="col-md-4">
					<div class="thumbnail" style="padding:15px;">
						<h2 class="page-header text-center">{!!$item->title!!}</h2>
					<div class="caption">
						<p>{!! $item->updated_at->format('D,m M Y')!!}
						
						</p>
						<br>
						<p>{!!str_limit($item->content,200,'....') !!}<a href="{!! route('user.article.show',$item->slug)!!}">Read more</a> </p>
					</div>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</div>
</div>

@stop