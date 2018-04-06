<?php
$toEmail = "raulupdate@gmail.com";
$subject = "Nuevo Partner desde E.I.Advantage";
$mailHeaders = 'From: '.$_POST["email"]."\r\n".
'Reply-To: '.$_POST["email"]."\r\n" .
'X-Mailer: PHP/' . phpversion();

$mensaje = "Informacion del Suscrito\n";
$mensaje .= "------------------------\n";
$mensaje .= "Nombres		:".$_POST["nombres"]."\n";
$mensaje .= "Apellidos		:".$_POST["apellidos"]."\n";
$mensaje .= "Cargo			:".$_POST["cargo"]."\n";
$mensaje .= "Organizacion	:".$_POST["organizacion"]."\n";
$mensaje .= "Dirección		:".$_POST["direccion"]."\n";
$mensaje .= "Ciudad			:".$_POST["ciudad"]."\n";
$mensaje .= "Estado			:".$_POST["estado"]."\n";
$mensaje .= "Postal			:".$_POST["postal"]."\n";
$mensaje .= "País			:".$_POST["pais"]."\n";
$mensaje .= "Telefono		:".$_POST["telefono"]."\n";
$mensaje .= "Email			:".$_POST["email"]."\n";
$mensaje .= "Comentarios	:".$_POST["comentarios"]."\n";

if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='alert alert-success' role='alert'>Inscripci&oacute;n Enviada Exitosamente.</div>";
} else {
	print "<div class='card-panel red lighten-1'>Problema al enviar el correo, intentelo m&aacute;s tarde.</div>";
}

?>