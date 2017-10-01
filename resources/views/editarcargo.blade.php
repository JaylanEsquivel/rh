  @extends('index')
  @section('principal')
       <span class="titulo">Cargo</span><br><br>
  <div class="row espaço">
      <div class="col-lg-12">
   <form action="/rh/public/cargo-gerenciar/editarcargo/form_cargo_editar/{{$cargos->id}}" method="post">
  <input type="hidden" name="_token" value="{{csrf_token()}}"/>
  <div class="form-group">
    <label for="nomeCargo">Nome:</label>
    <input type="text" class="form-control" id="nomeCargo" name="nomeCargo" aria-describedby="emailHelp" value="{{$cargos->nomeCargo}}">
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Setor:</label>
    <select class="form-control" id="setorid" name="setorid">
      @foreach($setores as $st)  
        @if($st->id == $cargos->setor_id)
          <option value="{{$st->id}}">{{$st->nomeSetor}}</option>
        @else
          <option value="{{$st->id}}">{{$st->nomeSetor}}</option>
        @endif
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-success" onclick=" return update();">Salvar Alterações</button>
</form>
      </div>
  </div>
@endsection