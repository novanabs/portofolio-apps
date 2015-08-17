@extends('CVI.dashboard')
@section('content')
<div class="col-md-12">
			<div class="row">
				{!! Form::open(['route' => 'vocal.interview.store']) !!}
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h2 class="panel-title">
								Input Vocal Value
							</h2>
						</div>
						<div class="panel-body">
							<div class="form-group">
								{!! Form::label('candidate_id','candidate id')!!}
								{!! Form::text('candidate_id',$candidate->id,['class' => 'form-control']) !!}
							</div>
							
							<div class="form-group">
								{!! Form::label('voice_type','voice type')!!}
    							{!! Form::select('voice_type',['Alto' => 'Alto','Bass' => 'Bass','Tenor' => 'Tenor','Sopran'=>'Sopran'], null, ['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('range','range')!!}
								{!! Form::text('range',null,['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('hearing','hearing')!!}
								{!! Form::text('hearing',null,['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('sight_reading','sight reading') !!}
								{!! Form::text('sight_reading',null,['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('part_singing','part singing')!!}
								{!! Form::text('part_singing',null,['class' => 'form-control']) !!}
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h2 class="panel-title">
								Input Interview Value
							</h2>
						</div>
						<div class="panel-body">
							<div class="form-group">
								{!! Form::label('candidate_id','candidate id')!!}
								{!! Form::text('candidate_id',$candidate->id,['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('leadership','leadership')!!}
								{!! Form::text('leadership',null,['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('solidarity','solidarity')!!}
								{!! Form::text('solidarity',null,['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('seriousness','seriousness') !!}
								{!! Form::text('seriousness',null,['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('personality','personality')!!}
								{!! Form::text('personality',null,['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('problem_solving','problem Solving')!!}
								{!! Form::text('problem_solving',null,['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('finance','finance')!!}
								{!! Form::text('finance',null,['class' => 'form-control']) !!}
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12" style="text-align:center; padding:20px;">
					{!! Form::submit('input',['class' => 'btn btn-primary btn-lg']) !!}
				</div>
				{!! Form::close() !!}
			</div>
		</div>
@stop
