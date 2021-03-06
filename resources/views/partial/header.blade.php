<nav class="navbar navbar-default" style="margin-bottom:20px; background-color:white;">
  <div class="container">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{!! url('/')!!}">PROJECTTA</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">
          <li><a href="{!! url('/')!!}"><i class="fa fa-home"></i>Home</a></li>
          <li><a href="{!! url('about')!!}"><i class="fa fa-info-circle"></i>About</a></li>
          <li><a href="{!! route('all.apps')!!}"><i class="fa fa-rocket"></i>Apps Gallery</a></li>
          <li><a href="{!! route('all.article')!!}"><i class="fa fa-pencil"></i>Article</a></li>
          <li>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <!--<button type="submit" class="btn btn-default">Submit</button>-->
            </form>
          </li>
          @if(Auth::check())
          <li class="dropdown">          
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{!! Auth::user()->name !!}<span class="caret"></span></a>
           <ul class="dropdown-menu" role="menu">
            <li><a href="{!! url('user/'.Auth::user()->name)!!}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My Profile</a></li>
            <li class="divider"></li>
            <li><a href=""><span class="glyphicon glyphicon-list" aria-hidden="true"></span>Notifications</a></li>
            <li><a href=""><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Messages</a></li>
            <li class="divider"></li>
            <li><a href=""><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>Account Settings</a></li>
            <li><a href="{!! url('auth/logout')!!}"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>Log Out</a></li>
          </ul>
        </li>
        @else
        <li class="dropdown">          
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sign up<span class="caret"></span></a>
         <ul class="dropdown-menu" role="menu">
          <form  role="form" method="POST" action="{!! url('/auth/login') !!}">

            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            
            <li style="padding:4px">Email</li>
            <li style="padding:4px">
              <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            </li>
            <li style="padding:4px">Password</li>
            <li style="padding:4px">
              <input type="password" class="form-control" name="password">
            </li>
            <li style="padding:4px"><input type="checkbox" name="remember">Remember Me</li>


            <li style="text-align:center;"><button type="submit" class="btn btn-primary">Login</button></li>
            <hr>
            <li style="text-align:center;"><a href="{{ url('/auth/register') }}">Register</a></li>
            
          </form>
        </ul>
      </li>
      @endif
    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</div>
</nav>