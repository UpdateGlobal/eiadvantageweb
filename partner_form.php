<?php include("cms/module/conexion.php"); ?>
<?php
/*--- Enviar datos al email ----*/
$consultarCot = 'SELECT * FROM contacto';
$resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
$filaCot = mysqli_fetch_array($resultadoCot);
	$xDesemail = $filaCot['partner_mail'];

$toEmail = $xDesemail;
$subject = "Nuevo Partner desde E.I.Advantage";
$mailHeaders = 'From: '.$_POST["email"]."\r\n".
'Reply-To: '.$_POST["email"]."\r\n" .
'X-Mailer: PHP/' . phpversion();

/* ---- o ---- */

$xNombres		= $_POST["nombres"];
$xApellidos		= $_POST["apellidos"];
$xCargo 		= $_POST["cargo"];
$xOrganizacion	= $_POST["organizacion"];
$xDireccion		= $_POST["direccion"];
$xCiudad		= $_POST["ciudad"];
$xEstado		= $_POST["estado"];
$xPostal		= $_POST["postal"];
$xPais 			= $_POST["pais"];
$xTelefono 		= $_POST["telefono"];
$xEmail 		= $_POST["email"];
$xMensaje 		= $_POST["comentarios"];
$xFecha 		= $_POST["fecha_ingreso"];

$mensaje = "Informacion del Partner\n";
$mensaje .= "------------------------\n";
$mensaje .= "Nombres: ".$_POST["nombres"]."\n";
$mensaje .= "Apellidos: ".$_POST["apellidos"]."\n";
$mensaje .= "Cargo: ".$_POST["cargo"]."\n";
$mensaje .= "Organizacion: ".$_POST["organizacion"]."\n";
$mensaje .= "Dirección: ".$_POST["direccion"]."\n";
$mensaje .= "Ciudad: ".$_POST["ciudad"]."\n";
$mensaje .= "Estado: ".$_POST["estado"]."\n";
$mensaje .= "Postal: ".$_POST["postal"]."\n";
$mensaje .= "País: ".$_POST["pais"]."\n";
$mensaje .= "Telefono: ".$_POST["telefono"]."\n";
$mensaje .= "Email: ".$_POST["email"]."\n";
$mensaje .= "Comentarios: ".$_POST["comentarios"]."\n";

/* ---- o ---- */

$contacto = "INSERT INTO partner(nombres, apellidos, cargo, organizacion, direccion, ciudad, estado, postal, pais, telefono, email, comentarios, fecha_ingreso)VALUES('$xNombres', '$xApellidos', '$xCargo', '$xOrganizacion', '$xDireccion', '$xCiudad', '$xEstado', '$xPostal', '$xPais', '$xTelefono', '$xEmail', '$xMensaje', '$xFecha')";
$result=mysqli_query($enlaces, $contacto) or die('Consulta fallida: ' . mysqli_error($enlaces));


if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='alert alert-success' role='alert'>Datos Enviados Exitosamente.</div>";
} else {
	print "<div class='alert alert-danger' role='alert'>Problema al enviar los datos, intentelo m&aacute;s tarde.</div>";
}

?>