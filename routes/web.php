<?php

Route::get('/', function () {
    return view('welcome');
});
//GET'S

Route::get('/index','ViewController@Exibirindex');
Route::get('/funcionario','ViewController@ExibirFuncionario');
Route::get('/funcionario-gerenciar','ViewController@ExibirFuncionarioGerenciar');
Route::get('/setor','ViewController@ExibirSetor');
Route::get('/setor-gerenciar','ViewController@ExibirSetorGerenciar');
Route::get('/cargo','ViewController@ExibirCargo');
Route::get('/cargo-gerenciar','ViewController@ExibirCargoGerenciar');
Route::get('/rescisao','ViewController@ExibirRescisao');
Route::get('/rescisao-gerenciar','ViewController@ExibirRescisaoGerenciar');

// POST'S

Route::post('/funcionario/form_funcionario', 'FuncionarioController@CadastrarFuncionario');
Route::post('/cargo/form_cargo', 'CargoController@CadastrarCargo');
Route::post('/setor/form_setor', 'SetorController@CadastrarSetor');
Route::post('/rescisao/form_rescisao', 'RescisaoController@RegistrarRescisao');



