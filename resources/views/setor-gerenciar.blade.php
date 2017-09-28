@extends('index')
  @section('principal')
  <span class="titulo">Gerenciamento de Setor</span><br><br>
  <div class="row">
      <div class="col-lg-3"></div>
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
    @foreach ($setores as $st)
    <tr>
      <th scope="row">{{$st->id}}</th>
      <th>{{$st->nomeSetor}}</th>
      <td style="text-align: center">
          <a href="setor-gerenciar/editarsetor/{{$st->id}}" class="btn btn-info" title="EDITAR"><img src="{{url('img/Pencil.png')}}" width="25" class="img-responsive" /></a>&nbsp;<a href="setor-gerenciar/deletarsetor/{{$st->id}}" class="btn btn-danger" title="EXCLUIR" onclick=" return deleta();"><img src="{{url('img/lixe.png')}}" width="25" class="img-responsive" /></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
      </div>
            <div class="col-lg-3"></div>
  </div>
  @endsection