@extends('index')
  @section('principal')
  <span class="titulo">Gerenciamento de Cargo</span><br><br>
  <div class="row">
      <div class="col-lg-6">
<table class="table table-hover table-bordered">
  <thead>
    <tr class="bg-warning">
      <th>Id</th>
      <th>Nome</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <th>Analista</th>
      <td style="text-align: center">
          <a href="#" class="btn btn-info">Editar</a>&nbsp;<a href="#" class="btn btn-danger">Deleta</a>
      </td>
    </tr>
  </tbody>
</table>
      </div>
  </div>
  @endsection