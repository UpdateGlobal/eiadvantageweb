<?php
$toEmail = "raulupdate@gmail.com";
$subject = "Inscripcion desde E.I.Advantage";
$mailHeaders = 'From: '.$_POST["email"]."\r\n".
'Reply-To: '.$_POST["email"]."\r\n" .
'X-Mailer: PHP/' . phpversion();

$mensaje = "Informacion del Suscrito\n";
$mensaje .= "------------------------\n";
$mensaje .= "Dirección		:".$_POST["direccion"]."\n";
$mensaje .= "Telefono		:".$_POST["telefono"]."\n";
$mensaje .= "Email			:".$_POST["email"]."\n";

if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='alert alert-success' role='alert'>Inscripci&oacute;n Enviada Exitosamente.</div>";
} else {
	print "<div class='card-panel red lighten-1'>Problema al enviar el correo, intentelo m&aacute;s tarde.</div>";
}

?>