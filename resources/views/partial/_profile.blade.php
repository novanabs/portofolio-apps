<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" href="{!! URL('uploads/images/p.ico')!!}">
  <title>@yield('title')</title>
  {!! HTML::style('assets/css/bootstrap.min.css')!!}
  {!! HTML::style('fonts/font-awesome.min.css')!!}
  {!! HTML::style('assets/css/justified-nav.css')!!}

  @yield('css')
</head>
<body >
  <div class="container">
    <div class="col-md-12" style="background-color:#F9690E; height:350px;">

    </div>
  </div>
  <div class="container">
    @include('partial.headerUser')
    @yield('content') 
  </div>
  @include('partial.footer')
  <body>
    {!! HTML::script('assets/js/jquery-2.1.4.min.js')!!}
    {!! HTML::script('assets/js/bootstrap.js')!!}
    @yield('js')
    </html>
