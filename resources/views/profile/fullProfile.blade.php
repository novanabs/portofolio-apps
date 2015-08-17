@extends('partial._profile')
@section('title') Full Profile @stop
@section('content')
<img src="{!! asset($profile->photo)!!}" class="img-rounded" style="height:100px;width:80px;">

<h2>{!! $profile->full_name !!}</h2>
<h4>{!! $profile->birthplace.','.$profile->birthday!!}</h4>
<h4>{!! $profile->domisili !!}</h4>
<h4>{!! $profile->full_name !!}</h4>
<h4>{!! $profile->gender!!}</h4>
<h4>{!! $profile->religion!!}</h4>
<h4>{!! $profile->status!!}</h4>
<h4>{!! $profile->occupation!!}</h4>
<h4>{!! $profile->phone_number!!}</h4>
<h4>{!! $profile->users->email!!}</h4>

@stop