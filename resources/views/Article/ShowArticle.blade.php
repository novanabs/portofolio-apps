@extends('partial._profile')
@section('content')
<div class="container">
	<article>
		<h2>{!! ($article->title) !!}</h2>
		<h4>{!! nl2br($article->content) !!}</h4>
		
	</article>
</div>

@stop