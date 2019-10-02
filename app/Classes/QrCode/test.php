<?php    

    include "qrlib.php";    
    $matrixPointSize = 4;

        QRcode::png('600', '600.png', 'H', $matrixPointSize, 2);    
   

   ?>

   <img src="600.png">