@extends('index')
  @section('principal')
  <span class="titulo">Funcionário</span><br><br>
  <div class="row espaço">
      <div class="col-lg-12">
  <form action="/rh/public/funcionario/form_funcionario" method="post" >
  <input type="hidden" name="_token" value="{{csrf_token()}}"/>
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="João Carlos">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">CPF:</label>
    <input type="text" class="form-control" id="cpf" name="cpf" data-mask="000.000.000-00" placeholder="000.000.000-00">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Salário:</label>
    <input type="text" class="form-control" id="sal" name="sal" placeholder="2.500,00">
  </div> <!-- data-mask="000.000.000.000.000.00" data-mask-reverse="true"-->
  <div class="form-group">
    <label for="exampleInputPassword1">Data de Entrada:</label>
    <input type="date" class="form-control" id="dataent" name="dataent">
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Cargo:</label>
    <select class="form-control" id="cargo" name="cargo">
      @foreach($cargos as $cr)  
       <option value="{{$cr->id}}">{{$cr->nomeCargo}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-success" onclick="cadastrado()">Cadastrar</button>
</form>
      </div>
  </div>
  @endsection
