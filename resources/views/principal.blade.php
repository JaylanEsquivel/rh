@extends('index')
  @section('principal')
  <span class="titulo">Painel de Controle</span>&nbsp;/&nbsp;<span class="sub-titulo">Seja Bem vindo(a).</span>
        <div class="row">
            <div class="col-lg-12"><br>
                <div class="row">
                      <div class="col-md-3">
                          <div class="card" style="background-color: #007bff">
                    <a href="{{url('funcionario-gerenciar')}}"><div class="card-header cores">
                                  <div class="row">
                                      <div class="col-md-5 sps">
                                          <i class="fa fa-users fa-3x"></i>
                                      </div>
                                      <div class="col-md-7">
                                          <span class="titulo-resumo">{{$func}}</span>
                                          <div class="row">
                                          <span class="titulo-text">Funcionários</span>
                                          </div>
                                      </div>
                                  </div>
                                </div></a>
                          </div>
                      </div>  
                      <div class="col-md-3">
                        <div class="card" style="background-color:#00cc33 ">
                            <a href="{{url('cargo-gerenciar')}}"><div class="card-header cores">
                                <div class="row">
                                    <div class="col-md-5 sps">
                                        <i class="fa fa-briefcase fa-3x"></i>
                                    </div>
                                    <div class="col-md-7">
                                        <span class="titulo-resumo">{{$car}}</span>
                                        <div class="row">
                                        <span class="titulo-text">Cargos</span>
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                      </div>  
                    <div class="col-md-3">
                        <div class="card bg-warning">
<a href="{{url('setor-gerenciar')}}"><div class="card-header cores">
                                <div class="row">
                                    <div class="col-md-5 sps">
                                        <i class="fa fa-cubes fa-3x"></i>
                                    </div>
                                    <div class="col-md-7">
                                        <span class="titulo-resumo">{{$set}}</span>
                                        <div class="row">
                                        <span class="titulo-text">Setores</span>
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                      </div>
                    <div class="col-md-3">
                        <div class="card" style="background-color: #ff0033">
                            <a href="{{url('rescisao-gerenciar')}}"><div class="card-header cores">
                                <div class="row">
                                    <div class="col-md-5 sps">
                                        <i class="fa fa-money fa-3x"></i>
                                    </div>
                                    <div class="col-md-7">
                                        <span class="titulo-resumo">{{$resc}}</span>
                                        <div class="row">
                                        <span class="titulo-text">Rescisões Abertas</span>
                                        </div>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                      </div>
                </div>
            </div>
        </div><br>
  <div class="row">
      <div class="col-lg-12">
          <img src="{{url('img/02.jpg')}}" class="img-responsive" width="100%" height="350" />        
      </div>
  </div>
  
  @endsection
