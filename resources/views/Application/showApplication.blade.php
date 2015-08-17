@extends('partial._dasboard')
@section('content')
<div class="container">
	<article>
		<h2>{!! ($app->name) !!}</h2>
		<h4>{!! nl2br($app->description) !!}</h4>
		
	</article>
	
	{!! link_to_route('application.index','go back to application feed');!!}
</div>

@stop