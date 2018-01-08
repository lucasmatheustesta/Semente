<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Authentication Routes...
//Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/', 'LoginController@showLoginForm')->name('login');
Route::get('/login/sair', ['as'=>'login.sair', 'uses' => 'UserController@sair']);

Auth::routes();

Route::group(['middleware' => 'auth'], function (){

	Route::get('dashboard', ['as'=>'dashboard', 'uses' => 'DashboardController@index']);

	// Fisicas
	Route::get('/pessoas-fisicas', ['as'=>'pessoasfisicas', 'uses' => 'PessoaFisicaController@index']);
	Route::get('/pessoas-fisicas/adicionar', ['as'=>'pessoasfisicas.adicionar', 'uses' => 'PessoaFisicaController@adicionar']);
	Route::post('/pessoas-fisicas/salvar', ['as'=>'pessoasfisicas.salvar', 'uses' => 'PessoaFisicaController@salvar']);
	Route::get('/pessoas-fisicas/editar/{id}', ['as'=>'pessoasfisicas.editar', 'uses' => 'PessoaFisicaController@editar']);
	Route::put('/pessoas-fisicas/atualizar/{id}', ['as'=>'pessoasfisicas.atualizar', 'uses' => 'PessoaFisicaController@atualizar']);
	Route::get('/pessoas-fisicas/deletar/{id}', ['as'=>'pessoasfisicas.deletar', 'uses' => 'PessoaFisicaController@deletar']);

	// Juridicas
	Route::get('/pessoas-juridicas', ['as'=>'pessoasjuridicas', 'uses' => 'PessoaJuridicaController@index']);
	Route::get('/pessoas-juridicas/adicionar', ['as'=>'pessoasjuridicas.adicionar', 'uses' => 'PessoaJuridicaController@adicionar']);
	Route::post('/pessoas-juridicas/salvar', ['as'=>'pessoasjuridicas.salvar', 'uses' => 'PessoaJuridicaController@salvar']);
	Route::get('/pessoas-juridicas/editar/{id}', ['as'=>'pessoasjuridicas.editar', 'uses' => 'PessoaJuridicaController@editar']);
	Route::put('/pessoas-juridicas/atualizar/{id}', ['as'=>'pessoasjuridicas.atualizar', 'uses' => 'PessoaJuridicaController@atualizar']);
	Route::get('/pessoas-juridicas/deletar/{id}', ['as'=>'pessoasjuridicas.deletar', 'uses' => 'PessoaJuridicaController@deletar']);

	// Categoria Profissional
	Route::get('/categorias-profissional', ['as'=>'categoriasprofissional', 'uses' => 'CategoriaProfissionalController@index']);
	Route::get('/categorias-profissional/adicionar', ['as'=>'categoriasprofissional.adicionar', 'uses' => 'CategoriaProfissionalController@adicionar']);
	Route::post('/categorias-profissional/salvar', ['as'=>'categoriasprofissional.salvar', 'uses' => 'CategoriaProfissionalController@salvar']);
	Route::get('/categorias-profissional/editar/{id}', ['as'=>'categoriasprofissional.editar', 'uses' => 'CategoriaProfissionalController@editar']);
	Route::put('/categorias-profissional/atualizar/{id}', ['as'=>'categoriasprofissional.atualizar', 'uses' => 'CategoriaProfissionalController@atualizar']);
	Route::get('/categorias-profissional/deletar/{id}', ['as'=>'categoriasprofissional.deletar', 'uses' => 'CategoriaProfissionalController@deletar']);

	// Areas de Interesse
	Route::get('/areas-interesse', ['as'=>'areasinteresse', 'uses' => 'AreaInteresseController@index']);
	Route::get('/areas-interesse/adicionar', ['as'=>'areasinteresse.adicionar', 'uses' => 'AreaInteresseController@adicionar']);
	Route::post('/areas-interesse/salvar', ['as'=>'areasinteresse.salvar', 'uses' => 'AreaInteresseController@salvar']);
	Route::get('/areas-interesse/editar/{id}', ['as'=>'areasinteresse.editar', 'uses' => 'AreaInteresseController@editar']);
	Route::put('/areas-interesse/atualizar/{id}', ['as'=>'areasinteresse.atualizar', 'uses' => 'AreaInteresseController@atualizar']);
	Route::get('/areas-interesse/deletar/{id}', ['as'=>'areasinteresse.deletar', 'uses' => 'AreaInteresseController@deletar']);

	// Areas de Atuação
	Route::get('/areas-atuacao', ['as'=>'areasatuacao', 'uses' => 'AreaAtuacaoController@index']);
	Route::get('/areas-atuacao/adicionar', ['as'=>'areasatuacao.adicionar', 'uses' => 'AreaAtuacaoController@adicionar']);
	Route::post('/areas-atuacao/salvar', ['as'=>'areasatuacao.salvar', 'uses' => 'AreaAtuacaoController@salvar']);
	Route::get('/areas-atuacao/editar/{id}', ['as'=>'areasatuacao.editar', 'uses' => 'AreaAtuacaoController@editar']);
	Route::put('/areas-atuacao/atualizar/{id}', ['as'=>'areasatuacao.atualizar', 'uses' => 'AreaAtuacaoController@atualizar']);
	Route::get('/areas-atuacao/deletar/{id}', ['as'=>'areasatuacao.deletar', 'uses' => 'AreaAtuacaoController@deletar']);

	// Especialidades
	Route::get('/especialidades', ['as'=>'especialidades', 'uses' => 'EspecialidadeController@index']);
	Route::get('/especialidades/adicionar', ['as'=>'especialidades.adicionar', 'uses' => 'EspecialidadeController@adicionar']);
	Route::post('/especialidades/salvar', ['as'=>'especialidades.salvar', 'uses' => 'EspecialidadeController@salvar']);
	Route::get('/aespecialidadeseditar/{id}', ['as'=>'especialidades.editar', 'uses' => 'EspecialidadeController@editar']);
	Route::put('/especialidades/atualizar/{id}', ['as'=>'especialidades.atualizar', 'uses' => 'EspecialidadeController@atualizar']);
	Route::get('/especialidades/deletar/{id}', ['as'=>'especialidades.deletar', 'uses' => 'EspecialidadeController@deletar']);

	// Locais de Trabalho
	Route::get('/locais-trabalho', ['as'=>'locaistrabalho', 'uses' => 'LocalTrabalhoController@index']);
	Route::get('/locais-trabalho/adicionar', ['as'=>'locaistrabalho.adicionar', 'uses' => 'LocalTrabalhoController@adicionar']);
	Route::post('/locais-trabalho/salvar', ['as'=>'locaistrabalho.salvar', 'uses' => 'LocalTrabalhoController@salvar']);
	Route::get('/locais-trabalho/editar/{id}', ['as'=>'locaistrabalho.editar', 'uses' => 'LocalTrabalhoController@editar']);
	Route::put('/locais-trabalho/atualizar/{id}', ['as'=>'locaistrabalho.atualizar', 'uses' => 'LocalTrabalhoController@atualizar']);
	Route::get('/locais-trabalho/deletar/{id}', ['as'=>'locaistrabalho.deletar', 'uses' => 'LocalTrabalhoController@deletar']);
	
	// Entidades
	Route::get('/entidades', ['as'=>'entidades', 'uses' => 'EntidadeController@index']);
	Route::get('/entidades/adicionar', ['as'=>'entidades.adicionar', 'uses' => 'EntidadeController@adicionar']);
	Route::post('/entidades/salvar', ['as'=>'entidades.salvar', 'uses' => 'EntidadeController@salvar']);
	Route::get('/entidades/editar/{id}', ['as'=>'entidades.editar', 'uses' => 'EntidadeController@editar']);
	Route::put('/entidades/atualizar/{id}', ['as'=>'entidades.atualizar', 'uses' => 'EntidadeController@atualizar']);
	Route::get('/entidades/deletar/{id}', ['as'=>'entidades.deletar', 'uses' => 'EntidadeController@deletar']);

	// Faculdades
	Route::get('/faculdades', ['as'=>'faculdades', 'uses' => 'FaculdadeController@index']);
	Route::get('/faculdades/adicionar', ['as'=>'faculdades.adicionar', 'uses' => 'FaculdadeController@adicionar']);
	Route::post('/faculdades/salvar', ['as'=>'faculdades.salvar', 'uses' => 'FaculdadeController@salvar']);
	Route::get('/faculdades/editar/{id}', ['as'=>'faculdades.editar', 'uses' => 'FaculdadeController@editar']);
	Route::put('/faculdades/atualizar/{id}', ['as'=>'faculdades.atualizar', 'uses' => 'FaculdadeController@atualizar']);
	Route::get('/faculdades/deletar/{id}', ['as'=>'faculdades.deletar', 'uses' => 'FaculdadeController@deletar']);

	// Regionais
	Route::get('/regionais', ['as'=>'regionais', 'uses' => 'RegionalController@index']);
	Route::get('/regionais/adicionar', ['as'=>'regionais.adicionar', 'uses' => 'RegionalController@adicionar']);
	Route::post('/regionais/salvar', ['as'=>'regionais.salvar', 'uses' => 'RegionalController@salvar']);
	Route::get('/regionais/editar/{id}', ['as'=>'regionais.editar', 'uses' => 'RegionalController@editar']);
	Route::put('/regionais/atualizar/{id}', ['as'=>'regionais.atualizar', 'uses' => 'RegionalController@atualizar']);
	Route::get('/regionais/deletar/{id}', ['as'=>'regionais.deletar', 'uses' => 'RegionalController@deletar']);

	// Faturas
	Route::get('/faturas', ['as'=>'faturas', 'uses' => 'FaturaController@index']);
	Route::get('/faturas/adicionar', ['as'=>'faturas.adicionar', 'uses' => 'FaturaController@adicionar']);
	Route::post('/faturas/salvar', ['as'=>'faturas.salvar', 'uses' => 'FaturaController@salvar']);
	Route::get('/faturas/editar/{id}', ['as'=>'faturas.editar', 'uses' => 'FaturaController@editar']);
	Route::put('/faturas/atualizar/{id}', ['as'=>'faturas.atualizar', 'uses' => 'FaturaController@atualizar']);
	Route::get('/faturas/deletar/{id}', ['as'=>'faturas.deletar', 'uses' => 'FaturaController@deletar']);

	// Transferencias
	Route::get('/transferencias', ['as'=>'transferencias', 'uses' => 'TransferenciaController@index']);
	Route::get('/transferencias/adicionar', ['as'=>'transferencias.adicionar', 'uses' => 'TransferenciaController@adicionar']);
	Route::post('/transferencias/salvar', ['as'=>'transferencias.salvar', 'uses' => 'TransferenciaController@salvar']);
	Route::get('/transferencias/editar/{id}', ['as'=>'transferencias.editar', 'uses' => 'TransferenciaController@editar']);
	Route::put('/transferencias/atualizar/{id}', ['as'=>'transferencias.atualizar', 'uses' => 'TransferenciaController@atualizar']);
	Route::get('/transferencias/deletar/{id}', ['as'=>'transferencias.deletar', 'uses' => 'TransferenciaController@deletar']);

	// Saques
	Route::get('/saques', ['as'=>'saques', 'uses' => 'SaqueController@index']);
	Route::get('/saques/adicionar', ['as'=>'saques.adicionar', 'uses' => 'SaqueController@adicionar']);
	Route::post('/saques/salvar', ['as'=>'saques.salvar', 'uses' => 'SaqueController@salvar']);
	Route::get('/saques/editar/{id}', ['as'=>'saques.editar', 'uses' => 'SaqueController@editar']);
	Route::put('/saques/atualizar/{id}', ['as'=>'saques.atualizar', 'uses' => 'SaqueController@atualizar']);
	Route::get('/saques/deletar/{id}', ['as'=>'saques.deletar', 'uses' => 'SaqueController@deletar']);
















	// Servicos
	Route::get('/servicos', ['as'=>'servicos', 'uses' => 'ServicoController@index']);
	Route::get('/servicos/adicionar', ['as'=>'servicos.adicionar', 'uses' => 'ServicoController@adicionar']);
	Route::post('/servicos/salvar', ['as'=>'servicos.salvar', 'uses' => 'ServicoController@salvar']);
	Route::get('/servicos/editar/{id}', ['as'=>'servicos.editar', 'uses' => 'ServicoController@editar']);
	Route::put('/servicos/atualizar/{id}', ['as'=>'servicos.atualizar', 'uses' => 'ServicoController@atualizar']);
	Route::get('/servicos/deletar/{id}', ['as'=>'servicos.deletar', 'uses' => 'ServicoController@deletar']);
	Route::get('/servicos/tipo/{id}', ['as'=>'servicos.tipo', 'uses' => 'ServicoController@tipo']);

	// Consultores
	Route::get('/consultores', ['as'=>'consultores', 'uses' => 'ConsultorController@index']);
	Route::get('/consultores/adicionar', ['as'=>'consultores.adicionar', 'uses' => 'ConsultorController@adicionar']);
	Route::post('/consultores/salvar', ['as'=>'consultores.salvar', 'uses' => 'ConsultorController@salvar']);
	Route::get('/consultores/editar/{id}', ['as'=>'consultores.editar', 'uses' => 'ConsultorController@editar']);
	Route::put('/consultores/atualizar/{id}', ['as'=>'consultores.atualizar', 'uses' => 'ConsultorController@atualizar']);
	Route::get('/consultores/deletar/{id}', ['as'=>'consultores.deletar', 'uses' => 'ConsultorController@deletar']);

	// Pacientes
	Route::get('/pacientes', ['as'=>'pacientes', 'uses' => 'PacienteController@index']);
	Route::get('/pacientes/adicionar', ['as'=>'pacientes.adicionar', 'uses' => 'PacienteController@adicionar']);
	Route::post('/pacientes/salvar', ['as'=>'pacientes.salvar', 'uses' => 'PacienteController@salvar']);
	Route::get('/pacientes/editar/{id}', ['as'=>'pacientes.editar', 'uses' => 'PacienteController@editar']);
	Route::get('/pacientes/contrato/{id}', ['as'=>'pacientes.contrato', 'uses' => 'PacienteController@contrato']);
	Route::put('/pacientes/atualizar/{id}', ['as'=>'pacientes.atualizar', 'uses' => 'PacienteController@atualizar']);
	Route::get('/pacientes/deletar/{id}', ['as'=>'pacientes.deletar', 'uses' => 'PacienteController@deletar']);

	// Contratos
	Route::get('/contratos', ['as'=>'contratos', 'uses' => 'ContratoController@index']);
	Route::get('/contratos/adicionar', ['as'=>'contratos.adicionar', 'uses' => 'ContratoController@adicionar']);
	Route::post('/contratos/salvar', ['as'=>'contratos.salvar', 'uses' => 'ContratoController@salvar']);
	Route::get('/contratos/editar/{id}', ['as'=>'contratos.editar', 'uses' => 'ContratoController@editar']);
	Route::get('/contratos/relatorio/{id}', ['as'=>'contratos.relatorio', 'uses' => 'ContratoController@relatorio']);
	Route::put('/contratos/atualizar/{id}', ['as'=>'contratos.atualizar', 'uses' => 'ContratoController@atualizar']);
	Route::post('/contratos/deletar', ['as'=>'contratos.deletar', 'uses' => 'ContratoController@deletar']);
	Route::post('/contratos/deletarservico', ['as'=>'servicovenda.deletar', 'uses' => 'ContratoController@deletarServico']);

	// Receitas
	Route::get('/receitas', ['as'=>'financeiro', 'uses' => 'ReceitaController@index']);
	Route::get('/receitas/editar/{id}', ['as'=>'receitas.editar', 'uses' => 'ReceitaController@editar']);
	Route::get('/receitas/pago/{id}', ['as'=>'receitas.pago', 'uses' => 'ReceitaController@setPago']);
	Route::put('/receitas/atualizar/{id}', ['as'=>'receitas.atualizar', 'uses' => 'ReceitaController@atualizar']);

	// Mensagens
	Route::get('/messages', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('/enviados', ['as' => 'messages.sends', 'uses' => 'MessagesController@sends']);
    Route::get('/lixeira', ['as' => 'messages.lixeira', 'uses' => 'MessagesController@lixeira']);
    Route::get('/messages/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/messages', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('/messages/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('/messages/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
    Route::get('/getqtdenews', ['as'=>'messages.news', 'uses' => 'MessagesController@getQtdeNews']);
    Route::get('/messages/deletar/{id}', ['as'=>'messages.deletar', 'uses' => 'MessagesController@deletar']);

	// Outros
	Route::get('relatorios', ['as'=>'relatorios', 'uses' => 'RelatorioController@index']);
	
	Route::get('estado/{id}', ['as'=>'states.cities', 'uses' => 'StateController@cidades']);
	Route::get('consultor/{id}', ['as'=>'consultores.clinicas', 'uses' => 'ConsultorController@clinicas']);
	Route::get('getpacientes/{consultor}/{clinica}', ['as'=>'pacientes.clinicas', 'uses' => 'ClinicaController@pacientes']);
	Route::get('perfil', ['as'=>'user.perfil', 'uses' => 'UserController@perfil']);
	Route::put('/user/atualizar', ['as'=>'user.atualizar', 'uses' => 'UserController@atualizar']);
	Route::get('rolespermission', ['as'=>'rolespermission', 'uses' => 'UserController@rolespermission']);
});
