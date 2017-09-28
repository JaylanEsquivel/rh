@extends('index')
  @section('principal')
  <span class="titulo">Setor</span><br><br>
  <div class="row espaço">
      <div class="col-lg-12">
<form action="{{url('/setor/form_setor')}}" method="post">
         <input type="hidden" name="_token" value="{{csrf_token()}}"/>
  <div class="form-group">
    <label for="setor">Nome:</label>
    <input type="text" class="form-control" id="setor" name="setor" placeholder="Desenvolvimento">
  </div>
         <button type="submit" class="btn btn-success" onclick="cadastrado()">Cadastrar</button>
</form>
      </div>
  </div>
  @endsection
