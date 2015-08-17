@extends('partial._dasboard')
@section('css')
{!! HTML::style('assets\datatables\jquery.dataTables.css') !!}
@stop
@section('content')
<p>{!! link_to_route('application.create','Create New application');!!}</p>

	<table id="articles" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>user id</th>
						<th>name</th>
						<th>description</th>
						<th>category</th>
						<th>platform</th>
						<th>version</th>
						<th>email</th>
						<th colspan='3' style="color:red; text-align:center;">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					@foreach($app as $app)
					<tr>
						<td> <?php echo $no++;?> </td>	
						<td> {{ $app->user_id}} </td>
						<td> {{ $app->name}} </td>
						<td> {{ substr($app->description,0,100)}} </td>
						<td> {{ $app->category}} </td>
						<td> {{ $app->platform}} </td>
						<td> {{ $app->version}} </td>
						<td> {{ $app->email}} </td>
						<td><a href="{{url('admin/application',$app->id)}}" class="btn btn-primary">View</a></td>
             			<td><a href="{{route('application.edit',$app->id)}}" class="btn btn-warning">Update</a></td> 
						<td>
						{!! Form::open(['route'=>['application.delete', $app->id],'method' => 'DELETE']) !!}
  				        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             			{!! Form::close() !!}</td>  
							
					</tr>
					@endforeach
				</tbody>
			</table>
@stop