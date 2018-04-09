@extends('adminlte::page')

@section('title', 'Painel Administrativo')

@section('css')
<!-- bootstrap-wysihtml5 -->
<link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.min.css') }}">
@stop

@section('content_header')
    <h1>Criar um Ticket</h1>
@stop
@section('content')

<form role="form" class="row">
	
	<div class="col-md-6">
		<div class="form-group">
          <label for="title">Título</label>
          <input type="text" class="form-control" id="title" placeholder="Digite o título">
        </div>		
	</div>
	<div class="col-md-6">
		<div class="form-group">
          <label for="title">Categoria</label>
          <select class="form-control">
          	<option>Selecionar categoria</option>
          </select>
        </div>		
    </div>
	<div class="col-md-12">
		<div class="form-group">
          <label for="title">Mensagem</label>
          <textarea class="textarea" style="width: 100%; height: 200px; font-size: 24px; line-height: 18px;"></textarea>
        </div>		
    </div>
	<div class="col-md-12">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>

@section('js')

<!-- bootstrap-wysihtml5 -->
<script src="{{ asset('vendor/adminlte/vendor/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script>
jQuery.noConflict();
(function( $ ) {
  $(function() {
		$(".textarea").wysihtml5({
			toolbar : {
 			"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
   		 	"emphasis": true, //Italics, bold, etc. Default true
		    "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
		    "html": false, //Button which allows you to edit the generated HTML. Default false
		    "link": true, //Button to insert a link. Default true
		    "image": true, //Button to insert an image. Default true,
		    "color": false, //Button to change color of font  
		    "blockquote": true, //Blockquote  
		    "size": 'lg' //default: none, other options are xs, sm, lg
			}
		});
  });
})(jQuery);
</script>
@stop

</form>

@stop