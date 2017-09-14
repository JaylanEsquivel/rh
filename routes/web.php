<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index','ViewController@Exibirindex');


