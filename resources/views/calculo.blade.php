@extends('index')
 @section('principal')
 <div class="row">
     <div class="col-lg-12">
         <span class="titulo">Rescisão Detalhada</span><br><br>
         <form action="{{url("rescisao/form_rescisao/salvar")}}" method="post">
               <input type="hidden" name="_token" value="{{csrf_token()}}"/>
             <input class="form-control" type="hidden" name="dec" id="dec" value="{{$decimo}}"/>
             <input class="form-control" type="hidden" name="ferias" id="ferias" value="{{$ferias}}"/>
             <input class="form-control" type="hidden" name="multa" id="multa" value="{{$multa}}"/>
             <input class="form-control" type="hidden" name="id" id="id" value="{{$id}}"/>
             <input class="form-control" type="hidden" name="dt" id="dt" value="{{$dtsaida}}"/>
           <div class="container">
             <div class="row">
                <div class="col-lg-12 topo">
                    <div class=" text-center">
                        <span class="topo-font2">CÁLCULO DE RESCISÃO DE CONTRATO</span>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 rescisao-resumo">
                            <div class="func">
                                <span class="topo-font">Nome:</span><BR>
                                <span class="topo-font">CPF:</span><BR>
                                <span class="topo-font">Data da Admisão:</span><br>
                                <span class="topo-font">Data de Dispensa:</span><br>
                                <span class="topo-font">Média Salarial:</span><br>
                            </div>
                        </div>
                        <div class="col-lg-4 rescisao-resumo">
                            <div class="dados">
                               <span>{{$nome}}</span><BR>
                                <span>{{$cpf}}</span><BR>
                                <span>{{$dtentrada}}</span><br>
                                <span>{{$dtsaida}}</span><br>
                                <span><b>R$</b>{{$sal}}</span><br>
                            </div>
                        </div>
                        <div class="col-lg-2 rescisao-resumo-two" >
                            <div class="">
                                <span class="topo-font">13° Sálario:</span><br>
                                <span class="topo-font">Ferias:</span><br>
                                <span class="topo-font">Multa:</span><br>
                                <span class="topo-font">Total a Receber:</span><br>
                            </div>
                        </div>
                        <div class="col-lg-4 rescisao-resumo-two">
                            <div class="dados">
                               <span><b>R$</b>{{$decimo}}</span><BR>
                                <span><b>R$</b>{{$ferias}}</span><BR>
                                <span><b>R$</b>{{$multa}}</span><br>
                                <span><b>R$</b>{{$valorgeral}}</span><br>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
           </div><br><br>
             
             <button type="submit" class="btn btn-success">Salvar Calculo de Rescisão</button>
             <a href="{{url("funcionario-gerenciar")}}" class="btn btn-info" >Voltar</a>
         </form>
     </div>
 </div>
 
 @endsection