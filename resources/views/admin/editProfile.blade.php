@extends('adminlte::page')

@section('title', 'Painel Administrativo')


@section('content_header')
    <h1>Editar Perfil</h1>
@stop
@section('content')

<div class="row">
	
	<form class="col-md-6">
		<div class="form-group">
			<label>Nome</label>
			<input type="text" name="name" class="form-control" value="{{ $me['nome'] }}" />
		</div>
		<div class="form-group">
			<label>E-Mail</label>
			<input type="email" name="email" class="form-control" value="{{ $me['email'] }}" />
		</div>
		<div class="form-group">
			<label>Facebook</label>
			<input type="email" name="facebook" class="form-control" value="{{ $me['facebook'] }}" />
		</div>
		<div class="form-group">
			<label>Twitter</label>
			<input type="email" name="twitter" class="form-control" value="{{ $me['twitter'] }}" />
		</div>
		<div class="form-group">
			<label>Whatsapp</label>
			<input type="email" name="whatsapp" class="form-control" value="{{ $me['whatsapp'] }}" />
		</div>
		<div class="form-group">
			<label>Nível</label>
			@if($me['nivel']=='A')
			<select name="nivel" class="form-control">
				<option>Selecionar opção</option>
				<option value="A" selected="selected">Administrador</option>
				<option value="C">Consultor</option>
			</select>
			@elseif($me['nivel']=='C')
			<select name="nivel" class="form-control">
				<option>Selecionar opção</option>
				<option value="A">Administrador</option>
				<option value="C" selected="selected">Consultor</option>
			</select>
			@else
			<select name="nivel" class="form-control">
				<option>Selecionar opção</option>
				<option value="A">Administrador</option>
				<option value="C">Consultor</option>
			</select>
			@endif
		</div>
		<div class="form-group">
			<label>Status</label>
			@if($me['status']=='A')
			<select name="status" class="form-control">
				<option>Selecionar opção</option>
				<option value="A" selected="selected">Ativo</option>
				<option value="B">Bloqueado</option>
				<option value="P">Pendente</option>
			</select>
			@elseif($me['status']=='B')
			<select name="status" class="form-control">
				<option>Selecionar opção</option>
				<option value="A">Ativo</option>
				<option value="B" selected="selected">Bloqueado</option>
				<option value="P">Pendente</option>
			</select>
			@elseif($me['status']=='P')
			<select name="status" class="form-control">
				<option>Selecionar opção</option>
				<option value="A">Ativo</option>
				<option value="B">Bloqueado</option>
				<option value="P" selected="selected">Pendente</option>
			</select>
			@else
			<select name="status" class="form-control">
				<option>Selecionar opção</option>
				<option value="A">Ativo</option>
				<option value="B">Bloqueado</option>
				<option value="P">Pendente</option>
			</select>
			@endif
		</div>
		<div class="form-group">
			<label>Foto</label>
			<input type="file" name="foto" class="form-control" />
		</div>
		<button type="submit" class="btn btn-primary">Atualizar</button>
	</form>
	
	<div class="col-md-6">
		<img class="img-responsive img-circle" src="{{ url($me['foto']) }}" alt="User profile picture">
	</div>

</div>

@stop