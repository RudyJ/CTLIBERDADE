@extends('adminlte::page')

@section('title', 'Painel Administrativo')


@section('content_header')
    <h1>Lista de Usuários</h1>
@stop
@section('content')
     
<div class="row">
	

<div class="col-md-12">
	<div class="box">
	  <div class="box-body">
	    <table id="myTable" class="table table-striped" data-page-length='10'>
		  <thead>
		  	<tr>
		  		<th>#</th>
		  		<th>Nome</th>
		  		<th>E-Mail</th>
		  		<th>Nível</th>
		  		<th>Status</th>
		  	</tr>
		  </thead>
		  <tbody>
		  	@foreach($usuarios as $user)
		  	<tr>
				<td>{{ $user->id }}</td>
				<td><a href="{{ route('admin.users.detalhes', [
					'uid' =>$user->public_key
					]) }}">{{ $user->name }}</a></td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->setNivel($user->nivel) }}</td>
				<td>{{ $user->setStatus($user->status) }}</td>
		  	</tr>
		  	@endforeach		  	
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