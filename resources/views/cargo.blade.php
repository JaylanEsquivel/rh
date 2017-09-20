@extends('index')
  @section('principal')
  <span class="titulo">Cargo</span><br><br>
  <div class="row">
      <div class="col-lg-12">
   <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nome:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Analista de Software">
  </div>
  <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
      </div>
  </div>
  @endsection
