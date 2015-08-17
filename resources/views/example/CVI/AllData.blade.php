@extends('CVI.dashboard')
@section('css')
{!! HTML::style('assets/datatables/jquery.datatables.css')!!}
@stop
@section('content')
<a class="btn btn-primary"href="{!! route('candidate.voice','')!!}">Sopran</a>
<a class="btn btn-warning"href="{!! route('candidate.voice')!!}">Tenor</a>
<a class="btn btn-danger"href="{!! route('candidate.voice','Alto')!!}">Alto</a>
<a class="btn btn-success"href="{!! route('candidate.voice','Bass')!!}">Bass</a>
<br><br>
<table id="articles" class="table .table-condensed">
	<thead>
		<td>ID</td>
		<td>NIM</td>
		<td>Nama</td>
		<td>jenis Suara</td>
		<td>Total Vocal</td>
		<td>Total Interview</td>
		<td>ranking</td>
	</thead>

	@foreach($candidates as $candidate)
	<tr>
		<td>{!!$candidate->id !!}</td>
		<td>{!!$candidate->NIM!!}</td>
		<td>{!!$candidate->name!!}</td>
		<td>{!!$candidate->vocal->voice_type!!}</td>
		@if($candidate->vocal)
		<td>{!!$candidate->vocal->total_vocal!!}</td>
		@else
		<td>Kosong</td>
		@endif
		@if($candidate->interview)
		<td>{!!$candidate->interview->total_interview!!}</td>
		@else
		<td>Kosong</td>
		@endif
		@if($candidate->interview && $candidate->vocal)
		<td>{!! (0.6*$candidate->vocal->total_vocal)+(0.4*$candidate->interview->total_interview) !!}</td>
		@else
		<td>Kosong</td>
		@endif
	</tr>
	@endforeach
</table>
@stop
@section('js')
{!! HTML::script('assets\js\jquery.dataTables.js') !!}

<script type="text/javascript">
$(document).ready(function() {
  $('#articles').DataTable();
} );

</script>

@stop