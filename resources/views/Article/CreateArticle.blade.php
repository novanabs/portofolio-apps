@extends('partial._profile')
@section('css')
{!! HTML::style('assets/css/select2.min.css')!!}
@stop

@section('content')
	<h2>Create New Article</h2>

	{!! Form::open(['route' => 'article.store','id'=>'my_form']) !!}

		@include('partial._formArticle',['submitButtonText' =>'Add Article'])

	{!! Form::close() !!}	

@stop
@section('js')
{!! HTML::script('assets/js/select2.min.js')!!}
{!! HTML::script('assets/tinymce/tinymce.min.js')!!}
<script type="text/javascript">
tinymce.init({
    selector: "textarea#content",
    theme: "modern",
    plugins: [
         "advlist autolink link image lists charmap preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 }); 
</script>
@stop