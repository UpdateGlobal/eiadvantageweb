<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php 
$cod_partner = $_REQUEST['cod_partner'];
$eliminar = "DELETE FROM partner WHERE cod_partner='$cod_partner'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:partner.php");
?>