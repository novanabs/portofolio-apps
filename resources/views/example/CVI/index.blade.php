@extends('CVI.dashboard')
@section('content')
<h3><a href="{{route('candidate.create')}}">add Candidate</a></h3>

<table class="table table-striped">
	<thead>
		<td>ID</td>
		<td>NIM</td>
		<td>Nama</td>
		<td>Action</td>
	</thead>

	@foreach($candidates as $candidate)
	<tr>
		<td>{!!$candidate->id !!}</td>
		<td>{!!$candidate->NIM!!}</td>
		<td>{!!$candidate->name!!}</td>
		<td>
			@if(!$candidate->vocal && !$candidate->interview)
			<a class="btn btn-success"  href="{!! route('vocal.interview.create',$candidate->id)!!}">input</a>
			@else
			<a class="btn btn-warning"  href="{!! route('candidate.show',$candidate->id)!!}">View</a>
			@endif
		</td> 	
	</tr>
	@endforeach
</table>
@stop