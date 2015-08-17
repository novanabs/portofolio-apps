@extends('partial._dasboard')
@section('css')
{!! HTML::style('assets\datatables\jquery.dataTables.css') !!}
@stop
@section('content')
<p>{!! link_to_route('article_create','Create New Article');!!}</p>
<p>{!! link_to_route('tag.create','Create New Tag');!!}</p>
<p>{!! link_to_route('application.create','Create New application');!!}</p>

	<table id="articles" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>tag</th>
						<th>Title</th>
						<th>Content</th>
						<th>Slug</th>
						<th>Publish</th>
						<th colspan='3' style="color:red; text-align:center;">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					@foreach($article as $article)
					<tr>
						<td> <?php echo $no++;?> </td>
						<td> 
							@foreach($article->tags as $tag)
								{{ $tag->name.' ' }}
							@endforeach

						</td>	
						<td> {{ $article->title}} </td>
						<td> {{ substr($article->body,0,100)}} </td>
						<td> {{ $article->slug}}</td>
						<td> {{ $article->published_at}} </td>
						<td><a href="{{url('admin/article',$article->slug)}}" class="btn btn-primary">View</a></td>
             			<td><a href="{{route('article_edit',$article->slug)}}" class="btn btn-warning">Update</a></td> 
						<td>
						{!! Form::open(['route'=>['article_delete', $article->id],'method' => 'DELETE']) !!}
  				        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             			{!! Form::close() !!}</td>  
							
					</tr>
					@endforeach
				</tbody>
			</table>
@stop