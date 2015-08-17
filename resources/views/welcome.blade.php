@extends('partial.layout')
@section('title','aplikasi Portofolio UMM')
@stop
@section('content')
<div class="col-md-12" style="height:300px; background-color:gold; margin-bottom:20px;">
  <div class="container" >
    <div class="row">
       <div class="col-md-4">
          <div class="thumbnail" style="background-color:tomato; height:300px;">

          </div>
       </div>
       <div class="col-md-4" >
          <div class="thumbnail" style="background-color:tomato; height:300px;">

          </div>
       </div>
       <div class="col-md-4" >
          <div class="thumbnail" style="background-color:tomato; height:300px;">

          </div>
       </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">   
    <div class="col-md-3">
      @foreach($article as $article)
      <div class="panel" style="padding:10px;">
       <h4 class="text-center">{!! $article->title!!}</h4>
       <hr>
       <p style="text-align:justify;">{!! str_limit($article->content,200,'...')!!}<a href="{!! route('user.article.show',$article->slug)!!}">Read More</a></p>
     </div>
     @endforeach
     <h3>Article Category</h3>
     @foreach($ArticleCategory as $category)
    <a href="{!! route('ArticleCategories.show',$category->name)!!}"><h3><span class="label label-success">{!! $category->name!!}</span></h3></a>
     @endforeach

     <h3>App Category</h3>
     @foreach($AppCategory as $category)
     <a href="{!! route('AppCategories.show',$category->name)!!}"><h3><span class="label label-success">{!! $category->name!!}</span></h3></a>@endforeach
   </div>

   <div class="col-md-9">
    <div class="rows">
      @foreach($app as $item)
      <div class="col-md-4 col-sm-4">
        <div class="thumbnail">
          <img src="{!! asset($item->photo)!!}" style="height:80px;width:80px;margin-top:20px; margin-bottom:-10px;" class="img-thumbnail">
          <div class="caption">
            <a href="{!! route('user.app.show',$item->slug)!!}"><h3 class="text-center">{!! $item->name!!}</h3></a>
            <p>Version : {!! $item->version!!}</p>
            <p>Category:
            @foreach($item->AppCategories as $category)
              <small class="label label-success">{!! $category->name!!}</small>
            @endforeach
            </p>
            <p>Platform : {!! $item->platform!!}</p>
            <p>Develope by: <a href="{!! url('user/'.$item->users->name)!!}">{!! $item->users->name!!}</a></p>
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
            <a href="{!! asset($item->application)!!}" target="_blank">
            
              <button class="btn btn-primary text-center">Download</button>

            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="col-md-12 text-center">
    {!! $app->render()!!}
    </div>  
    
  </div>
</div>

</div>
<div class="col-md-12" style="height:40px; background-color:black;">

</div>
@stop
