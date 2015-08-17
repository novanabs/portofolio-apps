<html>
<head>
	<title>@yield('title')</title>
	{!! HTML::style('assets/css/bootstrap.css') !!}
	{!! HTML::style('fonts/font-awesome.min.css')!!}
	<link href='http://fonts.googleapis.com/css?family=Lato:300italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	@yield('css')
	<style type="text/css">
	
	.fa-star, .fa-star-o,.fa-male{
		font-size: 10px;
	}
	small
	{
		font-family: 'Lato', serif; 

	}
	a{
		color:black;
	}
	a:hover{
		text-decoration: none;
		font-color:black;
	}
	.label:hover{
		opacity:0.6;
	}
	html{
    height: auto;
	}
	body{
    	height: auto;
    	margin: 0;
    	background-repeat: no-repeat;
    	background-attachment: fixed;
    	background: -webkit-linear-gradient(#f39c12,#e67e22); /* For Safari 5.1 to 6.0 */
 		background: -o-linear-gradient(#f39c12,#e67e22); /* For Opera 11.1 to 12.0 */
  		background: -moz-linear-gradient(#f39c12,#e67e22); /* For Firefox 3.6 to 15 */
  		background: linear-gradient(#f39c12,#e67e22); /* Standard syntax */
		
        
	}

	h4 { 
		font-family: 'Roboto'; 
		margin-top: 0; 
		margin-bottom: 0; 
	}
	p{
		margin-top: 0; 
		margin-bottom: 0;
	}

	</style>
	<link rel="shortcut icon" href="{!! URL('uploads/images/p.ico')!!}">

</head>
<body>
	<section>
		@include('partial.header')
	</section>
	<section>
		@yield('content')
	</section>
	<section>
		@include('partial.footer')
	</section>
</body>
{!! HTML::script('assets/js/jquery-2.1.4.min.js') !!}
{!! HTML::script('assets/js/bootstrap.js') !!}
@yield('js')
</html>