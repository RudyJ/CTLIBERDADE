@extends('adminlte::page')

@section('title', 'Painel Administrativo')

@section('css')
<!-- bootstrap-wysihtml5 -->
<link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.min.css') }}">

<style type="text/css">
	.responder{
		display: none;
	}
</style>

@stop

@section('content_header')
    <h1>Detalhes do Ticket</h1>
@stop
@section('content')


<div class="row">

<div class="col-md-8">
	

<ul class="timeline">

    <!-- timeline time label -->
    <li class="time-label">
        <span class="bg-red">
            10/02/2014
        </span>
    </li>
    <!-- /.timeline-label -->

    <!-- timeline item -->
    <li>
        <!-- timeline icon -->
        <i class="fa fa-envelope bg-blue"></i>
        <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

            <h3 class="timeline-header"><a href="#">Support Team</a> Fulano Sicrano</h3>

            <div class="timeline-body">
                ...
                Content goes here
            </div>

            <div class="timeline-footer">
                <p>
                	<a class="btn btn-primary btn-xs toggleResponder">Responder</a>
                </p>
                <div class="responder">
                	<form>
						<div class="form-group">
				          <textarea class="textarea" style="width: 100%; height: 200px; font-size: 24px; line-height: 18px;"></textarea>
				        </div>	
						<button type="submit" class="btn btn-primary">Enviar Resposta</button>		
						
					</form>
                </div>
            </div>
        </div>
    </li>
    <!-- END timeline item -->
    <!-- timeline item -->
    <li>
        <!-- timeline icon -->
        <i class="fa fa-user bg-green"></i>
        <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

            <h3 class="timeline-header"><a href="#">Filiado</a> Fulano Sicrano</h3>

            <div class="timeline-body">
                ...
                Content goes here
            </div>
        </div>
    </li>
    <!-- END timeline item -->
    <!-- timeline time label -->
    <li class="time-label">
        <span class="bg-red">
            10/02/2014
        </span>
    </li>
    <!-- /.timeline-label -->

    <!-- timeline item -->
    <li>
        <!-- timeline icon -->
        <i class="fa fa-envelope bg-blue"></i>
        <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

            <h3 class="timeline-header"><a href="#">Support Team</a> Fulano Sicrano</h3>

            <div class="timeline-body">
                ...
                Content goes here
            </div>
        </div>
    </li>
    <!-- END timeline item -->
    <!-- timeline item -->
    <li>
        <!-- timeline icon -->
        <i class="fa fa-user bg-green"></i>
        <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

            <h3 class="timeline-header"><a href="#">Filiado</a> Fulano Sicrano</h3>

            <div class="timeline-body">
                ...
                Content goes here
            </div>
        </div>
    </li>
    <!-- END timeline item -->


</ul>


</div>
<div class="col-md-4">
	<p>
		<img src="{{ url('storage/images/no-pic.png') }}" class="img-thumbnail rounded mx-auto d-block" alt="...">
	</p>
	<table class="table">
		<tr>
			<td><b>Nome</b></td>
			<td><a href="">Rudy Jordache Paes de Andrade Pereira</a></td>
		</tr>
		<tr>
			<td><b>E-Mail</b></td>
			<td>rjordache@hotmail.com</td>
		</tr>
		<tr>
			<td><b>CPF</b></td>
			<td>088.399.094-60</td>
		</tr>
		<tr>
			<td><b>RG</b></td>
			<td>7-827.229</td>
		</tr>
		<tr>
			<td><b>Cidade</b></td>
			<td>Recife</td>
		</tr>
		<tr>
			<td><b>UF</b></td>
			<td>PE</td>
		</tr>
		<tr>
			<td><b>Situação</b></td>
			<td>Ativo</td>
		</tr>
	</table>	
</div>
<div class="clearfix"></div>
</div>
<!-- /.box -->
@section('js')

<!-- bootstrap-wysihtml5 -->
<script src="{{ asset('vendor/adminlte/vendor/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script>
jQuery.noConflict();
(function( $ ) {
  $(function() {

  		$(".toggleResponder").click(function(e){
  			e.preventDefault();
  			$(".responder").toggle();
  		});

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

@stop