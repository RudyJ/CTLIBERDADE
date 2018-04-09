@extends('adminlte::page')

@section('title', 'Painel Administrativo')


@section('content_header')
    <h1 class="pull-left">Tutorial</h1>
    <a href="#" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;Incluir novo Tutorial</a>
    <div class="clearfix"></div>
@stop
@section('content')


<div class="row">

<div class="col-md-12">
	<div class="box">
	  <div class="box-body">
	    <table id="myTable" class="table table-striped" data-page-length='5'>
		  <thead>
		  	<tr>
		  		<th>#</th>
		  		<th>Título</th>
		  		<th>Categoria</th>
		  		<th>Público</th>
		  	</tr>
		  </thead>
		  <tbody>
		  	@for($i=0;$i<10;$i++)
		  	<tr>
				<td>1</td>
				<td><a href="{{ route('admin.tutorialDetalhes', [ 'uid' => '123456789' ]) }}">Exemplo de título pra o tutorial grande pra caber</a></td>
				<td>Financeiro</td>
				<td>Administradores</td>
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