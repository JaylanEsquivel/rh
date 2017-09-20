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
      <th>Data de entrada</th>
      <th>Data de saida</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td style="text-align: center">
          <a href="#" class="btn btn-info">Editar</a>&nbsp;<a href="#" class="btn btn-danger">Deleta</a>
      </td>
    </tr>
  </tbody>
</table>
      </div>
  </div>
  @endsection