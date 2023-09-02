<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors",0);
require_once("conexion.php");
$conexion = new Conexion();
$conexion->transaccion();
 
try
{		
	
	 
	//$username = stripslashes(mysqli_real_escape_string($_REQUEST['usuario']));
	//$password= sha1($username.strip_tags(stripslashes($_REQUEST['password'])));

  $username = stripslashes(mysqli_real_escape_string($_REQUEST['usuario']));
	$password= sha1(strtolower($username).strip_tags(stripslashes($_REQUEST['password'])));
	//$respuesta["password"] = $password;
	$query="SELECT u.id, u.idtipousuario, u.usuario, u.clave, u.activado, u.aleatorio, u.nombre, tp.descripcion as tipousuario
			FROM usuarios u
			INNER JOIN tipousuarios tp ON tp.id = u.idtipousuario
			WHERE u.usuario = '{$_REQUEST['usuario']}' AND (u.clave = '{$password}'   AND u.activado = 1) ";//OR  
	$resConsulta =  $conexion->consultar($query);
 
	$respuesta["data"] = $resConsulta["data"];
	$_SESSION = array();

	if ( count($resConsulta["data"]) > 0 ) {
		
		$_SESSION['idUSuario'] = $resConsulta["data"][0]['id'];
		$_SESSION['usuario'] = $resConsulta["data"][0]['usuario'];
		$_SESSION['nombre'] = $resConsulta["data"][0]['nombre'];
		$_SESSION['idTipoUsuario'] = $resConsulta["data"][0]['idtipousuario'];
		$_SESSION['tipoUsuario'] = $resConsulta["data"][0]['tipousuario'];


    $fechaActual=date("Y-m-d H:i:s");
		$sql=" UPDATE  usuarios SET  fechaultimoacceso = NOW() WHERE  id = ?";  
		$arrData= array($resConsulta["data"][0]['id']);
		$resConsulta =  $conexion->actualizar($sql, $arrData);
		 


    $codigo = $_POST["codigo1"].$_POST["codigo2"].$_POST["codigo3"].$_POST["codigo4"];
		$respuesta["codigo"] = $codigo;
		// verificar codigo 
    $sql="SELECT id, representacion , verificado FROM codigosbarra WHERE codigo = '$codigo' ";
    $consulta = $conexion->consultar($sql);
		$respuesta["codigos"] = $consulta;
    if($consulta["rowCount"] > 0){
     
      if($consulta["data"][0]["verificado"] == 0){
        $sql="INSERT INTO participantes_codigos( fechaCreacion, idCodigo, idUsuario, codigoIngresado) VALUES (NOW(),?,?,?)";
        $arrData = array($consulta["data"][0]["id"], $_SESSION['idUSuario'], $codigo);
        $insertar = $conexion->insertar($sql, $arrData);
        if($insertar["resultado"] == true){
					$sql="UPDATE codigosbarra SET  verificado  =? WHERE id =?";
					$arrData = array(1, $consulta["data"][0]["id"]);
					$actualizar = $conexion->actualizar($sql, $arrData);
					$respuesta["actualizar"] = $actualizar;
					if($actualizar["resultado"] == true){
						$respuesta['mensaje']="Registro Completado ";
						$respuesta['resultado']=true;

					}else{
						$respuesta["resultado"] = false;
						$respuesta["mensaje"] = "Error al  verificar el codigo, vuelva intentar mas tarde";
					}
  
        }else{
          $respuesta['mensaje']="Error al completar el registro, vuelva intentar mas tarde";
          $respuesta['resultado']=false;
          $respuesta["erroe"] = $insertar;
        }
      }else{
        $respuesta['mensaje']="Código ya verificado, los sentimos";
        $respuesta['resultado']=false;
      }
      
    }else{
      $respuesta['mensaje']="Código incorrecto";
      $respuesta['resultado']=false;
    }





	
		
		
	}else{
		$respuesta['mensaje']="¡Verifique las credenciales!";
		$respuesta['resultado']=false;
	}
	if($respuesta["resultado"] == false){
		$transaccion = "ROLLBACK";
	}else{
		$transaccion = "COMMIT";
	}

}
catch (Exception $e)
{
	$respuesta['registros']=array();
	$respuesta['resultado']=false;
}

echo json_encode( $respuesta );
$conexion->respuestaTrans($transaccion);
	$conexion->close();	

?>