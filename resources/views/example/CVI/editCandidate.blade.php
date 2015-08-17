<html>
<head>
	<title></title>
	{!! HTML::style('assets/css/bootstrap.css')!!}
</head>
<body>
<div class="container">
		<h1>input candidate</h1>
		{!! Form::open($candidates,['route' =>['candidate.update',$article->id], 'method' => 'PATCH') !!}
			@include('CVI.form',['submitButton' =>'Update Data Candidate'])
		{!! Form::close() !!}	
</div>
</body>
</html>
		