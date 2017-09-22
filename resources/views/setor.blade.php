@extends('index')
  @section('principal')
  <span class="titulo">Setor</span><br><br>
  <div class="row">
      <div class="col-lg-12">
   <form action="/rh/public//cargo/form_cargo" method="post">
         <input type="hidden" name="_token" value="{{csrf_token()}}"/>
  <div class="form-group">
    <label for="exampleInputEmail1">Nome:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Desenvolvimento">
  </div>
  <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
      </div>
  </div>
  @endsection
