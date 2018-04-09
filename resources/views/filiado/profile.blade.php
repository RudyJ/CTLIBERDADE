@extends('adminlte::page')

@section('title', 'Painel Administrativo')

@section('css')

<style type="text/css">
	.nav-tabs-custom>.nav-tabs>li.active {
	    border-top-color: #f39c12;
	}
</style>

@stop

@section('content_header')
    <h1>Minha Conta</h1>
@stop
@section('content')
    

<div class="row">
	
	<div class="col-md-3">
		
		<div class="box box-warning">
			
			<div class="box-body box-profile">
				
				<img class="profile-user-img img-responsive img-circle" src="{{ url('storage/images/no-pic.png') }}" alt="User profile picture">

	              <h3 class="profile-username text-center">Filiado Teste</h3>

	              <ul class="list-group list-group-unbordered">
	                <li class="list-group-item">
	                  <b>Tickets abertos</b> <a class="pull-right">1,322</a>
	                </li>
	                <li class="list-group-item">
	                  <b>Tickets respondidos</b> <a class="pull-right">543</a>
	                </li>
	                <li class="list-group-item">
	                  <b>Tickets finalizados</b> <a class="pull-right">13,287</a>
	                </li>
	                <li class="list-group-item">
	                  <b>Status</b> <a class="pull-right"><span class="label label-info">Ativo</span></a>
	                </li>
	              </ul>

	              <a href="#" class="btn btn-warning btn-block"><b>Editar Perfil</b></a>
	              <a href="#" class="btn btn-danger btn-block"><b>Cancelar Conta</b></a>

			</div>

		</div>

	</div>
	<div class="col-md-9">
		
		<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#geral" data-toggle="tab">Geral</a></li>
              <li><a href="#address" data-toggle="tab">Endereço</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="geral">
                

				<address>
				  <strong>Filiado teste da Silva Sauro</strong><br>
				  filiado@teste.com.br<br><br>
				  <p><a href="" target="_blank" class="text-primary"><i class="fa fa-facebook-official"></i>&nbsp;&nbsp;fb.co/fulano</a></p>				
				  <p><a href="" target="_blank" class="text-info"><i class="fa fa-twitter"></i>&nbsp;&nbsp;@filiado</a></p>
				  <p><span class="text-success"><i class="fa fa-whatsapp"></i>&nbsp;&nbsp;+55 81 99999-9999</span></p>
				</address>


              </div>

              <div class="tab-pane" id="address">

				<address>
				  <strong>RG</strong> 7-827.229<br>
				  <strong>CPF</strong> 088.399.094-60<br><br><br>
				  <i class=""></i>1355 Market Street, Suite 900<br>
				  Bairro X, San Francisco - CA | 94103<br>
				  <abbr title="Phone">P:</abbr> (123) 456-7890<br>
				  <abbr title="Phone">P:</abbr> (123) 456-7890
				</address>

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>


	</div>

</div>

@stop