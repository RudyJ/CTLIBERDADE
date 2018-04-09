@extends('adminlte::page')

@section('title', 'Painel Administrativo')

@section('css')
<!-- bootstrap-wysihtml5 -->
<link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.min.css') }}">

@stop

@section('content_header')
    <h1>Configurações</h1>
@stop
@section('content')

<div class="row">
	<div class="col-md-12">
		<h4>Termos e Condições</h4>
    	<form>
			<div class="form-group">
	          <textarea class="textarea" style="width: 100%; height: 200px; font-size: 24px; line-height: 18px;"></textarea>
	        </div>
			<div class="form-group">	
				<button type="submit" class="btn btn-primary">Atualizar</button>
			</div>	
			
		</form>
	</div>
</div>

<div class="row">
	
	<div class="col-md-4">
		<div class="box">
			<div class="box-body bg-green">
				<h4>Status do WebSite</h4>
				<p><small><i class='fa fa-warning'></i>&nbsp;Não mexa se não souber o que está fazendo.</small></p>
				<form>		
					<div class="form-group">
						<label>Tipo</label>
						<select class="form-control">
							<option>No AR</option>
							<option>Modo Manutenção</option>
						</select>
					</div>			
					<div class="form-group">
						<button type="submit" class="btn btn-info">Atualizar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="box-body bg-orange">
				<h4>Dados da Conta de E-Mail</h4>
				<p><small><i class='fa fa-warning'></i>&nbsp;Não mexa se não souber o que está fazendo.</small></p>
				<form>
					<div class="form-group">
						<label>Servidor</label>
						<input type="text" name="" class="form-control" />
					</div>
					<div class="form-group">
						<label>E-Mail</label>
						<input type="text" name="" class="form-control" />
					</div>		
					<div class="form-group">
						<label>Senha</label>
						<input type="password" name="" class="form-control" />
					</div>		
					<div class="form-group">
						<label>Porta</label>
						<input type="text" name="" class="form-control" />
					</div>	
					<div class="form-group">
						<button type="submit" class="btn btn-success">Atualizar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box">
			<div class="box-body bg-red">
				<h4>Dados PagSeguro</h4>
				<p><small><i class='fa fa-warning'></i>&nbsp;Não mexa se não souber o que está fazendo.</small></p>
				<form>
					<div class="form-group">
						<label>Usuário</label>
						<input type="text" name="" class="form-control" />
					</div>
					<div class="form-group">
						<label>Token</label>
						<input type="text" name="" class="form-control" />
					</div>			
					<div class="form-group">
						<label>Tipo</label>
						<select class="form-control">
							<option>Sandbox</option>
							<option>Produção</option>
						</select>
					</div>			
					<div class="form-group">
						<button type="submit" class="btn btn-warning">Atualizar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

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
@stop