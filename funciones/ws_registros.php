<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors",0);
require 'vendor/autoload.php'; // Carga el autoloader de Composer
require_once("conexion.php");
$accion =$_POST['accion'];

switch ($accion) {
	case 'nuevoRegistro':		nuevoRegistro(); 		break;
 
 
}


function nuevoRegistro()
{
	try
	{	
		$conexion = new Conexion();
   // $respuesta["conexion"] = $conexion;
		$conexion->transaccion();
		$error=0;
		$mensaje="";
		$mensajeError="";
		$transaccion="";
    $codigo = "";
    if($_POST["tipoParticipante"] == 1){
      $codigo = $_POST["carrera"]."-".$_POST["anio"]."-".$_POST["carnet"];
    }
    else if($_POST["tipoParticipante"] == 2){
      $codigo = $_POST["codigoCatedratico"];
    }
		$respuesta["codigo"]  = $codigo;
		$buscarPersona = $conexion->consultar("SELECT * FROM participantes WHERE codigo = '{$codigo}'  AND anulado = 0   ");
		//$respuesta["buscarPersona"] = $buscarPersona;
		if (count($buscarPersona["data"]) == 0) {
		 			
      $idUsuario = 1;
			$anulado = 0;
			$sql=" INSERT INTO participantes( idUsuario, fechaCreacion,  tipoParticipante, codigo, nombres, apellidos, email, enviarCredenciales, anulado) 
            VALUES (?,NOW(),?,?,?,?,?,?,?)";
			$enviarCredenciales = 0; // no enviado, 1 = enviado
		  $arrData=array( $idUsuario, $_POST["tipoParticipante"], $codigo, $_POST["nombres"], $_POST["apellidos"], $_POST["email"], $enviarCredenciales, $anulado    );	
			$insertar = $conexion->insertar($sql, $arrData);
			if($insertar["resultado"] == true){
				$idParticipante = $insertar["ultimoId"];
				$nombreParticipante = $_POST["nombres"]." ".$_POST["apellidos"];

				// CREAR USUARIO 

				$randomString = substr(uniqid('', true), 0, 10);
				$clave=encriptar_pwd($codigo, $randomString);
				$sql = "SELECT  usuario FROM usuarios WHERE usuario = '$codigo'  AND activado = 0";
				$buscarUsuario = $conexion->consultar($sql);
				$respuesta["sql"] = $sql;
				$respuesta["buscarUsuario"] = $buscarUsuario;
				$credenciales = array();
				if ($buscarUsuario["rowCount"] == 0 )  {		    
						$sql= "INSERT INTO usuarios(idtipousuario, usuario, clave, activado, aleatorio, nombre,avatar, telefono, direccion,idParticipante) 
						VALUES (?,?,?,?,?,?,?,?,?,?)";
						$tipoUsuario = 2; // participante
						$telefono = " ";
						$direccion =  " ";
						$idApertura = NULL;
						$activado = 1;
						$aleatorio = $randomString;
						$avatar = " ";
						$arrayData = array($tipoUsuario,  $codigo, $clave, $activado, $aleatorio, $nombreParticipante, $avatar,$telefono, $direccion, $idParticipante);
						$result = $conexion->insertar($sql,$arrayData);
						//$resultado["insertat"] = $result;
						if($result["resultado"] == true){
							$mensaje = "Credenciales creado Correctamente";
							$credenciales[0]["usuario"] = $codigo;
							$credenciales[0]["clave"] = $clave;
						}else{
							$error++;
							$mensaje = "Error al crear el registro";
						}      
				}else{
					 
					$error++;
					$mensaje ="Usuario Existente, Pruebe otros Datos";
				}
		
				

			

				// END CREAR USUARIO

				// ENVIAR CORREO 
				if(!$error){

						// Configuración del transporte SMTP
							$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465,"SSL"))
							->setUsername('abnerevpelico@gmail.com')
							->setPassword('nlqtypflwsotzzcf');

					// Crea el objeto SwiftMailer
					$mailer = new Swift_Mailer($transport);
					$contenido =  "<html>" .
					" <head></head>" .
					" <body>" .
					"  <p> Bienvenido $nombreParticipante". " a la convención UMG 2023<br></p>" .
					"  <p>  <strong>Código: </strong> $codigo". "</p>  " .
					"  <p>  <strong>Clave: </strong> $randomString". " </p> <br>" .
					" </body>" .
					"</html>";
				 


					$textoEnviar = "Bienvenido $nombreParticipante". " a la convención UMG 2023<br>";
					$textoEnviar .= "<b>Clave : </b> $credenciales[clave]". "  >";
					// Crea el mensaje
					$message = (new Swift_Message('Registro exitoso a convención UMG 2023')) // TITULO
							->setFrom(['abnerevpelico@gmail.com' => 'Abner Vicente']) // 
							->setTo([ $_POST["email"] => 'CONVENCION UMG ']) // correo a enviar
							->setBody($contenido, 'text/html'); //  texto a enviar

					// Envía el correo
					$result = $mailer->send($message);

					if ($result) {
							//echo "El correo se envió correctamente.";
							 $sql="UPDATE participantes SET enviarCredenciales = ? WHERE id =?";
							 $arrayData = array(1, $idParticipante);
							 $actualizar = $conexion->actualizar($sql, $arrayData);
							$mensaje = "El correo se envió correctamente";
					} else {
							//echo "Hubo un problema al enviar el correo.";
							$error++;
							$mensaje = "Hubo un problema al enviar el correo.";
					}



					//$resultado  = enviarCorreo($_POST["email"], $nombreParticipante);
					//$respuesta["correo"] = $resultado;
					if(!$error){
						$mensaje = "Registro Exitoso, ".$mensaje;
						
					}else{
						$mensaje = "Registro Exitoso, ".$mensaje;
					}
					
					//$mensaje = "Registro Exitoso, ".$resultado["mensaje"];
				}

				// END ENVIAR CORREO
			 

				//if(!$error){
			//		$mensaje = "Registro Exitoso";
				//}
 



			}else{
        $error++;
         $mensaje="Error al guardar los datos delo registro";
         $mensajeError=$insertar["mensaje"];
      }
 
			if(!$error){
				$respuesta["mensaje"] = $mensaje;
				$respuesta["resultado"]=true;
				$transaccion="COMMIT";
			}else{
				$respuesta["mensaje"] = $mensaje;
				$respuesta["mensajeError"] = $mensajeError;
				$respuesta["resultado"]=false;
				$transaccion="ROLLBACK";
			}			
			//$respuesta["resultado"]=false;
			//$transaccion="ROLLBACK";
			//$respuesta["transaccion"] = $transaccion;
					 

		}else{
			$respuesta['resultado']=false;
			$respuesta['mensaje']="ya existe un Registro con los mismos datos";
      $transaccion = "ROLLBACK";
		} 
	}
	catch (Exception $e)
	{
		$respuesta['resultado']=false;
		$respuesta['mensaje']=$e;
	}

	echo json_encode( $respuesta );
	$conexion->respuestaTrans($transaccion);	
}

function enviarCorreo($email, $nombreParticipante){
	$resultado = array();
	$conexion = new Conexion();
 
	 
	

	 

	return $resultado;
	



}

function crearUsuario($conexion, $codigo, $nombreParticipante){
	 
	$resultado = array();
	//$conexion = new Conexion();
	 
	
		if($error >= 1){
			$resultado['resultado']=false;
			$resultado['mensaje']=$mensaje;
		}else{
			$resultado['resultado']=true;
			$resultado['mensaje']=$mensaje;
		}

	

	return $resultado;
}

function encriptar_pwd($u,$pw) {
	$username = stripslashes(mysqli_real_escape_string($u));
	$password= sha1(strtolower($username).strip_tags(stripslashes($pw)));

  	return $password;
}



?>