@extends('partial.layout')
@section('title','aplikasi Portofolio UMM')
@stop
@section('css')
{!! HTML::style('assets/owl.carousel') !!}
  
<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
 
<!-- Default Theme -->
<link rel="stylesheet" href="owl-carousel/owl.theme.css">
 
 
<!-- Include js plugin -->
<script src="assets/owl-carousel/owl.carousel.js"></script>
@stop
@section('content')
<div class="col-md-12" style=" background-color; margin-bottom:20px;">
  <div class="container" >
    <div class="row">
    <div class="col-md-12 text-center">
      <h3>Apps of the Month!</h3>
    </div>
       <div class="col-md-4">
          <div class="thumbnail text-center" style="background-color:#F5AB35; height:300px; padding:105px;">

            <h1>404</h1>
          </div>
       </div>
       <div class="col-md-4" >
          <div class="thumbnail text-center" style="background-color:#F5AB35; height:300px; padding:105px;">
             <h1>404</h1>
          </div>
       </div>
       <div class="col-md-4" >
          <div class="thumbnail text-center" style="background-color:#F5AB35; height:300px; padding:105px;">
             <h1>404</h1>
          </div>
       </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">   
    <div class="col-md-3">
      @foreach($article as $article)
      <div class="thumbnail text-justify" style="padding:20px;">
       <h4 class="text-center">{!! $article->title!!}</h4>
       <hr>
       <h6>{!! $article->updated_at->format('D,m M Y')!!}</h6>
       <p style="text-align:justify;">{!! str_limit($article->content,200,'...')!!}<a  href="{!! route('user.article.show',$article->slug)!!}"><button class="btn btn-primary">Read More</button></a></p>
     </div>
     @endforeach
     <h3>Article Category</h3>
     @foreach($ArticleCategory as $category)
    <a href="{!! route('ArticleCategories.show',$category->name)!!}"><h3><span class="label label-success">{!! $category->name!!}</span></h3></a>
     @endforeach

     <h3>App Category</h3>
     @foreach($AppCategory as $category)
     <a href="{!! route('AppCategories.show',$category->name)!!}"><h3><span class="label label-success">{!! $category->name!!}</span></h3></a>
     @endforeach

      
   </div>



   <div class="col-md-9">
    <div class="col-md-12">
      <h3>Communication APPs</h3>
      <p>Recommended for you</p>
    </div>
    <div class="rows">
      @foreach($app as $item)
      <div class="col-md-2" style=" background-color:white; padding:10px; margin:10px;">
          <a href="{!! route('user.app.show',$item->slug)!!}">
          <img src="{!! asset($item->photo)!!}" style=" width:100%; height:105px; margin-bottom:17px;" class="img-thumbnail ">      
          </a>
          <a href="{!! route('user.app.show',$item->slug)!!}"><h4>{!! $item->name!!}</h4></a>
          <p><small>{!! $item->users->name!!}</small></p>
          
          <p class="pull-left">
              @if($item->rating_cache != 0)
                @for($i=0;$i<$item->rating_cache;$i++)
                  <i class="fa fa-star"></i>
                @endfor
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
              @else
                <p>No rating</p>
              @endif
            </p>
            <p class="pull-right">{!! $item->rating_count!!} <i class="fa fa-male"></i></p>
          
      </div>
      @endforeach
    </div>
    <div class="col-md-12 text-center">
      {!! $app->render()!!}
    </div>
    <div class="col-md-12 text-center">
    </div>  
    
  </div>
</div>

</div>
@stop
