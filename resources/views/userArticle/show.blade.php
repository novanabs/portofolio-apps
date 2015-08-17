@extends('partial.layout')

@section('title') {!! $article->title!!} @stop
@section('css')
{!!HTML::style('assets/css/star.css')!!}
{!!HTML::style('fonts/font-awesome.min.css')!!}


@stop
@section('content')
<div class="container">
 <div class="row">
  <div class="col-md-4" style="height:400px;background-color:white;">
   </div>

   <div class="col-md-8">
      <div class="thumbnail">
        <h3 class="page-header text-center">{!! $article->title!!}</h3>
        <div class="caption">
          <p>posted on {!! $article->updated_at->format('D,m M Y')!!} by <a href="{!! url('user/'.$article->users->name) !!}">{!! $article->users->name!!}</a></p>
          <br>
          <p>{!! $article->content!!}</p>
        </div>
      </div>
    <div>
</div>
</div>
@stop