@extends('adminlte::page')

@section('title', 'Painel Administrativo')


@section('content_header')
    <h1>Nota</h1>
@stop
@section('content')
   
<div class="row">
	
<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Clube de Tiro LIberdade EIRELLI Ltda.
            <div class="dropdown pull-right">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                  Ação <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('admin.nota.pagar', [ 'uid' => '123456789' ]) }}">Pagar agora mesmo</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mudar Status para PAGO</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Gerar PDF</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Excluir Nota</a></li>
                </ul>
            </div>
    		<div class="cleafix"></div>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          De
          <address>
            <strong>Admin, Inc.</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (804) 123-5432<br>
            Email: info@almasaeedstudio.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          Para
          <address>
            <strong>John Doe</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (555) 539-1037<br>
            Email: john.doe@example.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Nota #123456789</b><br>
          <br>
          <b>Vencimento:</b> 2/22/2014<br>
          <b>Matrícula:</b> 968-34567
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Product/Serviço</th>
              <th>Nota</th>
              <th>Descrição</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Anuidade</td>
              <td>123456789</td>
              <td>Anuidade do clube com todas os seus benefícios</td>
              <td>R$ 564,50</td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Forma de Pagamento:</p>
          <img src="{{ url('storage/images/pagseguro-logo.jpeg') }}" alt="Pagseguro" style="width: 100%;">
          
          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Para a sua segurança, todos os pagamentos desse site será feito através no PagSeguro.
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Amount Due 2/22/2014</p>

          <div class="table-responsive">
            <table class="table">
	              <tbody><tr>
	                <th style="width:50%">Subtotal:</th>
	                <td>$250.30</td>
	              </tr>
	              <tr>
	                <th>Imposto (9.3%)</th>
	                <td>$10.34</td>
	              </tr>
	              <tr>
	                <th>Total:</th>
	                <td>$265.24</td>
	              </tr>
	            </tbody>
        	</table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          	<a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir Nota</a>			
    		<div class="cleafix"></div>
        </div>
      </div>
    </section>
    <div class="cleafix"></div>

</div>


@stop