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
    public function Ferias() {
        
    }
    public function Multa() {
        
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
      // CHAMA O SALARIO DO FUNCIONARIO -->
      // CALCULA A DIFERENCIA ENTRE A DATA DO INICIO DO ANO ATE DATA DE SAIDA -->
      // QUANDO CHAMA FUNÇÃO DA MSM CONTROLLER CHAMA COM THIS
        $datadif = $this->Calcularmes($data_saida);
      // CALCULA A DIFERENCIA ENTRE A DATA DO INICIO DO ANO ATE DATA DE SAIDA -->
        $decimo_ter = $this->DecimoTeceiro($datadif,$salario);
                
        return view('calculo', ['decimo' => $decimo_ter]);
    }
}
