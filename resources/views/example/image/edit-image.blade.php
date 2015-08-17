@extends('partial._dasboard')

@section('content')
   @include('image.error-notification')
   {!! Form::model($image,['url' => 'admin/image/'.$image->id, 'method' => 'PUT', 'files'=>true]) !!}

      <img src="{{ asset($image->file) }}" height="150" />
      <br><br>
      <div class="form-group">
         <label for="caption">Caption</label>
         {!! Form::text('caption',null,['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
         <label for="description">Description</label>
         {!! Form::textarea('description',null,['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
      {!! Form::file('userfile',null,['class'=>'form-control']) !!}
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
      <a href="{{ url('/image') }}" class="btn btn-warning">Cancel</a>

   {!! Form::close() !!}
@stop