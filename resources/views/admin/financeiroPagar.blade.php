@extends('adminlte::page')

@section('title', 'Painel Administrativo')


@section('content_header')
    <h1>Pagar Nota</h1>
@stop
@section('content')
   
<div class="row">
  <div class="col-md-6">
    <h3>Via Cartão de Crédito/Débito</h3>
    <form>
      <div class="form-group col-md-12">
        <label>Titular</label>
        <input type="text" name="" class="form-control">
      </div>
      <div class="form-group col-md-12">
        <label>N° do Cartão</label>
        <input type="text" name="" class="form-control" data-kenjs="cardnumber">
      </div>
      <div class="form-group col-md-8">
        <label>Vencimento</label>
        <input type="text" name="" class="form-control" data-kenjs="vencimento">
      </div>
      <div class="form-group col-md-4">
        <label>CVV</label>
        <input type="text" name="" class="form-control">
      </div>
      <div class="form-group col-md-12">
        <button type="submit" class="btn btn-primary">Pagar</button>
      </div>
    </form>
  </div>
  <div class="col-md-6">
    <h3>Outras formas de pagamento</h3>
    <a href="#" class="btn btn-primary btn-block btn-lg">Emitir Boleto Bancário</a>
  </div>
</div>

@section('js')


<script src="{{ asset('vendor/adminlte/vendor/kenjsmask/kenjsmask.js') }}"></script>

<script>
jQuery(document).ready(function($) {
  
 $("input").kenjsMask();

});
</script>



@stop

@stop