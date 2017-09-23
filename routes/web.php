<?php

Route::get('/', function () {
    return view('welcome');
});
//GET'S

Route::get('/index','ViewController@Exibirindex');

Route::get('/funcionario','FuncionarioController@ExibirFuncionario');
Route::get('/funcionario-gerenciar','FuncionarioController@ExibirFuncionarioGerenciar');

Route::get('/setor','SetorController@ExibirSetor');
Route::get('/setor-gerenciar','SetorController@ExibirSetorGerenciar');
Route::get('/setor-gerenciar/editarsetor/{id?}', 'SetorController@EditarSetor');

Route::get('/cargo','CargoController@ExibirCargo');
Route::get('/cargo-gerenciar','CargoController@ExibirCargoGerenciar');

Route::get('/rescisao','RescisaoController@ExibirRescisao');
Route::get('/rescisao-gerenciar','RescisaoController@ExibirRescisaoGerenciar');

// POST'S

Route::post('/funcionario/form_funcionario', 'FuncionarioController@CadastrarFuncionario');

Route::post('/cargo/form_cargo', 'CargoController@CadastrarCargo');

Route::post('/setor/form_setor', 'SetorController@CadastrarSetor');
Route::post('/setor-gerenciar/editarsetor/form_setor_editar/{id}', 'SetorController@UpdateSetor');

Route::post('/rescisao/form_rescisao', 'RescisaoController@RegistrarRescisao');



