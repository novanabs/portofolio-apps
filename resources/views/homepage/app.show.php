<div class="rows">
      @foreach($app as $item)
      <div class="col-md-4 col-sm-4">
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
            <p><b>Platform : </b>{!! $item->platform!!}<i class="fa fa-{!!$item->platform!!}" style="margin-left:10px;"></i></p>
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
            <a href="{!! asset($item->application)!!}" target="_blank">
            
              <button class="btn btn-warning btn-block text-center">Download</button>

            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>