@extends('index')
  @section('principal')
  <span class="titulo">Gerenciamento de Funcionario</span><br><br>
  <div class="row">
      <div class="col-lg-12">
<table class="table table-hover table-bordered">
    <thead>
    <tr class="bg-warning">
      <th>Id</th>
      <th>Nome</th>
      <th>Cpf</th>
      <th>Salário</th>
      <th>Cargo</th>
      <th>Data de entrada</th>
      <th>Data de saida</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($funcionarios as $fc)
    <tr>
      <th scope="row">{{$fc->id}}</th>
      <td>{{$fc->nome}}</td>
      <td>{{$fc->cpf}}</td>
      <td>{{$fc->salario}}</td>
      <td>{{$fc->cargo->nomeCargo}}</td>
      <td>{{$fc->datadeentrada}}</td>
      <td>{{$fc->datadesaida}}</td>
      <td style="text-align: center">
          <a href="funcionario-gerenciar/editarfuncionario/{{$fc->id}}" class="btn btn-info">Editar</a>&nbsp;<a href="funcionario-gerenciar/deletarfuncionario/{{$fc->id}}" class="btn btn-danger">Deleta</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
      </div>
  </div>
  @endsection