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
				<img class="profile-user-img img-responsive img-circle" src="{{ url($foto) }}" alt="User profile picture">
	            <h3 class="profile-username text-center">{{ $pegar[0]['name'] }}</h3>

	            <ul class="list-group list-group-unbordered">
	                <li class="list-group-item">
	                  <b>Avaliação</b> <a class="pull-right">10</a>
	                </li>
	                <li class="list-group-item">
	                  <b>Tickets respondidos</b> <a class="pull-right">543</a>
	                </li>
	                <li class="list-group-item">
	                  <b>Tickets finalizados</b> <a class="pull-right">13,287</a>
	                </li>
	                <li class="list-group-item">
	                  <b>Categoria(s)</b>
	                  <a class="pull-right"><span class="label label-info">Todas</span></a>
	                </li>
	                <li class="list-group-item">
	                  <b>Status</b> <a class="pull-right"><span class="label label-info">Ativo</span></a>
	                </li>
	            </ul>

	            <a href="{{ route('admin.editarPerfil', [ 'user' => $pegar[0]['public_key'] ]) }}" class="btn btn-warning btn-block"><b>Editar Perfil</b></a>
	            <a href="#" data-uid="{{ $pegar[0]['public_key'] }}" class="btn btn-danger btn-block"><b>Cancelar Conta</b></a>

			</div>

		</div>

	</div>
	<div class="col-md-9">
		
		<div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#geral" data-toggle="tab">Detalhes</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="geral">
                
				<address>
				  <strong>{{ $pegar[0]['name'] }}</strong><br>
				  <strong>{{ $user->setNivel($pegar[0]['nivel']) }}</strong><br>
				  {{ $pegar[0]['email'] }}<br><br>
				  @if($pegar[0]['facebook'])
				  <p><a href="http://facebook.com/{{$pegar[0]['facebook']}}" target="_blank" class="text-primary"><i class="fa fa-facebook-official"></i>&nbsp;&nbsp;fb.co/{{$pegar[0]['facebook']}}</a></p>
				  @endif
				  @if($pegar[0]['twitter'])
				  <p><a href="https://twitter.com/{{ $pegar[0]['twitter'] }}" target="_blank" class="text-info"><i class="fa fa-twitter"></i>&nbsp;&nbsp;@{{ $pegar[0]['twitter'] }}</a></p>
				  @endif
				  @if($pegar[0]['whatsapp'])
				  <p><span class="text-success"><i class="fa fa-whatsapp"></i>&nbsp;&nbsp;{{ $pegar[0]['whatsapp'] }}</span></p>
				  @endif
				</address>


              </div>

            </div>
            <!-- /.tab-content -->
        </div>


	</div>

</div>

@stop