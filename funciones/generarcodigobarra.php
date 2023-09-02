<?php
session_start();
error_reporting(E_ALL);
require 'vendor/autoload.php'; // Ajusta la ruta según tu configuración
require_once("conexion.php");

use Picqer\Barcode\BarcodeGeneratorPNG;

// Crear un objeto generador de código de barras
$generator = new BarcodeGeneratorPNG();

function generarCodigoAleatorio($longitud) {
  $codigo = '';
  for ($i = 0; $i < $longitud; $i++) {
      $codigo .= random_int(0, 9); // Genera un dígito aleatorio seguro entre 0 y 9
  }
  return $codigo;
}

$conexion = new Conexion();
$conexion->transaccion();
  
$error = 0;


$contador = 1;
$seguirRepitiendo = true;
$arrayCodigos = array();
$arrayConsultar = array ();
while ($contador <= 50 && $seguirRepitiendo) {
    // Realiza alguna acción dentro del ciclo


    // generar codigo 
    $codigoAleatorio = generarCodigoAleatorio(12);
    $sql = "SELECT codigo FROM codigosBarra WHERE codigo = $codigoAleatorio";
    $consultar = $conexion->consultar($sql);
    array_push($arrayConsultar, $consultar);
    if(count($consultar["data"]) == 0){
      // GUARDAMOS EL CODIGO
      $codigoSeparado = implode('-', str_split($codigoAleatorio, 3)); // Dividir en segmentos de 3 caracteres
      $anulado = 0; // 0 no, 1= si
      $idUsuario = 1;
      $verificado = 0;
      $sql="INSERT INTO codigosbarra( idUsuarioCreo, fechaCreacion, codigo, representacion,verificado, anulado) 
              VALUES (?,NOW(),?,?,?,?)";
      $arrayData = array($idUsuario, $codigoAleatorio, $codigoSeparado, $verificado, $anulado);
      $insertar = $conexion->insertar($sql, $arrayData);

      if($insertar["resultado"] == false){
        $error++;
        $mensaje="Codigo no guardardo";
      }else{
        // Generar el código de barras en formato PNG
        $barcodeImage = $generator->getBarcode($codigoAleatorio, BarcodeGeneratorPNG::TYPE_EAN_13);
        
        // Ruta donde deseas guardar la imagen generada
        $filePath = "codigosBarra/barra_$codigoAleatorio.png"; // Ajusta la ruta y el nombre del archivo
        
        // Guardar la imagen en el sistema de archivos
        file_put_contents($filePath, $barcodeImage);
        array_push($arrayCodigos, array("codigo"=>$codigoAleatorio, "representacion" => $codigoSeparado));
      }
      //

      
     

    }else{
      $error++;
    }


    $contador++;
    // Modifica la variable booleana para detener o continuar el ciclo
    // En este ejemplo, se detendrá el ciclo después de 10 iteraciones
    if ($contador > 50) {
        $seguirRepitiendo = false;
    }
    
    
}




 

if(!$error){
  $mensaje = "Codigos generado correctamente";
  $transaccion = "COMMIT";
}else{
  $mensaje = "Lo sentimos los codigos no fueron generados";
  $transaccion="ROLLBACK";
}

echo $mensaje."<br>";
echo "arrayCodigos:  ".count($arrayCodigos)."<br>";
echo json_encode( $arrayCodigos );
echo "<br>";
echo "Consultas :".count($arrayConsultar)."<br>";
echo json_encode( $arrayConsultar );
$conexion->respuestaTrans($transaccion);	
//echo "Imagen de código de barras generada en: $filePath";
?>
