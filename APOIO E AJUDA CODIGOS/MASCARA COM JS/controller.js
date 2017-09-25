// JavaScript Document

/* **************************** */
/*      Buscar CEP Correios     */
/* **************************** */

function atualizacep(cep){
      cep = cep.replace(/\D/g,"")
      url="http://cep.correiocontrol.com.br/"+cep+".js"
      s=document.createElement('script')
      s.setAttribute('charset','utf-8')
      s.src=url
      document.querySelector('head').appendChild(s)
    }

    function correiocontrolcep(valor){
      if (valor.erro) {
        alert('Cep não encontrado');
        return;
      };
      document.getElementById('endereco').value=valor.logradouro
      document.getElementById('Bairro').value=valor.bairro
      document.getElementById('cidade').value=valor.localidade
      document.getElementById('EstadoUF').value=valor.uf
    }


/* **************************** */
/*   Mensagem de Saida e Volta  */
/* **************************** */

function MensagemSaida2(){
	var saidaevolta = $('#SaidaEVolta').val();
	var novahora = document.getElementById('HORARIOVOOIDA').value;
	novahoraT = novahora.substring(3,5);
    novahora = novahora.substring(0,2);
	novahora = novahora - 3;
		if(saidaevolta == "RESIDENCIA"){
			$('#mensagemSV').css("display", "block");
			$('#mensagemSV').html("<div style='padding:8px; font-size:16px !important; color:#F00 !important; border:1px solid #F00; background:#FFC;'>O Motorista irá comparecer <span id='hu'></span>hs na sua residência, ligando para o telefone de contato para confirmar.</div>");
		}else if(saidaevolta == "AGENCIA"){
			$('#mensagemSV').css("display", "block");
			$('#mensagemSV').html("<div style='padding:8px; font-size:16px !important; color:#F00 !important; border:1px solid #F00; background:#FFC;'>O Sr(a). deverá comparecer as <span id='hu'></span>hs em nossa agência no dia do voo de ida.</div>");
		}else if(saidaevolta == "AEROPORTO"){
			$('#mensagemSV').css("display", "none");
			$('#mensagemSV').html('<div style="padding:8px; font-size:16px !important; color:#F00 !important; border:1px solid #F00; background:#FFC;"></div>');
		}
					$('#hu').html(novahora+':'+novahoraT);
}


/* **************************** */
/*   Modalidade do traslado     */
/* **************************** */

function VerificaModalidade(){
	var modali = $('#modalidade-da-viagem').val();
	if(modali == "IDAFSASSA"){
		
		// DESTINOS
		$('#recebeDestinoDE').val("Feira de Santana");
		$('#recebeDestino').val("Salvador");
		//$('#recebeDestinoVoltaDe').val("Salvador");
		//$('#recebeDestinoVoltaPara').val("Feira de Santana");

		$('#display1').css("display", "none");
		$('#display2').css("display", "none");
		$('#display3').css("display", "none");
		$('#display4').css("display", "none");
		$('#display5').css("display", "none");
		$('#display6').css("display", "none");
		$('#display7').css("display", "none");
		
		$('#displayDEPARA').css("display", "none");
		$('#displayTEXTDEPARA').css("display", "block");
		
		$("#SaidaEVolta").html('<option value="" selected="selected" disabled="disabled">... Selecione ...</option><option value="RESIDENCIA">Residência</option><option value="AGENCIA">Agência</option>'); 
		
	}else if(modali == "IDASSAFSA"){
		
		// DESTINOS
		$('#recebeDestino').val("Feira de Santana");
		$('#recebeDestinoDE').val("Salvador");
		
		$('#display1').css("display", "none");
		$('#display2').css("display", "none");
		$('#display3').css("display", "none");
		$('#display4').css("display", "none");
		$('#display5').css("display", "none");
		$('#display6').css("display", "none");
		$('#display7').css("display", "none");		
		
		$('#displayDEPARA').css("display", "none");
		$('#displayTEXTDEPARA').css("display", "block");
		
		$("#SaidaEVolta").html('<option value="AEROPORTO">Aeroporto</option><option value="RESIDENCIA">Residência</option>');
	
	}else if(modali == "IDAVOLTA"){
		$('#recebeDestino').val("");
		$('#recebeDestinoVoltaDe').val("");
		$('#recebeDestinoVoltaPara').val("");
		$('#display1').css("display", "block");
		$('#display2').css("display", "block");
		$('#display3').css("display", "block");
		$('#display4').css("display", "block");
		$('#display5').css("display", "block");
		$('#display6').css("display", "block");
		$('#display7').css("display", "block");
		$('#displayDEPARA').css("display", "block");
		$('#displayTEXTDEPARA').css("display", "none");
		
		$("#SaidaEVolta").html('<option value="" selected="selected" disabled="disabled">... Selecione ...</option><option value="RESIDENCIA">Residência</option><option value="AGENCIA">Agência</option>');
		
	}
}


function setaValPara(){
	var De = $('#DePara').val();
	
	if(De == "FEIRA"){
		$('#recebeDestino').val("Salvador");
		$('#recebeDestinoVoltaDe').val("Salvador");
		$('#recebeDestinoVoltaPara').val("Feira de Santana");
	}else if(De == "SSA"){
		$('#recebeDestino').val("Feira de Santana");
		$('#recebeDestinoVoltaDe').val("Feira de Santana");
		$('#recebeDestinoVoltaPara').val("Salvador");
	}
}


/* **************************** */
/*       Inserir Traslado       */
/* **************************** */

function InsereTraslado()
{
	var Parametro = "InsereTraslado";
	//var CEPDigitado = $('#CEP').val();
	

	// Dados do traslado
	var modalidadeViagem = $('#modalidade-da-viagem').val();
	
	var CDCLIENTEPASS = $('#CDCLIENTEPASS').val();
	
	// Dados da ida
	var DePara = $('#DePara').val();
	var recebeDestino = $('#recebeDestino').val();
	var HORARIOVOOIDA = $('#HORARIOVOOIDA').val();
	var NUMVOOIDA = $('#NUMVOOIDA').val();
	var COMPANHIAIDA = $('#COMPANHIAIDA').val();
	var TrasladoDataDeIda = $('#TrasladoDataDeIda').val();
	var SaidaEVolta = $('#SaidaEVolta').val();
	var QTDPessoas = $('#QTDPessoas').val();
	var tipo = $('#tipo').val();
	
	
	// Dados da Volta
	var recebeDestinoVoltaDe = $('#recebeDestinoVoltaDe').val();
	var recebeDestinoVoltaPara = $('#recebeDestinoVoltaPara').val();
	var TrasladoDatadeVolta = $('#TrasladoDatadeVolta').val();
	var TrasladoHorarioVolta = $('#TrasladoHorarioVolta').val();
	var numvoodevolta = $('#numvoodevolta').val();
	var COMPANHIAVOLTA = $('#COMPANHIAVOLTA').val();
	
	
	// Informações do Cliente
	var Nome = $('#Nome').val();
	var Email = $('#Email').val();
	var EmailValidade = $('#RecebeValidacao').val();
	var CPF = $('#CPF').val();
	var validadeCPF = $('#validadeCPF').val();
	var IDENT = $('#IDENT').val();
	var CEPC = $('#CEPC').val();
	var endereco = $('#endereco').val();
	var PontoReferencia = $('#PontoReferencia').val();
	var NumeroLogadouro = $('#NumeroLogadouro').val();
	var telefone = $('#telefone').val();
	var Bairro = $('#Bairro').val();
	var EstadoUF = $('#EstadoUF').val();;
	var cidade = $('#cidade').val()
	var celular = $('#celular').val();
	var EnderecoObservacao = $('#EnderecoObservacao').val();
	//var termos = $('#termos').val();
	
	if (termos.checked == false){
				var termosPASS = 1;
				alert('Aceite os termos!');
	}else if(modalidadeViagem == null){
		alert('Escolha a modalidade do TRASLADO');
	}/*else if(HORARIOVOOIDA == ""){
			alert('Preencha o horario de ida!');
			$('#HORARIOVOOIDA').css("border-color", "#FF0000");
			$('#HORARIOVOOIDA').focus();
	}else if(NUMVOOIDA == ""){
			alert('Preencha o número do voo de ida!');
			$('#NUMVOOIDA').css("border-color", "#FF0000");
			$('#NUMVOOIDA').focus();
	}else if(COMPANHIAIDA == ""){
		alert('Preencha o campo companhia!');
			$('#COMPANHIAIDA').css("border-color", "#FF0000");
			$('#COMPANHIAIDA').focus();
	}*/else if(TrasladoDataDeIda == ""){
		alert('Escolha uma data');
		$('#TrasladoDataDeIda').css("border-color", "#FF0000");
		$('#TrasladoDataDeIda').focus();
	}else if(SaidaEVolta == null){
		alert('Escolha um ponto de partida!');
	}else if(QTDPessoas == null){
		alert('Escolha quantidade de pessoas');
	}
	
	
	else if(DePara == null && modalidadeViagem == "IDAVOLTA"){
			  alert('Escolha o ponto de partida e o destino');
			  $('#recebeDestino').css("border-color", "#FF0000");
	}else if(TrasladoDatadeVolta == "" && modalidadeViagem == "IDAVOLTA"){
		alert('Escolha uma data');
		$('#TrasladoDatadeVolta').css("border-color", "#FF0000");
		$('#TrasladoDatadeVolta').focus();
	}/*else if(TrasladoHorarioVolta == "" && modalidadeViagem == "IDAVOLTA"){
		alert('Preencha o horário');
		$('#TrasladoHorarioVolta').css("border-color", "#FF0000");
		$('#TrasladoHorarioVolta').focus();
	}else if(numvoodevolta == "" && modalidadeViagem == "IDAVOLTA"){
		alert('Digite o número do voo de volta');
		$('#numvoodevolta').css("border-color", "#FF0000");
		$('#numvoodevolta').focus();
	}else if(COMPANHIAVOLTA == "" && modalidadeViagem == "IDAVOLTA"){
		alert('Digite o nome da companhia');
		$('#COMPANHIAVOLTA').css("border-color", "#FF0000");
		$('#COMPANHIAVOLTA').focus();
	}*/
		  
		  
	else if(Nome == ""){
		alert('Digite um nome.');
		$('#Nome').css("border-color", "#FF0000");
		$('#Nome').focus();
	}else if(Email == ""){
		alert('Digite um email.');
		$('#Email').css("border-color", "#FF0000");
		$('#Email').focus();
	}else if(EmailValidade != ""){
			alert('Digite um email válido');
	}/*else if(IDENT == ""){
		alert('Digite uma Identidade.');
		$('#IDENT').css("border-color", "#FF0000");
		$('#IDENT').focus();
	}*/else if(validadeCPF == ""){
			alert('Digite um CPF');
			$('#CPF').css("border-color", "#FF0000");
			$('#CPF').focus();		
	}else if(validadeCPF == 2){
			alert('CPF Inválido');	
	}else if(CEPC == ""){
		alert('Digite um CEP.');
		$('#CEPC').css("border-color", "#FF0000");
		$('#CEPC').focus();
	}else if(endereco == ""){
		alert('Digite um endereco.');
		$('#endereco').css("border-color", "#FF0000");
		$('#endereco').focus();
	}else if(PontoReferencia == ""){
		alert('Digite um ponto de referencia.');
		$('#PontoReferencia').css("border-color", "#FF0000");
		$('#PontoReferencia').focus();
	}else if(NumeroLogadouro == ""){
		alert('Digite o numero.');
		$('#NumeroLogadouro').css("border-color", "#FF0000");
		$('#NumeroLogadouro').focus();
	}else if(telefone == ""){
		alert('Digite o telefone.');
		$('#telefone').css("border-color", "#FF0000");
		$('#telefone').focus();
	}else if(Bairro == ""){
		alert('Digite o bairro.');
		$('#Bairro').css("border-color", "#FF0000");
		$('#Bairro').focus();
	}else if(EstadoUF == null){
		alert('Escolha um estado.');
	}else if(cidade == ""){
		alert('Digite a cidade.');
		$('#cidade').css("border-color", "#FF0000");
		$('#cidade').focus();
	}else if(celular == ""){
		alert('Digite um celular.');
		$('#celular').css("border-color", "#FF0000");
		$('#celular').focus();
	}else{
				
	
	$("#LoaderInsereTraslado").html('<div align="center"><img src="img/12.gif" width="12" height="12" /> Cadastrando pedido ...</div>');
	
	$.post('controllers/controller.php',
	  {
		  PARAMETRO_FUNC: Parametro,
		  
		  POST_DePara: DePara,
		  POST_recebeDestino: recebeDestino,
		  POST_modalidadeViagem: modalidadeViagem,
		  
		  POST_HORARIOVOOIDA: HORARIOVOOIDA,
		  POST_NUMVOOIDA: NUMVOOIDA,
		  POST_COMPANHIAIDA: COMPANHIAIDA,
		  POST_tipo: tipo,
		  POST_TrasladoDataDeIda: TrasladoDataDeIda,
		  POST_SaidaEVolta: SaidaEVolta,
		  POST_QTDPessoas: QTDPessoas,
		  		  
		  
		  POST_TrasladoDatadeVolta: TrasladoDatadeVolta,
		  POST_TrasladoHorarioVolta: TrasladoHorarioVolta,
		  POST_numvoodevolta: numvoodevolta,
		  POST_COMPANHIAVOLTA: COMPANHIAVOLTA,
		  
		  POST_CDCLIENTEPASS: CDCLIENTEPASS,
		  POST_Nome: Nome,
		  POST_Email: Email,
		  POST_CPF: CPF,
		  POST_IDENT: IDENT,
		  POST_CEPC: CEPC,
		  POST_endereco: endereco,
		  POST_PontoReferencia: PontoReferencia,
		  POST_NumeroLogadouro: NumeroLogadouro,
		  POST_telefone: telefone,
		  POST_Bairro: Bairro,
		  POST_EstadoUF: EstadoUF,
		  POST_EnderecoObservacao: EnderecoObservacao,
		  POST_cidade: cidade,
		  POST_celular: celular
		  
		  }, function(comet){
		  $("#LoaderInsereTraslado").html(comet);
		  
		});
		
		}// If da validacao
}


/* **************************** */
/*        Validar email         */
/* **************************** */

function ValidaEmail()
{
  //var txt =  $('#Email').val();
  //if ((txt.length != 0) && ((txt.indexOf("@") < 1) || (txt.indexOf('.') < 7)))
  //{
   //  $('#RecebeValidacao').val("Email Incorreto");
  //}else{
	  $('#RecebeValidacao').val("");
 // }
}


/* **************************** */
/*        Validar Horario       */
/* **************************** */

function ValidaHorario(Nomedocampo){
	
    var HORARIO = $(Nomedocampo).val();
	
	//validacao de horario
	var HH = HORARIO.substring(0,2);
	var MM = HORARIO.substring(3,5);
	
	if(HH > 24 || MM > 59){
		alert("Horario Invalido");
		$(Nomedocampo).val("");
		$(Nomedocampo).focus();
	}
}


/* **************************** */
/*            Mascara           */
/* **************************** */

function MascaraDATA(DATA){
        if(mascaraInteiro(DATA)==false){
                event.returnValue = false;
        }       
        return formataCampo(DATA, '00/00/0000', event);
}

function MascaraTELEFONE(TELEFONE){
        if(mascaraInteiro(TELEFONE)==false){
                event.returnValue = false;
        }       
        return formataCampo(TELEFONE, '(00) 0000-0000', event);
}

function MascaraTELEFONECELULAR(CELULAR){
        if(mascaraInteiro(CELULAR)==false){
                event.returnValue = false;
        }       
        return formataCampo(CELULAR, '(00) 00000-0000', event);
}


function MascaraCPF(CPF){
        if(mascaraInteiro(CPF)==false){
                event.returnValue = false;
        }       
        return formataCampo(CPF, '000.000.000-00', event);
}

function MascaraCEP(CEPC){
        if(mascaraInteiro(CEPC)==false){
                event.returnValue = false;
        }       
        return formataCampo(CEPC, '00000-00000', event);
}

function MascaraHORARIO(HORARIO){
        if(mascaraInteiro(HORARIO)==false){
                event.returnValue = false;
        }       
        return formataCampo(HORARIO, '00-000000000', event);
}


function MascaraIDENTIDADE(IDENT){
        if(mascaraInteiro(IDENT)==false){
                event.returnValue = false;
        }       
        return formataCampo(IDENT, '00000000-00', event);
}


function mascaraInteiro(){
        if(event.keyCode < 48 || event.keyCode > 57){
                event.returnValue = false;
                return false;
        }
        return true;
}

//formata de forma generica os campos
function formataCampo(campo, Mascara, evento) { 
        var boleanoMascara; 
        
        var Digitato = evento.keyCode;
        exp = /\-|\.|\/|\(|\)| /g
        campoSoNumeros = campo.value.toString().replace( exp, "" ); 
   
        var posicaoCampo = 0;    
        var NovoValorCampo="";
        var TamanhoMascara = campoSoNumeros.length;; 
        
        if (Digitato != 8) { // backspace 
                for(i=0; i<= TamanhoMascara; i++) { 
                        boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                                                                || (Mascara.charAt(i) == "/")) 
                        boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") 
                                                                || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")) 
                        if (boleanoMascara) { 
                                NovoValorCampo += Mascara.charAt(i); 
                                  TamanhoMascara++;
                        }else { 
                                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo); 
                                posicaoCampo++; 
                          }              
                  }      
                campo.value = NovoValorCampo;
                  return true; 
        }else { 
                return true; 
        }
}


/* **************************** */
/*            Webservice CEP    */
/* **************************** */

function BuscarCEPBrasil(){
	
	var Parametro = "buscaCep";
	var CEPDigitado = $('#CEP').val();
	
	$("#LoaderCEP").html('<div align="center"><img src="img/12.gif" width="12" height="12" /> Buscando CEP ...</div>');
	
	$.post('controllers/controller.php',
	  {
		  PARAMETRO_FUNC: Parametro,
		  POST_CEPDigitado: CEPDigitado
		  
		  }, function(comet){
		  $("#LoaderCEP").html(comet);
		  
		});	
	
	//alert('entrou');
}


/* **************************** */
/*            Webservice CEP    */
/* **************************** */

function ValidaCPF(){
	
	var Parametro = "ValidaCPF";
	var CPFDigitado = $('#CPF').val();
	
	$("#LoaderCPF").html('<div align="center"><img src="img/12.gif" width="12" height="12" /> Validando CPF ...</div>');
	
	$.post('controllers/controller.php',
	  {
		  PARAMETRO_FUNC: Parametro,
		  POST_CPFDigitado: CPFDigitado
		  
		  }, function(comet){
		  $("#LoaderCPF").html(comet);
		  
		});	
	
	//alert('entrou');
}


function validaFormContato(){
	
	var nomeCliente = $('#nomeCliente').val();
	var assunto = $('#assunto').val();
	var Email = $('#Email').val();
	var RecebeValidacao = $('#RecebeValidacao').val();
	var messageCliente = $('#messageCliente').val();
	
	if(nomeCliente == ""){
		alert('Digite o nome completo.');
		$('#nomeCliente').css("border-color", "#FF0000");
		$('#nomeCliente').focus();
	}else if(assunto == ""){
		// voltar ao normal os campos anteriores
		$('#nomeCliente').css("border-color", "#CCCCCC");
		alert('Digite o assunto.');
		$('#assunto').css("border-color", "#FF0000");
		$('#assunto').focus();
	}else if(Email == "" || RecebeValidacao != ""){
		// voltar ao normal os campos anteriores
		$('#nomeCliente').css("border-color", "#CCCCCC");
		$('#assunto').css("border-color", "#CCCCCC");
		
		alert('Digite o email correto.');
		$('#Email').css("border-color", "#FF0000");
		$('#Email').focus();
	}else if(messageCliente == ""){
		// voltar ao normal os campos anteriores
		$('#nomeCliente').css("border-color", "#CCCCCC");
		$('#assunto').css("border-color", "#CCCCCC");
		$('#Email').css("border-color", "#CCCCCC");
		
		alert('Digite uma mensagem.');
		$('#messageCliente').css("border-color", "#FF0000");
		$('#messageCliente').focus();
	}else{
		// Envia o Formulario
		$('#from').submit();
	}
}