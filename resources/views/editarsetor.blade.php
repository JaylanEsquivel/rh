@extends('index')
 @section('principal')
       <span class="titulo">Edição de Setor</span><br><br>
  <div class="row espaço">
      <div class="col-lg-12">
<form action="/rh/public/setor-gerenciar/editarsetor/form_setor_editar/{{$setores->id}}" method="post">
         <input type="hidden" name="_token" value="{{csrf_token()}}"/>
  <div class="form-group">
    <label for="setor">Nome:</label>
    <input type="text" class="form-control" id="setor" name="setor" value="{{$setores->nomeSetor}}">
  </div>
  <button type="submit" class="btn btn-success" onclick="update();">Salvar Alterações</button>
</form>
      </div>
  </div>            
@endsection