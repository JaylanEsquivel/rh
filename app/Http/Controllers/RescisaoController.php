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
        $rescisao = Rescisao::all();
        return view('rescisao-gerenciar', ['resc' => $rescisao ]);
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
        
        return redirect('/index');
    }
    public function Calcularmes($valor) {  // faz o calculo da diferença de meses entre uma data e outra
        
        $ano = date('Y');
        $data = new \DateTime("$ano-01-01");
        $datasaida = new \DateTime($valor);
        
        $dif = $data->diff($datasaida);
        
        return $dif->format('%m');
           
    }
    public function Calcularmestwo($dataentrada,$datasaida) { // faz o calculo da diferen�a da data que saiu
        
        $e = new \DateTime($dataentrada);
        $s = new \DateTime($datasaida);
        
        $diferenca = $e->diff($s);
        
        return ($diferenca->y*12) + $diferenca->m;
        
    }
    public function DecimoTeceiro($valor, $salario) { // calcula o valor de decimo terceiro a ser recebido
        $rescisao = ($valor/12)*$salario;
        return $rescisao;
    }
    public function Ferias($dif,$salario) {
        if($dif > 12){
            $ferias = $salario + ($salario / 3);
            $diferenca = $dif - 12;
            $ferias = ($diferenca / 12) * $ferias;
            return $ferias;
        }else{
            $ferias = $salario + ($salario / 3);
            return $ferias;
        }
    }
    public function Multa($datadif_inteiro,$salario) {
        $calc_one = ( $salario * (8 / 100)*$datadif_inteiro)*(40/100);
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
        $datadif_inteiro = $this->Calcularmestwo($data_saida,$entrada);
      // CALCULA A DIFERENCIA ENTRE A DATA DO INICIO DO ANO ATE DATA DE SAIDA -->
        $decimo_ter = $this->DecimoTeceiro($datadif,$salario);
        $multa = $this->Multa($datadif_inteiro,$salario);
        $ferias = $this->Ferias($datadif_inteiro,$salario);
        $valorgeral = $this->Geralsoma($multa,$ferias,$decimo_ter);
                
        return view('calculo', ['id' => $idfunc, 'decimo' => $decimo_ter, 'nome' => $nome, 'cpf' =>$cpf, 'sal' => $salario, 'dtentrada' => $entrada, 'dtsaida' => $data_saida, 'multa' => $multa, 'ferias' => $ferias, 'valorgeral' => $valorgeral ]);
    }
}
