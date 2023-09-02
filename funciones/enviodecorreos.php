<?php
//session_start();
//error_reporting(E_ALL);
//ini_set("display_errors",0);
require_once("Swift-5.0.3/lib/swift_required.php");

function enviar_mail($arrayCorreos, $motivo, $cuerpomsj)	{
	try 
	{
		
		if (filter_var($destino, FILTER_VALIDATE_EMAIL))
		{
			$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com',
			                                              465,
			                                              'ssl')
			             ->setUsername('abnerevpelico@gmail.com')
			             ->setPassword('D5C99P7Fzakj');
			$mailer = Swift_Mailer::newInstance($transport);
			$message = Swift_Message::newInstance($motivo)
			            ->setFrom(array('abnerevpelico@gmail.com' => 'Sistema Pasalo'))//quien envia
			            ->setTo($arrayCorreos)//a quien envio
			            ->setBody($cuerpomsj);
			$type = $message->getHeaders()->get('Content-Type');
			$type->setValue('text/html');
			$type->setParameter('charset', 'utf-8');
			$result = $mailer->send($message);
		}

	} catch (Exception $e) { }
}


?>