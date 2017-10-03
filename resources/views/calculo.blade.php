@extends('index')
 @section('principal')
 <div class="row">
     <div class="col-lg-12">
         <span class="titulo">Rescisão Detalhada</span><br>
         <form action="" method="post">
             <input class="form-control" name="resc" id="resc" value="{{$decimo}}" disabled="disabled"/>
             
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
                               <span>Jaylan</span><BR>
                                <span>074.258.364-07</span><BR>
                                <span>01/01/16</span><br>
                                <span>01/01/17</span><br>
                                <span>1000</span><br>
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
                               <span>755.55</span><BR>
                                <span>2750</span><BR>
                                <span>1000</span><br>
                                <span>4500</span><br>
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