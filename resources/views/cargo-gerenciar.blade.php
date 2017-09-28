@extends('index')
  @section('principal')
  <span class="titulo">Gerenciamento de Cargo</span><br><br>
  <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
<table class="table table-hover table-bordered">
  <thead>
    <tr class="bg-warning">
      <th>Id</th>
      <th>Nome</th>
      <th>Setor</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cargos as $cr)  
    <tr>
      <th scope="row">{{$cr->id}}</th>
      <th>{{$cr->nomeCargo}}</th>
      <th>{{$cr->setor->nomeSetor}}</th>
      <td style="text-align: center">
          <a href="cargo-gerenciar/editarcargo/{{$cr->id}}" class="btn btn-info" title="EDITAR"><img src="{{url('img/Pencil.png')}}" width="25" class="img-responsive" /></a>&nbsp;<a href="cargo-gerenciar/deletarcargo/{{$cr->id}}" class="btn btn-danger" title="EXCLUIR" onclick=" return deleta();"><img src="{{url('img/lixe.png')}}" width="25" class="img-responsive" /></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
      </div>
            <div class="col-lg-2"></div>
  </div>
  @endsection