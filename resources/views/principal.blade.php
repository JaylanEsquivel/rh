@extends('index')
  @section('principal')
  <span class="titulo">Painel de Controle</span>&nbsp;/&nbsp;<span class="sub-titulo">Seja Bem vindo(a).</span>
        <div class="row">
            <div class="col-lg-12"><br>
                <div class="row">
                      <div class="col-md-3">
                          <div class="card" style="background-color: #007bff">
                              <div class="card-header cores">
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
                              </div>
                          </div>
                      </div>  
                      <div class="col-md-3">
                        <div class="card" style="background-color:#00cc33 ">
                            <div class="card-header cores">
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
                            </div>
                        </div>
                      </div>  
                    <div class="col-md-3">
                        <div class="card bg-warning">
                            <div class="card-header cores">
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
                            </div>
                        </div>
                      </div>
                    <div class="col-md-3">
                        <div class="card" style="background-color: #ff0033">
                            <div class="card-header cores">
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
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
  <div class="row">
      <div class="col-lg-12">
          
      </div>
  </div>
  
  @endsection
