@extends('adminlte::page')

@section('title', 'Painel Administrativo')


@section('content_header')
    <h1>Cadastrar Novo Filiado</h1>
@stop
@section('content')

	
<div class="col-md-12">
	<div class="form-group">
		<label>Nome Completo</label>
		<input type="text" class="form-control" name="">
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>RG</label>
		<input type="text" class="form-control" name="">
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>CPF</label>
		<input type="text" class="form-control" name="" data-kenjs="cpf">
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Data de Nascimento</label>
		<input type="text" class="form-control" name="" data-kenjs="data">
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>E-Mail</label>
		<input type="email" class="form-control" name="">
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Telefone</label>
		<input type="text" class="form-control" name="" data-kenjs="tel">
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Celular</label>
		<input type="text" class="form-control" name="" data-kenjs="cel">
	</div>
</div>
<div class="col-md-6">
	<div class="form-group">
		<label>Logradouro</label>
		<input type="text" class="form-control" name="">
	</div>
</div>
<div class="col-md-6">
	<div class="form-group">
		<label>Complemento</label>
		<input type="text" class="form-control" name="">
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Número</label>
		<input type="text" class="form-control" name="">
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>Bairro</label>
		<input type="text" class="form-control" name="">
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		<label>CEP</label>
		<input type="text" class="form-control" name="" data-kenjs="cep">
	</div>
</div>
<div class="col-md-6">
	<div class="form-group">
		<label>Cidade</label>
		<input type="text" class="form-control" name="">
	</div>
</div>
<div class="col-md-6">
	<div class="form-group">
		<label>Estado</label>
		<select class="form-control" name="">
			<option>Selecionar</option>
		</select>
	</div>
</div>
<div class="col-md-12">
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="">
	</div>
</div>
<div class="col-md-12">
	<button type="submit" class="btn btn-primary">Cadastrar</button>
</div>

<div class="clearfix"></div>

<p>&nbsp;</p>

<p>&nbsp;</p>

@section('js')


<script src="{{ asset('vendor/adminlte/vendor/kenjsmask/kenjsmask.js') }}"></script>

<script>
jQuery(document).ready(function($) {
	
 $("input").kenjsMask();

});
</script>



@stop


@stop