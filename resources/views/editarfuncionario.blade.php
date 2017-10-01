@extends('index')
  @section('principal')    
<span class="titulo">Funcionario</span><br><br>
  <div class="row espaço">
      <div class="col-lg-12">
  <form action="/rh/public/funcionario-gerenciar/editarfuncionario/form_funcionario_editar/{{$funcionarios->id}}" method="post" >
  <input type="hidden" name="_token" value="{{csrf_token()}}"/>
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nomeFunc" name="nomeFunc" value="{{$funcionarios->nome}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">CPF:</label>
    <input type="text" class="form-control" id="cpf" name="cpf" value="{{$funcionarios->cpf}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Salário:</label>
    <input type="text" class="form-control" id="sal" name="sal" value="{{$funcionarios->salario}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Data de Entrada:</label>
    <input type="date" class="form-control" id="dataent" name="dataent" value="{{$funcionarios->datadeentrada}}">
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Cargo:</label>
    <select class="form-control" id="cargo" name="cargo">
      @foreach($cargos as $cr)
        @if($cr->id == $funcionarios->cargo_id)
            <option value="{{$cr->id}}" selected>{{$cr->nomeCargo}}</option>
        @else
            <option value="{{$cr->id}}">{{$cr->nomeCargo}}</option>
        @endif
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-success" onclick=" return update();">Salvar Alterações</button>
</form>
      </div>
  </div>  
@endsection