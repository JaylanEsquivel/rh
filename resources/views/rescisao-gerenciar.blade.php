@extends('index')
  @section('principal')
  <span class="titulo">Gerenciamento de RescisÃµes</span><br><br>
  <div class="row">
      <div class="col-lg-12">
<table class="table table-hover table-bordered">
    <thead>
    <tr class="bg-warning">
      <th>Id</th>
      <th>Nome</th>
      <th>Data de P.Saida</th>
      <th>Valor Ferias</th>
      <th>Valor Decimo</th>
      <th>Valor Multa</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
     @foreach ($resc as $rc)
    <tr>
      <th>{{$rc->id}}</th>
      <td>{{$rc->funcionario_id}}</td>
      <td>{{$rc->datadesaida}}</td>
      <td>{{$rc->ferias}}</td>
      <td>{{$rc->decimo}}</td>
      <td>{{$rc->multa}}</td>
      <td style="text-align: center">
          <a href="/" class="btn btn-info" title="NOVO CALCULO"><img src="{{url('img/Pencil.png')}}" width="25" class="img-responsive" /></a>&nbsp;
          <a href="/" class="btn btn-danger" title="EXCLUIR" onclick=" return deleta();"><img src="{{url('img/lixe.png')}}" width="25" class="img-responsive" /></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
      </div>
  </div>
  @endsection