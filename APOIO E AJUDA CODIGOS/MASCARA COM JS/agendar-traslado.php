
<a name="agendar"></a>
<div id="centro-pagina">
    <div align="left" style="padding:10px 0;">
        <span class="texto-agendar" style="color: #CC283B;">Agendar Translado &nbsp;</span>
        <div id="flutuante"><img src="img/relogio2.png" width="82" height="82" /></div>
    </div>
</div><!-- centro-pagina -->
<div class="conteudo-divider-class"></div>

<div class="blocks contact">
    <div class="container">
        <div class="row"> 
            <div class="sixcol">
                <div class="onehalf-block-left">

                    <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                        <tr>
                            <td colspan="2">
                                <p style="font-size:18px !important;">Agende agora seua translados</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="11%">&nbsp;</td>
                        </tr>
                       <!-- <tr>
                            <td colspan="2">
                                <p style="font-size:16px !important; padding:10px 0;" class="texto-agendar">Dados do Voo</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                Modalidade:
                                <select name="modalidade-do-voo" id="modalidade-do-voo">
                                    <option selected="selected" disabled="disabled"> ... Selecione .. </option>
                                    <option value="FSA-SSA">Feira > Salvador</option>
                                    <option value="SSA-FSA">Salvador > Feira</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Horário do Voo de Ida
                            </td>
                            <td width="16%">
                                Nº do voo de volta:
                            </td>
                            <td width="16%">	
                                Horário da chegada:
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                                <div class="contact-input-shadow">
                                <input type="text" name="HORARIOVOOIDA" id="HORARIOVOOIDA"
                                 maxlength="5" onkeypress="MascaraHORARIO(HORARIOVOOIDA);" 
                                 onblur="ValidaHorario('#HORARIOVOOIDA');" />
                                </div>
                            </div>
                            </td>
                            <td>
                            <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                            <div class="contact-input-shadow">
                                <input type="text" size="20" name="NUMVOO" id="NUMVOO"
                                 onkeypress="mascaraInteiro();" />
                            </div>
                            </div>
                            </td>
                            <td>	
                            <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                            <div class="contact-input-shadow">
                                <input type="text" name="HORARIOVOOCHEGADA" id="HORARIOVOOCHEGADA"
                                 maxlength="5" onkeypress="MascaraHORARIO(HORARIOVOOCHEGADA);"
                                 onblur="ValidaHorario('#HORARIOVOOCHEGADA');"  />
                            </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">Para o campo Horário digite apenas números. Exemplo: 13:30.</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>-->
                        <tr>
                            <td colspan="2">
                                <p style="color: #CC283B; font-size:16px !important; padding:10px 0;" class="texto-agendar">Translado</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                Modalidade:
                                <select name="modalidade-da-viagem" id="modalidade-da-viagem" onchange="VerificaModalidade();">
                                    <option selected="selected" disabled="disabled"> ... Selecione .. </option>
                                    <option value="IDAVOLTA">Ida e Volta</option>
                                    <option value="IDAFSASSA">Feira de Santana > Salvador</option>
                                    <option value="IDASSAFSA">Salvador > Feira de Santana</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p style="font-size:14px !important; padding:10px 0;">IDA</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                    <tr>
                                        <td width="11%">
                                            <div id="displayDEPARA">
                                                <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                                                    <div class="contact-input-shadow">
                                                        De:
                                                        <select name="DePara" id="DePara" onchange="setaValPara();">
                                                            <option value="" selected="selected" disabled="disabled">
                                                                ... Selecione ... 
                                                            </option>
                                                            <option value="FEIRA">Feira de Santana</option>
                                                            <!--<option value="SSA">Salvador</option>-->
                                                        </select>
                                                        <input type="hidden" name="tipo" id="tipo" value="PRIME" />
                                                    </div>
                                                </div>
                                            </div><!-- Display De para -->
                                            <div id="displayTEXTDEPARA" style="display:none;">  
                                                <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                                                    <div class="contact-input-shadow">
                                                        De:
                                                        <input type="text" name="recebeDestinoDE" readonly="readonly" id="recebeDestinoDE" />
                                                    </div>
                                                </div> 
                                            </div><!-- Depara texto --> 
                                        </td>
                                        <td width="89%">
                                            <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                                                <div class="contact-input-shadow">
                                                    para:
                                                    <input type="text" name="recebeDestino" readonly="readonly" id="recebeDestino" />
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                </table>
                            </td>	
                        </tr>
                        <tr>
                            <td>
                                Horário do Voo:
                            </td>
                            <td width="11%">
                                Número do Voo:
                            </td>
                            <td>
                                Companhia aérea:
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                                    <div class="contact-input-shadow">
                                        <input type="text" name="HORARIOVOOIDA" id="HORARIOVOOIDA"
                                               maxlength="5" onblur="ValidaHorario('#HORARIOVOOIDA');" onkeypress="MascaraHORARIO(HORARIOVOOIDA);"
                                               />
                                               <!-- onblur="ValidaHorario('#HORARIOVOOIDA');" onkeypress="MascaraHORARIO(HORARIOVOOIDA);" -->
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                                    <div class="contact-input-shadow">
                                        <input type="text" size="20" name="NUMVOOIDA" id="NUMVOOIDA" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                                    <div class="contact-input-shadow">
                                        <input type="text" size="20" name="COMPANHIAIDA" id="COMPANHIAIDA" />
                                    </div>
                                </div>
                            </td>
                            <td width="12%">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                                    <div class="contact-input-shadow">
                                        Data de Ida:
                                        :&nbsp;&nbsp;<img alt="Selecione uma data" src="img/imagensCalendar/calendario.jpg" width="18" height="18" align="absmiddle" style="cursor:pointer"  
                                                          id="dt_ini_pub_id" onclick="displayCalendar(document.getElementById('TrasladoDataDeIda'), 'dd/mm/yyyy', this)" />
                                        <input type="text" name="TrasladoDataDeIda" id="TrasladoDataDeIda" maxlength="10" onkeypress="MascaraDATA(TrasladoDataDeIda);" />
                                    </div>
                                </div>
                            </td>
                            <!--<td>
                            <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                                <div class="contact-input-shadow">
                                Horário de ida:
                                    <input type="text" name="TrasladoHorarioIda" id="TrasladoHorarioIda" 
                                    maxlength="5" onkeypress="MascaraHORARIO(TrasladoHorarioIda);"
                                    onblur="ValidaHorario('#TrasladoHorarioIda');"  />
                              </div>
                              </div>  
                            </td>-->
                            <td>
                                <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                                    <div class="contact-input-shadow">
                                        Saída e volta:
                                        <select name="SaidaEVolta" id="SaidaEVolta" onchange="MensagemSaida2();">
                                            <option value="" selected="selected" disabled="disabled">
                                                ... Selecione ... 
                                            </option>
                                            <option value="RESIDENCIA">Residência</option>
                                            <option value="AGENCIA">Agência</option>

                                        </select>
                                    </div>
                                </div>  
                            </td>
                            <td width="12%">
                                <div class="contact-input" style="width:170px; padding:0 15px 0 0;">
                                    <div class="contact-input-shadow">
                                        Quantidade de pessoas:
                                        <select name="QTDPessoas" id="QTDPessoas">
                                            <option value="" selected="selected" disabled="disabled">
                                                ... Selecione ... 
                                            </option>
                                            <?php
                                            $cont = 1;
                                            while ($cont <= 20) {
                                                echo '<option value="' . $cont . '">' . $cont . '</option>';
                                                $cont++;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>  
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div id="mensagemSV" style="display:none;">
                                    

                                </div><!-- Mensagem SV -->
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div id="display1">
                                    <p style="font-size:14px !important; padding:10px 0;">VOLTA</p>
                                </div><!-- Display 1 -->
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                    <tr>
                                        <td width="12%">
                                            <div id="display2">
                                                <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                                                    <div class="contact-input-shadow">
                                                        de:
                                                        <input type="text" name="recebeDestinoVoltaDe" readonly="readonly" id="recebeDestinoVoltaDe" />
                                                    </div>
                                                </div>
                                            </div><!-- Display 01 -->
                                        </td>
                                        <td width="88%">
                                            <div id="display5">
                                                <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                                                    <div class="contact-input-shadow">
                                                        para:
                                                        <input type="text" name="recebeDestinoVoltaPara" readonly="readonly" id="recebeDestinoVoltaPara" />
                                                    </div>
                                                </div>
                                            </div><!-- display 5 -->
                                        </td>
                                    </tr>
                                </table>
                            </td>	
                        </tr>
                        <tr>
                            <td>
                                <div id="display3">
                                    <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                                        <div class="contact-input-shadow">
                                            Data de Volta:&nbsp;&nbsp;<img alt="Selecione uma data" src="img/imagensCalendar/calendario.jpg" width="18" height="18" align="absmiddle" style="cursor:pointer"  
                                                                           id="dt_ini_pub_id" onclick="displayCalendar(document.getElementById('TrasladoDatadeVolta'), 'dd/mm/yyyy', this)" />
                                            <input type="text" name="TrasladoDatadeVolta" id="TrasladoDatadeVolta"
                                                   maxlength="10" onkeypress="MascaraDATA(TrasladoDatadeVolta);" />
                                        </div>
                                    </div>
                                </div><!-- display 3 -->
                            </td>
                            <td>
                                <div id="display4">
                                    <div class="contact-input" style="width:150px; padding:0 15px 0 0;">
                                        <div class="contact-input-shadow">
                                            Horário de chegada:
                                            <input name="TrasladoHorarioVolta" id="TrasladoHorarioVolta" type="text"
                                                   maxlength="5" onkeypress="MascaraHORARIO(TrasladoHorarioVolta);"
                                                   onblur="ValidaHorario('#TrasladoHorarioVolta');" />
                                        </div>
                                    </div> 
                                </div><!-- display 4 --> 
                            </td>
                            <td>
                                <div id="display6">
                                    <div class="contact-input" style="width:150px; padding:0 15px 0 0;">
                                        <div class="contact-input-shadow">
                                            N° do voo de volta:
                                            <input name="numvoodevolta" id="numvoodevolta" type="text" />
                                        </div>
                                    </div> 
                                </div><!-- display 6 --> 
                            </td>
                            <td width="65%">
                                <div id="display7">
                                    <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                                        <div class="contact-input-shadow">
                                            Companhia aérea:
                                            <input type="text" size="20" name="COMPANHIAVOLTA" id="COMPANHIAVOLTA" />
                                        </div>
                                    </div>
                                </div><!-- display 7 -->
                            </td>
                            <td width="1%">&nbsp;&nbsp;&nbsp;

                            </td>
                        </tr>
                         <!--<tr>
                           <td colspan="2">
                           <div class="contact-input" style="width:260px; padding:0 15px 0 0;">
                               <div class="contact-input-shadow">
                               Observações:
                                   <textarea name="TrasladoObservacao" id="TrasladoObservacao" cols="35" style="height:70px; width:260px;" rows="3">
                                   </textarea>
                             </div>
                             </div> 
                           
                           </td>
                       </tr>-->
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p style="color: #CC283B; font-size:16px !important; padding:10px 0;" class="texto-agendar">Suas Informações</p>
                            </td>
                            <td>	
                                  <!--<a href="#"><img src="img/bt_cadastroUP.png" border="0" /></a>-->
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                    <tr>
                                        <td width="18%">

                                            <div class="contact-input" style="width:250px; padding:0 15px 0 0;">
                                                <label for="">CPF/CNPJ:</label>
                                                <div class="contact-input-shadow">
                                                    <input type="text" name="CPF" id="CPF" onblur="ValidaCPF();" maxlength="14" />
                                                </div><div id="LoaderCPF">
                                                    <input type="hidden" name="validadeCPF" id="validadeCPF" value="" />
                                                </div><!-- Loader CPF -->
                                            </div>
                                        </td>
                                        <td width="18%">
                                            <div class="contact-input" style="width:250px; padding:0 15px 0 0;">
                                                <label for="contact-name">Email:</label>
                                                <div class="contact-input-shadow">
                                                    <input type="text" name="Email" onblur="ValidaEmail();" id="Email" />
                                                </div>
                                            </div>
                                        </td>
                                        <td width="64%" align="left">
                                            <input type="text" 
                                                   style="color:#F00; padding:0 !important; margin:0 !important; background:none !important; border:none !important;"
                                                   id="RecebeValidacao" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="18%">
                                            <div class="contact-input" style="width:250px; padding:0 15px 0 0;">
                                                <label for="">Nome ou Razão Social:</label>
                                                <div class="contact-input-shadow">
                                                    <input type="text" name="Nome" id="Nome" />
                                                </div>
                                            </div>

                                        </td>
                                        <td width="18%">
                                            <div class="contact-input" style="width:250px; padding:0 15px 0 0;">
                                                <label for="contact-name">Identidade(RG) do Responsável:</label>
                                                <div class="contact-input-shadow">
                                                    <input type="text" name="IDENT" id="IDENT" onkeypress="MascaraIDENTIDADE(IDENT);" maxlength="11" />
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                    <tr>
                                        <td width="251" align="left" style="width:125px;">
                                            <div class="contact-input" style="width:110px; padding:0 35px 0 0;">
                                                <label for="">CEP:</label>
                                                <div class="contact-input-shadow">
                                                    <input type="text" name="CEPC" id="CEPC" onblur="atualizacep(this.value)" onkeypress="MascaraCEP(CEPC);" maxlength="9" />

                                                </div>
                                            </div>
                                        </td>
                                        <td width="255" align="left" style="width:225px;">
                                            <div class="contact-input" style="width:220px; padding:0 15px 0 0;">
                                                <label for="contact-name">Endereco:</label>
                                                <div class="contact-input-shadow">
                                                    <input type="text" name="endereco" id="endereco" value="" />
                                                </div>
                                            </div>
                                        </td>
                                        <td width="451" align="left" style="width:265px;">
                                            <div class="contact-input" style="width:250px; padding:0 15px 0 0;">
                                                <label for="contact-name">Ponto de referência:</label>
                                                <div class="contact-input-shadow">
                                                    <input type="text" name="PontoReferencia" id="PontoReferencia" value="" />
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td width="251" align="left" style="width:125px;">
                                            <div class="contact-input" style="width:110px; padding:0 15px 0 0;">
                                                <label for="contact-name">Número:</label>
                                                <div class="contact-input-shadow">
                                                    <input type="text" name="NumeroLogadouro" id="NumeroLogadouro" value="" />

                                                </div>
                                            </div>
                                        </td>
                                        <td width="255" align="left" style="width:255px;">
                                            <div class="contact-input" style="width:220px; padding:0 15px 0 0;">
                                                <label for="contact-name">Bairro:</label>
                                                <div class="contact-input-shadow">
                                                    <input type="text" name="Bairro" id="Bairro" value="" />
                                                </div>
                                            </div>
                                        </td>
                                        <td width="451" align="left" style="width:220px;">

                                            <div class="contact-input" style="width:220px; padding:0 15px 0 0;">
                                                <label for="contact-name">Telefone:</label>
                                                <div class="contact-input-shadow">
                                                    <input type="text" name="telefone" id="telefone" 
                                                           onkeypress="MascaraTELEFONE(telefone);" maxlength="14" value="" />
                                                </div>
                                            </div>
                                        </td>
                                        <td>&nbsp;

                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="251" align="left" style="width:125px;">
                                            <div class="contact-input" style="width:130px; padding:0 15px 0 0;">
                                                <div class="contact-input-shadow">
                                                    Estado:
                                                    <input type="text" name="EstadoUF" id="EstadoUF" />
                                                    <!-- <option value="" selected="selected" disabled="disabled">
                                                              ... Selecione ... 
                                                         </option>
                                                       <option value="AC">Acre</option>
                                                       <option value="AL">Alagoas</option>
                                                       <option value="AM">Amazonas</option>
                                                       <option value="AP">Amapá</option>
                                                       <option value="BA">Bahia</option>
                                                       <option value="CE">Ceará</option>
                                                       <option value="DF">Distrito Federal</option>
                                                       <option value="ES">Espirito Santo</option>
                                                       <option value="GO">Goiás</option>
                                                       <option value="MA">Maranhão</option>
                                                       <option value="MG">Minas Gerais</option>
                                                       <option value="MS">Mato Grosso do Sul</option>
                                                       <option value="MT">Mato Grosso</option>
                                                       <option value="PA">Pará</option>
                                                       <option value="PB">Paraíba</option>
                                                       <option value="PE">Pernambuco</option>
                                                       <option value="PI">Piauí</option>
                                                       <option value="PR">Paraná</option>
                                                       <option value="RJ">Rio de Janeiro</option>
                                                       <option value="RN">Rio Grande do Norte</option>
                                                       <option value="RO">Rondônia</option>
                                                       <option value="RR">Roraima</option>
                                                       <option value="RS">Rio Grande do Sul</option>
                                                       <option value="SC">Santa Catarina</option>
                                                       <option value="SE">Sergipe</option>
                                                       <option value="SP">São Paulo</option>
                                                       <option value="TO">Tocantins</option>
                                                   </select>-->

                                                </div>
                                            </div>  
                                        </td>
                                        <td width="255" align="left" style="width:255px;">
                                            <div class="contact-input" style="width:220px; padding:0 15px 0 0;">
                                                <label for="contact-name">Cidade:</label>
                                                <div class="contact-input-shadow">
                                                    <input type="text" name="cidade" id="cidade" value="" />
                                                </div>
                                            </div>
                                        </td>
                                        <td width="451" align="left" style="width:220px;">

                                            <div class="contact-input" style="width:220px; padding:0 15px 0 0;">
                                                <label for="contact-name">Celular:</label>
                                                <div class="contact-input-shadow">
                                                    <input type="text" name="celular" id="celular" 
                                                           onkeypress="MascaraTELEFONECELULAR(celular);" maxlength="15" value="" />
                                                </div>
                                            </div>
                                        </td>
                                        <td>&nbsp;

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="contact-input" style="width:300px; padding:0 15px 0 0;">
                                                <div class="contact-input-shadow">
                                                    Observações:
                                                    <textarea name="EnderecoObservacao" id="EnderecoObservacao" cols="35" style="height:70px; width:300px;" rows="3"></textarea>
                                                </div>
                                            </div> 

                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <input type="checkbox" name="termos" id="termos" />
                                Aceito os <a href="?view=termos#termos" target="_blank" class="texto-agendar" style="color: #CC283B; font-size:16px !important;">
                                    termos</a> para agendar meua translados. Atenção todos os campos são obrigatórios.
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <br /><br />
                                <input type="image" onclick="InsereTraslado();"
                                       src="img/agendar-traslado-novo.png" class="hover-jump" value="agendar" />
                                <div id="LoaderInsereTraslado"></div><!-- Loader -->
                            </td>
                        </tr>
                    </table>

                </div>
            </div><!--   END Contact left block    -->

            <div class="clear"></div>    
        </div>
    </div>
</div>  

<script type="text/javascript" src="js/jquery.mask.js"></script>
<script type="text/javascript">
    var masks = ['000.000.000-009', '00.000.000/0000-00'];
    jQuery("#CPF").mask(masks[0], {
        onKeyPress: function(val, e, field, options) {
                    field.mask(val.length > 14 ? masks[1] : masks[0], options);
                },
        byPassKeys: [null]
    });
</script>