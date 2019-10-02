<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function home()
    {
        return view('admin/home', ['app_name' => 'app de teste']);
    }

    public function processos()
    {
        return view('admin/processos', ['app_name' => 'app de teste']);
    }

    public function matriculas()
    {
        return view('admin/matriculas', ['app_name' => 'app de teste']);
    }

    public function list_processos()
    {
        /*echo '{
  "aaData": [
    ';
        $processos = \App\Processo::all();

        foreach ($processos as $processo) {
            echo '["'.$processo->id.'",';
            echo '"'.$processo->numero_processo.'",';
            echo '"'.$processo->reu.'",';
            echo '"'.$processo->vara.'",';
            echo '"'.$processo->comarca.'",';
            echo '"'.$processo->estado.'",';
            echo '"'.$processo->data_distribuicao.'"],';
        }
        echo '  ]
}';*/
 $processos = \App\User::all();
$linhas  = array();
echo '{
  "aaData": [';
     foreach ($processos as $processo) {
        $string_linha = sprintf('[
      "<a href=/admin/processo/%s>%s</a>",
      "%s",
      "%s",
       "%s",
      "%s",
      "%s",
      "%s"
    ]' ,$processo->id, $processo->numero_processo, $processo->reu, $processo->data_distribuicao, $processo->vara, $processo->comarca,$processo->estado, $processo->valor_causa);
   $linhas[]= $string_linha;
    }
    echo implode(",", $linhas);
  echo ']
}';
    }


        public function list_matriculas()
    {
        /*echo '{
  "aaData": [
    ';
        $processos = \App\Processo::all();

        foreach ($processos as $processo) {
            echo '["'.$processo->id.'",';
            echo '"'.$processo->numero_processo.'",';
            echo '"'.$processo->reu.'",';
            echo '"'.$processo->vara.'",';
            echo '"'.$processo->comarca.'",';
            echo '"'.$processo->estado.'",';
            echo '"'.$processo->data_distribuicao.'"],';
        }
        echo '  ]
}';*/
 $processos = \App\User::all();
$linhas  = array();
echo '{
  "aaData": [';
     foreach ($processos as $processo) {
        $string_linha = sprintf('[
      "<a href=/admin/matricula/%s>%s</a>",
      "%s",
      "%s",
      "%s",
      "%s",
       "%s"
    ]' ,$processo->id, $processo->name, $processo->email, $processo->data_nascimento,$processo->rg, $processo->cpf, $processo->escolaridade);
   $linhas[]= $string_linha;
    }
    echo implode(",", $linhas);
  echo ']
}';
    }

    public function processo($id)
    {
        $processo = \App\Processo::find($id);
        $pedidos = \App\Pedido::where('processo_id', $id)->get();
        return view('admin/processo', ['app_name' => 'app de teste', 'processo_id' => $id , 'processo_json'=>json_encode($processo) , 'processo'=>$processo, 'pedidos'=>$pedidos]);
    }

     public function matricula($id)
    {
        $processo = \App\User::find($id);
       // $pedidos = \App\Pedido::where('processo_id', $id)->get();
        return view('admin/matricula', ['app_name' => 'app de teste', 'processo_id' => $id , 'processo_json'=>json_encode($processo) , 'processo'=>$processo]);
    }

    public function novo_processo()
    {
        return view('admin/novo_processo', ['app_name' => 'app de teste']);
    }
}
