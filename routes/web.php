<?php

/*
|--------------------------------------------------------------------------
| Administradores
|--------------------------------------------------------------------------
|
| Abaixo vão apenas rotas para usuários administradores
|
*/


$this->group(['middleware' => ['auth', 'permissao:admin'], 
			  'namespace'  => 'Admin', 
			  'prefix' => 'admin'], function(){

	Route::get('/', 'HomeController@index')->name('admin.home');
	// Filiados
	Route::get('/filiados', 'FiliadosController@index')->name('admin.filiados');
	Route::get('/filiados/novo', 'FiliadosController@novo')->name('admin.filiado.novo'); 

	// Tickets
	Route::get('/tickets', 'TicketsController@index')->name('admin.tickets');
	Route::get('/tickets/relatorio', 'TicketsController@relatorio')->name('admin.tickets.relatorio'); 
	Route::get('/tickets/detalhes/{uid}', 'TicketsController@detalhes')->name('admin.tickets.detalhes'); 

	// Financeiro
	Route::get('/financeiro', 'FinanceiroController@index')->name('admin.financeiro');
	Route::get('/financeiro/relatorio', 'FinanceiroController@relatorio')->name('admin.financeiro.relatorio'); 
	Route::get('/financeiro/nota/{uid}', 'FinanceiroController@nota')->name("admin.nota");
	Route::get('/financeiro/nota/pagar/{uid}', 'FinanceiroController@pagar')->name("admin.nota.pagar");


	// Usuários
	Route::get('/users', 'UsersController@index')->name('admin.financeiro');
	Route::get('/users/cadastrar', 'UsersController@cadastrar')->name('admin.users.cadastrar'); 
	Route::get('/users/logs', 'UsersController@logs')->name('admin.users.logs');
	Route::get('/users/{uid}', 'UsersController@detalhes')->name('admin.users.detalhes'); 
	// Configurações
	Route::get('/configuration', 'ConfigController@index')->name('admin.config');
	
	// Perfil
	Route::get('/profile', 'UsersController@profile')->name('admin.profile');
	Route::get('/resetPassword', 'UsersController@resetPassword')->name('admin.resetPassword');
	Route::get('/profile/{uid}/editar', 'UsersController@profileEditar')->name('admin.editarPerfil');
	

	// Ajuda
	Route::get('/tutorial', 'HomeController@tutorial')->name('admin.tutorial');
	Route::get('/tutorial/novo', 'HomeController@tutorialNovo')->name('admin.tutorialNovo');
	Route::get('/tutorial/{uid}', 'HomeController@tutorialDetalhes')->name('admin.tutorialDetalhes');
	
	Route::get('/duvidas', 'HomeController@duvidas')->name('admin.duvidas');
	Route::get('/bugs', 'HomeController@bugs')->name('admin.bugs');


});



/*
|--------------------------------------------------------------------------
| Consultores
|--------------------------------------------------------------------------
|
| Abaixo vão apenas rotas para usuários que darão consultoria
|
*/

$this->group(['middleware' => ['auth', 'permissao:consultor'],
			  'namespace'  => 'Consultor', 
			  'prefix' => 'consultor'], function(){

	Route::get('/', 'HomeController@index')->name('consultor.home');
	// Tickets
	Route::get('/tickets', 'TicketsController@index')->name('consultor.tickets');

	// Perfil
	Route::get('/profile', 'UsersController@profile')->name('consultor.profile');
	Route::get('/resetPassword', 'UsersController@resetPassword')->name('consultor.resetPassword');

	
	// Ajuda
	Route::get('/tutorial', 'HomeController@tutorial')->name('consultor.tutorial');
	Route::get('/duvidas', 'HomeController@duvidas')->name('consultor.duvidas');
	Route::get('/bugs', 'HomeController@bugs')->name('consultor.bugs');


});



/*
|--------------------------------------------------------------------------
| Filiados
|--------------------------------------------------------------------------
|
| Abaixo vão apenas rotas para usuários matriculados como filiado
|
*/

$this->group(['middleware' => ['auth', 'permissao:filiado'],
			  'namespace'  => 'Filiado', 
			  'prefix' => 'filiado'], function(){

  	Route::get('/', 'HomeController@index')->name('filiado.home');
	
	// Tickets
	Route::get('/tickets', 'TicketsController@index')->name('filiado.tickets');
	Route::get('/tickets/criar', 'TicketsController@criar')->name('filiado.ticketsCriar');


	// Financeiro
	Route::get('/financeiro', 'FinanceiroController@index')->name('filiado.financeiro');


	// Perfil
	Route::get('/profile', 'UsersController@profile')->name('filiado.profile');
	Route::get('/resetPassword', 'UsersController@resetPassword')->name('filiado.resetPassword');


	// Ajuda
	Route::get('/contrato', 'HomeController@contrato')->name('filiado.contrato');
	Route::get('/bugs', 'HomeController@bugs')->name('filiado.bugs');


});


/*
|--------------------------------------------------------------------------
| Outras
|--------------------------------------------------------------------------
|
| Abaixo vão as rotas abertas e sem nível de acesso
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('logout', 'Auth\LoginController@logout');

Route::get('conectar', 'HomeController@conectar');

Auth::routes();

