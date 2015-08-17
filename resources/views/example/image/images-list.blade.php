@extends('partial._dasboard')
@section('content')
   <div class="row">
      @if(count($images) > 0)
         <div class="col-md-12 text-center" >
            <a href="{{ route('image.create') }}" class="btn btn-primary" role="button">
               Add New Image
            </a>
            <hr />
            @include('image.error-notification')
         </div>
      @endif
      @forelse($images as $image)
         <div class="col-md-3">
            <div class="thumbnail">
               <a href="{!! route('image.show',$image->id)!!}"><img style="height:120px;width:120px;" src="{{asset($image->file)}}" /></a>
               <div class="caption">
                  <h4>Caption : {{$image->caption}}</h4>
                  <p>Description : {!! substr($image->description, 0,100) !!}</p>
                  <p>
                     <div class="row text-center" style="padding-left:1em;">
                     <a href="{{ url('admin/image/'.$image->id.'/edit') }}" class="btn btn-warning pull-left">Edit</a>
                     <span class="pull-left">&nbsp;</span>
                     {!! Form::open(['url'=>'admin/image/'.$image->id, 'class'=>'pull-left']) !!}
                     {!! Form::hidden('_method', 'DELETE') !!}
                     {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick'=>'return confirm(\'Are you sure?\')']) !!}
                     {!! Form::close() !!}
                     
                     </div>
                  </p>
               </div>
            </div>
         </div>
      @empty
         <p>No images yet, <a href="{{ route('image.create') }}">add a new one</a>?</p>
      @endforelse
   </div>
   <div align="center">{!! $images->render() !!}</div>
@stop