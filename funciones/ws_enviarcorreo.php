<?php
require 'vendor/autoload.php'; // Carga el autoloader de Composer
//require_once("Swift-5.0.3/lib/swift_required.php");
// Configuración del transporte SMTP
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465,"SSL"))
    ->setUsername('abnerevpelico@gmail.com')
    ->setPassword('nlqtypflwsotzzcf');

// Crea el objeto SwiftMailer
$mailer = new Swift_Mailer($transport);

// Crea el mensaje
$message = (new Swift_Message('Amor me funciono el envio de correos'))
    ->setFrom(['abnerevpelico@gmail.com' => 'Abner Vicente'])
    ->setTo(['equichj@miumg.edu.gt' => 'CONVENCION UMG '])
    ->setBody('YA me funciono cariño, la amooo tanto mi cosita bella');

// Envía el correo
$result = $mailer->send($message);

if ($result) {
    echo "El correo se envió correctamente.";
} else {
    echo "Hubo un problema al enviar el correo.";
}
?>
