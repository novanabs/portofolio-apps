<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{!! URL('uploads/admin.ico')!!}">

  <title>admin Page</title>

  {!! HTML::style('assets\css\bootstrap.min.css')!!}
  {!! HTML::style('assets\css\dasboard.css')!!}
  {!! HTML::style('assets\css\reset.css')!!}<!-- CSS reset -->
  {!! HTML::style('assets\css\style2.css')!!} <!-- tambahan style -->
  {!! HTML::style('assets\css\select2.min.css')!!}
  @yield('css')
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Hello,{!! Auth::user()->name !!}</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Settings</a></li>
          <li><a href="{!! URL('auth/login') !!}">Login</a></li>
          <li><a href="{!! URL('auth/logout') !!}">Logout</a></li>
          <li><a href="#">Help</a></li>
        </ul>
        <form class="navbar-form navbar-right">
          <input type="text" class="form-control" placeholder="Search...">
        </form>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          <li><a href="{!! url('admin')!!}">Timeline <span class="sr-only">(current)</span></a></li>
          <li><a href="{!! url('admin/table')!!}">Table</a></li>
          <li>{!! link_to_route('article.index','Article')!!}</li>
          <li><a href="{!! url('admin/image')!!}">Image</a></li>
        </ul>
        <ul class="nav nav-sidebar">
          <li><a href="{!! url('pdf')!!}">print Biodata</a></li>
          <li><a href="{!! url('admin/application')!!}">Application</a></li>
          <li><a href="">One more nav</a></li>
          <li><a href="">Another nav item</a></li>
          <li><a href="">More navigation</a></li>
        </ul>
      </div>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" >
        @yield('content')

      </div>
    </div>
  </div>

  <body>
    {!! HTML::script('assets/js/jquery-2.1.4.min.js')!!}
    {!! HTML::script('assets/js/bootstrap.js')!!}
    {!! HTML::script('assets/js/select2.min.js')!!}
    @yield('js')
    </html>
