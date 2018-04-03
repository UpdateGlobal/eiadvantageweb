<?php include("cms/module/conexion.php"); ?>
<?php 
if (isset($_REQUEST['proceso'])) {
	$proceso 	= $_POST['proceso'];
} else {
	$proceso 	= "";
}

if($proceso=="Registrar"){
	$xNombres         = $_POST['nombres'];
	$xApellidos       = $_POST['apellidos'];
	$xCargo           = $_POST['cargo'];
	$xOrganizacion    = $_POST['organizacion'];
	$xDireccion       = $_POST['direccion'];
	$xCiudad          = $_POST['ciudad'];
	$xEstado          = $_POST['estado'];
	$xPais            = $_POST['pais'];
	$xTelefono        = $_POST['telefono'];
	$xEmail           = $_POST['email'];
	$xMensaje         = $_POST['mensaje'];
	$xFecha           = $_POST['fecha_ingreso'];

	$contacto = "INSERT INTO formulario(nombres, apellidos, cargo, organizacion, direccion, ciudad, estado, pais, telefono, email, mensaje, fecha_ingreso)VALUES('$xNombres', '$xApellidos', '$xCargo', '$xOrganizacion', '$xDireccion', '$xCiudad', '$xEstado', '$xPais', '$xTelefono', '$xEmail', '$xMensaje', '$xFecha')";
	$result=mysqli_query($enlaces, $contacto);
	
	/*--- enviar datos al email ----*/

	$consultarCot = 'SELECT * FROM contacto';
	$resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
	while($filaCot = mysqli_fetch_array($resultadoCot)){
		$xDesemail		= $filaCot['form_mail'];
	}
	$emailDestino = $xDesemail;
	$encabezado = "Contacto desde su Web";
	$mensaje .= "Informacion del Contacto\n";
	$mensaje .= "------------------------\n";
	$mensaje .= "Nombres			:".$xNombres."\n";
	$mensaje .= "Apellidos			:".$xApellidos."\n";
	$mensaje .= "Cargo/Título/Rol	:".$xCargo."\n";
	$mensaje .= "Organización		:".$xOrganizacion."\n";
	$mensaje .= "Dirección			:".$xDireccion."\n";
	$mensaje .= "Ciudad				:".$xCiudad."\n";
	$mensaje .= "Estado/Región		:".$xEstado."\n";
	$mensaje .= "País				:".$xPais."\n";
	$mensaje .= "Teléfono			:".$xTelefono."\n";
	$mensaje .= "Email				:".$xEmail."\n";
	$mensaje .= "Mensaje			:".$xMensaje."\n";
	$mensaje .= "Fecha				:".$xFecha."\n";
	
	$mailcabecera = "Desde: ".$xEmail." <". $xNombres. "> \n";
	$mailcabecera .= "Responder a: ".$xEmail."\n\n";
	mail($emailDestino,$encabezado, $mensaje, $mailcabecera);
	header("Location:gracias.php");
}
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="es">
<head>
	<?php include ('modulo/headerdescripcion.php');?>
	<script>
		function Validar(){
			document.contacto.action="contacto.php";
			if(document.contacto.nombres.value==""){
				alert("Debe ingresar su nombre");
				document.contacto.nombres.focus();
				return;	
			}
			if(document.contacto.apellidos.value==""){
				alert("Debe ingresar su apellidos");
				document.contacto.apellidos.focus();
				return;	
			}
			if(document.contacto.cargo.value==""){
				alert("Debe ingresar un Cargo, Título u Rol");
				document.contacto.cargo.focus();
				return;	
			}
			if(document.contacto.organizacion.value==""){
				alert("Debe ingresar su organización");
				document.contacto.organizacion.focus();
				return;	
			}
			if(document.contacto.direccion.value==""){
				alert("Debe ingresar su dirección");
				document.contacto.direccion.focus();
				return;	
			}
			if(document.contacto.ciudad.value==""){
				alert("Debe ingresar su ciudad");
				document.contacto.ciudad.focus();
				return;	
			}
			if(document.contacto.estado.value==""){
				alert("Debe ingresar su estado o región");
				document.contacto.estado.focus();
				return;	
			}
			if(document.contacto.pais.value==""){
				alert("Debe ingresar su país");
				document.contacto.pais.focus();
				return;	
			}
			if(document.contacto.telefono.value==""){
				alert("Debe ingresar su número de teléfono");
				document.contacto.telefono.focus();
				return;	
			}
			if(document.contacto.email.value==""){
				alert("Debe ingresar su correo personal");
				document.contacto.email.focus();
				return;	
			}
			if(document.contacto.mensaje.value==""){
				alert("Debe ingresar su comentario");
				document.contacto.mensaje.focus();
				return;	
			}
			document.contacto.proceso.value="Registrar";
			document.contacto.submit();
		}
	</script>
</head>
<body>
	<?php
		include ('modulo/preload.php');
		include ('modulo/topbar.php');
		include ('modulo/menu.php');
	?>
	<div class="innerheader-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Contactanos</h2>
					<ol class="breadcrumb">
						<li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
						<li><a href="contacto.php"><i class="fa fa-clone"></i> Contactos</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br><br>
	<?php
		include ('modulo/contacto.php');
		include ('modulo/footer.php');
	?>
	<?php include('modulo/scripts.php'); ?>
</body>
</html>