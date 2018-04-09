@extends('adminlte::page')

@section('title', 'Painel Administrativo')


@section('content_header')
    <h1>Principal</h1>
@stop
@section('content')

<div class="row">
	
	<div class="col-md-8 col-md-offset-2">
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" height="250" src="https://www.youtube.com/embed/videoseries?list=PLItU4SxlLF7eXYK9tQshSvowQBmk6KsSX" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
	</div>
	<div class="col-md-12">
		<h3>Atualizações do sistema</h3>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Versão</th>
					<th>Detalhes</th>
					<th>Data</th>
				</tr>
			</thead>
			<tbody>				
			  	@for($i=0;$i<10;$i++)
			  	<tr>
					<td>1.0.0.1</td>
					<td>Atualizou tal coisa do sistema que tava foda</td>
					<td>06/04/2019</td>
			  	</tr>
			  	@endfor		 
			</tbody>
		</table>
	</div>


</div>

@stop