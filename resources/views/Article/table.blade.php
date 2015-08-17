@extends('partial._dasboard')
@section('css')
{!! HTML::style('assets/datatables/jquery.datatables.css')!!}
@stop
@section('content')
<!---------------------------------------------------->
<table id="articles" class="table table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Title</th>
      <th>Content</th>
      <th>Slug</th>
      <th>Publish</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; ?>
    @foreach($articles as $article)
    <tr>
      <td> <?php echo $no++;?> </td>
      <td> {{ $article->title}} </td>
      <td> {{ substr($article->body,0,100).'....'}} </td>
      <td> {{ $article->slug}}</td>
      <td> {{ $article->published_at}} </td>
      <td> {!! link_to_route('article_edit','Edit ',[$article->slug])!!} | {!! link_to_route('article_edit',' Delete',[$article->slug])!!} </td>
    </tr>
    @endforeach
  </tbody>
</table>

<!---------------------------------------------------->
@stop
@section('js')
{!! HTML::script('assets\js\jquery.dataTables.js') !!}

<script type="text/javascript">
$(document).ready(function() {
  $('#articles').DataTable();
} );

</script>

@stop