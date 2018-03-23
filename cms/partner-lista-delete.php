<?php include "module/conexion.php"; ?>
<?php include "module/verificar.php"; ?>
<?php 
$cod_partner_lista = $_REQUEST['cod_partner_lista'];
$eliminar = "DELETE FROM partner_lista WHERE cod_partner_lista='$cod_partner_lista'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:partner-principal.php");
?>