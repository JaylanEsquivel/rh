@extends('index')
  @section('principal')
  <span class="titulo">Gerenciamento de Rescisões</span><br><br>
  <div class="row">
      <div class="col-lg-12">
<table class="table table-hover table-bordered">
    <thead>
    <tr class="bg-warning">
      <th>Id</th>
      <th>Data rescisao</th>
      <th>Funcionario</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td style="text-align: center">
          <a href="/" class="btn btn-success" title="VISUALIZAR"><img src="{{url('img/lupa.png')}}" width="25" class="img-responsive" /></a>&nbsp;
          <a href="/" class="btn btn-danger" title="EXCLUIR" onclick=" return deleta();"><img src="{{url('img/lixe.png')}}" width="25" class="img-responsive" /></a>
      </td>
    </tr>
  </tbody>
</table>
      </div>
  </div>
  @endsection