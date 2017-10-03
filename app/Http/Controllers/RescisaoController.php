<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Rescisao;
use App\Models\Funcionario;

class RescisaoController extends Controller {

    public function calcularRescisao($id) {
        $func = Funcionario::find($id);
        return view('rescisao', ['func' => $func ]);
    }
    public function ExibirRescisaoGerenciar() {
        return view('rescisao-gerenciar');
    }
    public function RegistrarRescisao() {
        
    }
    public function Calcularmes($valor) {
        $ano = date('Y');
        $data = new \DateTime("$ano-01-01");
        $datasaida = new \DateTime($valor);
        
        $dif = $data->diff($datasaida);
        
        return $dif->format('%m');
    }
    public function DecimoTeceiro($valor, $salario) {
        $rescisao = ($valor/12)*$salario;
        return $rescisao;        
    }
    public function Ferias() {
        
    }
    public function Multa() {
        
    }
    public function visualizaRescisao() {
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
