<html>
<head>
	<title></title>
	{!!HTML::style('assets/css/bootstrap.css')!!}
</head>
<body>
	<div class="container" style="background-color:red;padding:20px; 10px">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-primary" style="backgroundcolor:tomato;">
					<div class="panel-heading">
					<h2 class="panel-title">Candidate</h2>
					</div>
					
					<div class="panel-body">
						<table class="table table striped">
							<tbody>
							<tr>
								<td>NIM </td>
								<td>{!! $candidate->NIM!!}</td>
							</tr>
							<tr>
								<td>Nama</td>
								<td>{!! $candidate->name!!}</td>
							</tr>
							</tbody>
						</table>	
					</div>
				</div>
			</div>
			@if($vocal)
			<div class="col-md-4">
				<div class="panel panel-primary" style="backgroundcolor:red;">
					<div class="panel-heading">
						<h2 class="panel-title">Vocal</h2>
					</div>
					<div class="panel-body">
						<table class="table table striped">
							<tbody>
							<tr>
								<td>Range</td>
								<td>{!! $vocal->range!!}</td>
							</tr>	
							<tr>
								<td>Hearing </td>
								<td>{!! $vocal->hearing!!}</td>
							</tr>
							<tr>
								<td>Sight reading</td>
								<td>{!! $vocal->sight_reading!!}</td>
							</tr>
							<tr>
								<td>Part Singing</td>
								<td>{!! $vocal->part_singing!!}</td>
							</tr>
							<tr>
								<td>Total Vocal</td>
								<td>{!! $vocal->total_vocal!!}</td>
							</tr>
							</tbody>
						</table>	
					</div>
				</div>
			</div>
			@endif
			@if($interview)
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
					<h2 class="panel-title">Interview</h2></div>
					<div class="panel-body">
						<table class="table table striped">
							<tbody>
							<tr>
								<td>Leadership</td>
								<td>{!! $interview->leadership!!}</td>
							</tr>
							<tr>
								<td>Solidarity</td>
								<td>{!! $interview->solidarity!!}</td>
							</tr>
							<tr>
								<td>Seriousness</td>
								<td>{!! $interview->seriousness!!}</td>
							</tr>
							<tr>
								<td>Personality</td>
								<td>{!! $interview->personality!!}</td>
							</tr>
							<tr>
								<td>Problem Solving</td>
								<td>{!! $interview->problem_solving!!}</td>
							</tr>
							<tr>
								<td>Finance</td>
								<td>{!! $interview->finance!!}</td>
							</tr>
							<tr>
								<td>Total Interview</td>
								<td>{!! $interview->total_interview!!}</td>
							</tr>			
							</tbody>
						</table>
					</div>
				</div>
			</div>
			@endif
		</div>
	<div class="col-md-12" style="background-color:tomato;height:200px;">
			{!! $interview->finance + $interview->problem_solving!!}
	</div>
	</div>
</body>
</html>