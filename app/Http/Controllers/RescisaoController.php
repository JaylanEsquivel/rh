<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Rescisao;
use App\Models\Funcionario;

class RescisaoController extends Controller {

    public function calcularRescisao($id) { // exibi a view com o funcionario que vc ira calcular a rescisao
        $func = Funcionario::find($id);
        return view('rescisao', ['func' => $func ]);
    }
    public function ExibirRescisaoGerenciar() {  //  exibi apenas as rescisoes salvas no bd 
        return view('rescisao-gerenciar');
    }
    public function RegistrarRescisao() { // grava as informaçoes da rescisao no bd
        $input = \Request::all();
        $ferias = $input["ferias"];
        $decimo = $input['dec'];
        $multa = $input['multa'];
        $dtsaida = $input['dt'];
        $idfunc = $input['id'];
        
        $novo = new Rescisao;
        $novo->ferias = $ferias;
        $novo->decimo = $decimo;
        $novo->multa = $multa;
        $novo->datadesaida = $dtsaida;
        $novo->funcionario_id = $idfunc;
        
        $novo->save();
        
        redirect('/index');
    }
    public function Calcularmes($valor) {  // faz o calculo da diferença de meses entre uma data e outra
        $ano = date('Y');
        $data = new \DateTime("$ano-01-01");
        $datasaida = new \DateTime($valor);
        
        $dif = $data->diff($datasaida);
        
        return $dif->format('%m');
    }
    public function DecimoTeceiro($valor, $salario) { // calcula o valor de decimo terceiro a ser recebido
        $rescisao = ($valor/12)*$salario;
        return $rescisao;        
    }
    public function Ferias($dif,$salario) {
        if($dif >= 12){
            $ferias = $salario + ($salario * 3);
            $diferença = $dif - 12;
            $ferias += ($diferença / 12) * $salario;
            return $ferias;
        }else{
            $ferias = $salario + ($salario * 3);
            return $ferias;
        }
    }
    public function Multa($dif,$salario) {
        $calc_one = (( $dif*0.08 )* $salario) * 0.4;
        return $calc_one;
    }
    public function Geralsoma($A,$B,$C) {
        $geral = $A + $B + $C;
        return $geral;
    }
    public function visualizaRescisao() { //função principal que traz tods os calculos e chama a view de exibição
      //RECEBE INPUTS DA TELA VISUAL -->  
        $input = \Request::all();     
        $idfunc = $input['id']; 
        $data_saida = $input['data'];
      //RECEBE INPUTS DA TELA VISUAL -->  
      // CHAMA O SALARIO DO FUNCIONARIO -->
        $func = Funcionario::find($idfunc);
        $salario = $func->salario;
        $nome = $func->nome;
        $cpf = $func->cpf;
        $entrada = $func->datadeentrada;
        
      // CHAMA O SALARIO DO FUNCIONARIO -->
      // CALCULA A DIFERENCIA ENTRE A DATA DO INICIO DO ANO ATE DATA DE SAIDA -->
      // QUANDO CHAMA FUNÇÃO DA MSM CONTROLLER CHAMA COM THIS
        $datadif = $this->Calcularmes($data_saida);
      // CALCULA A DIFERENCIA ENTRE A DATA DO INICIO DO ANO ATE DATA DE SAIDA -->
        $decimo_ter = $this->DecimoTeceiro($datadif,$salario);
        $multa = $this->Multa($datadif,$salario);
        $ferias = $this->Ferias($datadif,$salario);
        $valorgeral = $this->Geralsoma($multa,$ferias,$decimo_ter);
                
        return view('calculo', ['id' => $idfunc, 'decimo' => $decimo_ter, 'nome' => $nome, 'cpf' =>$cpf, 'sal' => $salario, 'dtentrada' => $entrada, 'dtsaida' => $data_saida, 'multa' => $multa, 'ferias' => $ferias, 'valorgeral' => $valorgeral ]);
    }
}
