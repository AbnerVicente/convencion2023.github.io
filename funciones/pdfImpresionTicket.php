<?php

 $contenido ="
<!DOCTYPE html>
<html>
<head>
    <style>
        .barcode-container {
            position: relative  !important;
            display: inline-block  !important;
            transform: rotate(-90deg)  !important;
            width:100px  !important;
            height: 50px  !important;
            
            top:150px  !important;
        }

        .barcode-image {
            display: inline-block  !important;
        }

        .barcode-text {
            position: absolute  !important;
            bottom: 0  !important;
            left: 50px  !important;
            width: 100%  !important;
            text-align: center  !important;
            font-size: 12px  !important;
            font-family: Arial, sans-serif  !important;
        }
        .tickets{
          margin-top:25px  !important;
          width:50%  !important;
          display:block;
          border:2px solid;
          height:290px;
        }
      body{
        width:auto  !important;
      }
    </style>
</head>
<body>
    <div class='tickets'>
      <div  style='width:85%; float: left; ' >
        <img src='codigosBarra/cuerpoTicketTotal.png' alt='Código de Barras' style='width:80%;'  >
      </div>
      <div class='barcode-container' style='width:15%; float:left;'>
        <img src='codigosBarra/barra_234567890678.png' alt='Código de Barras' class='barcode-image barcode-container'>
        <div class='barcode-text barcode-container'>234567890678</div>
      </div>

    </div>
</body>
</html>
";
			


require 'vendor/autoload.php'; // Ajusta la ruta según tu configuración

 
 

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($contenido);
$mpdf->Output();
 