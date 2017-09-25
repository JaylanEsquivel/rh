@extends('index')
  @section('principal')
  <span class="titulo">Cargo</span><br><br>
  <div class="row espaço">
      <div class="col-lg-12">
   <form action="/rh/public/cargo/form_cargo" method="post">
  <input type="hidden" name="_token" value="{{csrf_token()}}"/>
  <div class="form-group">
    <label for="nomeCargo">Nome:</label>
    <input type="text" class="form-control" id="nomeCargo" name="nomeCargo" aria-describedby="emailHelp" placeholder="Analista de Software">
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Setor:</label>
    <select class="form-control" id="setorid" name="setorid">
      @foreach($setores as $st)  
      <option value="{{$st->idsetor}}">{{$st->nomeSetor}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
      </div>
  </div>
  @endsection
