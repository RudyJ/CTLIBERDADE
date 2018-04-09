@extends('adminlte::page')

@section('title', 'Painel Administrativo')


@section('content_header')
    <h1>Cadastrar Novo Usuário</h1>
@stop
@section('content')

<div class="row">
	
	<form class="col-md-6">
		<div class="form-group">
			<label>Nome</label>
			<input type="text" name="name" class="form-control" />
		</div>
		<div class="form-group">
			<label>E-Mail</label>
			<input type="email" name="email" class="form-control" />
		</div>
		<div class="form-group">
			<label>Nível</label>
			<select name="nivel" class="form-control">
				<option>Selecionar opção</option>
				<option value="A">Administrador</option>
				<option value="C">Consultor</option>
			</select>
		</div>
		<button type="submit" class="btn btn-primary">Cadastrar</button>
	</form>

</div>

@stop