@extends('adminlte::page')

@section('title', 'Painel Administrativo')


@section('content_header')
    <h1>Lista de Filiados</h1>
@stop
@section('content')
   
<div class="row">
	

<div class="col-md-12">
	<div class="box">
	  <div class="box-body">
	    <table id="myTable" class="table table-striped" data-page-length='25'>
		  <thead>
		  	<tr>
		  		<th>#</th>
		  		<th>Matrícula</th>
		  		<th>Nome</th>
		  		<th>Idade</th>
		  		<th>CPF</th>
		  		<th>UF</th>
		  		<th>Status</th>
		  	</tr>
		  </thead>
		  <tbody>
		  	@for($i=0;$i<2500;$i++)
		  	<tr>
				<td>{{ $i }}</td>
				<td><a href="">123456789</a></td>
				<td>Fulano Sicrano</td>
				<td>36</td>
				<td>088.399.094-60</td>
				<td>PE</td>
				<td>Ativo</td>
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