@extends('adminlte::page')

@section('title', 'Painel Administrativo')


@section('content_header')
    <h1>Atualizar minha Senha</h1>
@stop
@section('content')
<form class="col-md-5">
	<div class="form-group">
      <label for="title">Senha Antiga</label>
      <input type="text" class="form-control" id="title" placeholder="Digite a sua senha antiga">
    </div>		
	<div class="form-group">
      <label for="title">Nova Senha</label>
      <input type="text" class="form-control" id="title" placeholder="Digite a nova senha">
    </div>		
	<div class="form-group">
      <label for="title">Repetir Nova Senha</label>
      <input type="text" class="form-control" id="title" placeholder="Repita a nova senha">
    </div>		
	<button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@stop