<?php include("cms/module/conexion.php"); ?>
<?php
/*--- Enviar datos al email ----*/
$consultarCot = 'SELECT * FROM contacto';
$resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
$filaCot = mysqli_fetch_array($resultadoCot);
	$xDesemail = $filaCot['inscripcion_mail'];

$toEmail = $xDesemail;
$subject = "Inscripcion desde E.I.Advantage";
$mailHeaders = 'From: '.$_POST["email"]."\r\n".
'Reply-To: '.$_POST["email"]."\r\n" .
'X-Mailer: PHP/' . phpversion();

/* ---- o ---- */

$xDireccion		= $_POST["direccion"];
$xTelefono 		= $_POST["telefono"];
$xEmail 		= $_POST["email"];
$xFecha 		= $_POST["fecha_ingreso"];

$mensaje = "Información del Suscriptor\n";
$mensaje .= "------------------------\n";
$mensaje .= "Dirección: ".$_POST["direccion"]."\n";
$mensaje .= "Telefono: ".$_POST["telefono"]."\n";
$mensaje .= "Email: ".$_POST["email"]."\n";

/* ---- o ---- */

$contacto = "INSERT INTO inscripcion(direccion, telefono, email, fecha_ingreso)VALUES('$xDireccion', '$xTelefono', '$xEmail', '$xFecha')";
$result = mysqli_query($enlaces, $contacto) or die('Consulta fallida: ' . mysqli_error($enlaces));

if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='alert alert-success' role='alert'>Inscripci&oacute;n Enviada Exitosamente.</div>";
} else {
	print "<div class='alert alert-danger' role='alert'>Problema al enviar el correo, intentelo m&aacute;s tarde.</div>";
}

?>