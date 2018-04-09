@extends('adminlte::page')

@section('title', 'Painel Administrativo')


@section('content_header')
    <h1>Tickets</h1>
@stop
@section('content')


<div class="row">

<div class="col-md-4">
	<div class="box">
	  	<div class="info-box bg-yellow">
			  <!-- Apply any bg-* class to to the icon to color it -->
			  <span class="info-box-icon"><i class="fa fa-star-o"></i></span>
			  <div class="info-box-content">
			      <span class="info-box-text">Abertos</span>
			      <span class="info-box-number">93,139</span>
	              <div class="progress">
	                <div class="progress-bar" style="width: 70%"></div>
	              </div>
                  <span class="progress-description">
                    70% abertos
                  </span>
			  </div>
			  <!-- /.info-box-content -->
		</div>
	</div>
</div>
<div class="col-md-4">
	<div class="box">
	  	<div class="info-box bg-green">
			  <!-- Apply any bg-* class to to the icon to color it -->
			  <span class="info-box-icon"><i class="fa fa-bullhorn"></i></span>
			  <div class="info-box-content">
			      <span class="info-box-text">Respondidos</span>
			      <span class="info-box-number">93,139</span>
	              <div class="progress">
	                <div class="progress-bar" style="width: 70%"></div>
	              </div>
                  <span class="progress-description">
                    70% já foram respondidos
                  </span>
			  </div>
			  <!-- /.info-box-content -->
		</div>
	</div>
</div>
<div class="col-md-4">
	<div class="box">
	  	<div class="info-box bg-aqua">
			  <!-- Apply any bg-* class to to the icon to color it -->
			  <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
			  <div class="info-box-content">
			      <span class="info-box-text">Finalizados</span>
			      <span class="info-box-number">93,139</span>
	              <div class="progress">
	                <div class="progress-bar" style="width: 70%"></div>
	              </div>
	              <span class="progress-description">
	                70% Finalizados
	              </span>
              </div>
			  <!-- /.info-box-content -->
		</div>
	</div>
</div>

<div class="clearfix"></div>

<div class="col-md-12">
	<div class="box">
	  <div class="box-body">
	    <table id="myTable" class="table table-striped" data-page-length='5'>
		  <thead>
		  	<tr>
		  		<th>#</th>
		  		<th>UID</th>
		  		<th>Filiado</th>
		  		<th>Título</th>
		  		<th>Categoria</th>
		  		<th>Data</th>
		  		<th>Status</th>
		  	</tr>
		  </thead>
		  <tbody>
		  	@for($i=0;$i<10;$i++)
		  	<tr>
				<td>1</td>
				<td><a href="">123456789</a></td>
				<td>Filiado Teste</td>
				<td>Exemplo de título pra o ticket grande pra caber</td>
				<td>Financeiro</td>
				<td>06/04/2018 às 14:49</td>
				<td>Respondido</td>
		  	</tr>
		  	@endfor		  	
		  </tbody>
		</table>
	  </div>
	  <!-- /.box-body -->
	</div>
</div>

<div class="clearfix"></div>
</div>
<!-- /.box -->



@section('js')

<!-- bootstrap-wysihtml5 -->
<script>
jQuery.noConflict();
(function( $ ) {
  $(function() {
		$('#myTable').DataTable({
			language : {
				processing:     "Processando ...",
		        search:         "Buscar",
		        lengthMenu:    "Mostrar _MENU_ itens",
		        info:           "Mostrar do item _START_ ao _END_ de _TOTAL_ itens",
		        infoEmpty:      "MOstrar do item 0 ao 0 de 0 itens",
		        infoFiltered:   "(filtrado de _MAX_ itens ao total)",
		        infoPostFix:    "",
		        loadingRecords: "Carregando ...",
		        zeroRecords:    "Nenhum item para exibir",
		        emptyTable:     "Nenhum dado disponível na tabela",
		        paginate: {
		            first:      "Primeiro",
		            previous:   "Anterior",
		            next:       "Próximo",
		            last:       "Último"
		        },
		        aria: {
		            sortAscending:  ": ativar para classificar a coluna em ordem crescente",
		            sortDescending: ": ativar para classificar a coluna em ordem decrescente"
		        }
			}
		});
  });
})(jQuery);
</script>
@stop

@stop