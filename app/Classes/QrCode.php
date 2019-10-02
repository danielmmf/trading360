<?php

namespace App\Classes;

include 'QrCode/qrlib.php';



class QrCode
{
    private $type = array('request','receiver');
    private $origin_country;
 
    public function gerar($codigo , $pagamento){
        $matrixPointSize = 4;
        \QRcode::png($codigo, 'notas/pagamento_'.$pagamento.'.png', 'L', $matrixPointSize, 2);  
    }

}
