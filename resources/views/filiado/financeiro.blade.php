@extends('adminlte::page')

@section('title', 'Painel Administrativo')


@section('content_header')
    <h1>Financeiro</h1>
@stop
@section('content')
 

<div class="row">

	<div class="col-md-12">
		
		<div class="info-box bg-red">
			<span class="info-box-icon"><i class="fa fa-warning"></i></span>
			  <div class="info-box-content">
			      <span class="info-box-text">Pendência</span>
			      <span class="info-box-number">O pagamento da sua anualidade vigente está pendente, <a href="" class="btn btn-danger">clique aqui para pagar</a>.</span>
			</div>
		</div>

	</div>

	<div class="col-md-12">
		<div class="box">
		  <div class="box-body">
		    <table id="myTable" class="table table-striped" data-page-length='5'>
			  <thead>
			  	<tr>
			  		<th>#</th>
			  		<th>UID</th>
			  		<th>Tipo</th>
			  		<th>Valor</th>
			  		<th>Data</th>
			  		<th>Vencimento</th>
			  	</tr>
			  </thead>
			  <tbody>
			  	@for($i=0;$i<10;$i++)
			  	<tr>
					<td>1</td>
					<td><a href="" title="clique para ver a fatura">123456789</a></td>
					<td>Anuidade</td>
					<td>R$ 250,00</td>
					<td>06/04/2018</td>
					<td>06/04/2019</td>
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