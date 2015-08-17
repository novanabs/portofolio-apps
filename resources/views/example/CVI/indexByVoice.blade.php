@extends('CVI.dashboard')
@section('content')

<table id="articles" class="table .table-condensed">
	<thead>
		<td>ID</td>
		<td>NIM</td>
		<td>Nama</td>
		<td>jenis Suara</td>
	</thead>
	@foreach($candidates as $candidate)
	<tr>
		<td>{!!$candidate->id !!}</td>
		<td>{!!$candidate->NIM!!}</td>
		<td>{!!$candidate->name!!}</td>
		<td>{!!$candidate->vocal->voice_type!!}</td>
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