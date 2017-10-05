@extends('index')

  @section('principal')
  
  <span class="titulo">Calculos de Rescisão</span><br><br>
  
  <div class="row">
      <div class="col-lg-12">
        <form action="{{url("/rescisao/form_rescisao")}}" method="post" class="form-inline" style="padding-top: 10px;padding-bottom: 15px; border-radius: 10px; border: solid 2px #e00606; box-shadow: 0px 0px 8px;">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="col-md-2">
                <span>Nome Funcionário:</span><br>
                <input class="form-control" type="text" id="func" name="func" disabled="disabled" value="{{$func->nome}}" style="width: 99%"/>
                <input type="hidden" name="id" id="id" value="{{$func->id}}"/>
            </div>
            <div class="col-md-6">
                <span>Data de Saida:</span><br>
                <input class="form-control" id="data" name="data" type="date" required="required" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-outline-danger">Calcular Rescisão</button>
            </div>
        </form>
      </div>
  </div><br><br><br>
  
  @endsection
