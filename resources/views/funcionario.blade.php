@extends('index')
  @section('principal')
  <span class="titulo">Funcionario</span><br><br>
  <div class="row">
      <div class="col-lg-12">
   <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nome:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="João Carlos">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">CPF:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="99999999999">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Salário:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="2500">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Data de Entrada:</label>
    <input type="date" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Cargo:</label>
    <select class="form-control" id="exampleSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
    </select>
  </div>
  <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
      </div>
  </div>
  @endsection
