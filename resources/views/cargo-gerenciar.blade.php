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
    @foreach ($cargos as $cr)  
    <tr>
      <th scope="row">{{$cr->idcargo}}</th>
      <th>{{$cr->nomeCargo}}</th>
      <td style="text-align: center">
          <a href="cargo-gerenciar/editarcargo/{{$cr->idcargo}}" class="btn btn-info">Editar</a>&nbsp;<a href="/cargo-gerenciar/deletarcargo/{{$cr->idcargo}}" class="btn btn-danger">Deleta</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
      </div>
  </div>
  @endsection