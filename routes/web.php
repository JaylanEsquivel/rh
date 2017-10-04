<?php

Route::get('/', function () {
    return view('welcome');
});
//GET'S

Route::get('/index','ViewController@Exibirprincipal');

Route::get('/funcionario','FuncionarioController@ExibirFuncionario');
Route::get('/funcionario-gerenciar','FuncionarioController@ExibirFuncionarioGerenciar');
Route::get('/funcionario-gerenciar/editarfuncionario/{id}','FuncionarioController@Editarfuncionario');
Route::get('/funcionario-gerenciar/deletarfuncionario/{id}','FuncionarioController@Deletarfuncionario');

Route::get('/setor','SetorController@ExibirSetor');
Route::get('/setor-gerenciar','SetorController@ExibirSetorGerenciar');
Route::get('/setor-gerenciar/editarsetor/{id}', 'SetorController@EditarSetor');
Route::get('/setor-gerenciar/deletarsetor/{id}', 'SetorController@DeletarSetor');

Route::get('/cargo','CargoController@ExibirCargo');
Route::get('/cargo-gerenciar','CargoController@ExibirCargoGerenciar');
Route::get('/cargo-gerenciar/editarcargo/{id}','CargoController@EditarCargo');
Route::get('/cargo-gerenciar/deletarcargo/{id}','CargoController@DeletarCargo');

Route::get('/rescisao/{id}','RescisaoController@calcularRescisao');

Route::get('/rescisao-gerenciar','RescisaoController@ExibirRescisaoGerenciar');

// POST'S

Route::post('/funcionario/form_funcionario', 'FuncionarioController@CadastrarFuncionario');
Route::post('/funcionario-gerenciar/editarfuncionario/form_funcionario_editar/{id}', 'FuncionarioController@Updatefuncionario');


Route::post('/cargo/form_cargo', 'CargoController@CadastrarCargo');
Route::post('/cargo-gerenciar/editarcargo/form_cargo_editar/{id}', 'CargoController@UpdateCargo');


Route::post('/setor/form_setor', 'SetorController@CadastrarSetor');
Route::post('/setor-gerenciar/editarsetor/form_setor_editar/{id}', 'SetorController@UpdateSetor');

Route::post('/rescisao/form_rescisao', 'RescisaoController@visualizaRescisao');
Route::post('/rescisao/form_rescisao/salvar', 'RescisaoController@RegistrarRescisao');
//Route::post('/rescisao/form_rescisao', 'RescisaoController@RegistrarRescisao');



