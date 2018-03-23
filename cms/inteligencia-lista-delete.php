<?php include "module/conexion.php"; ?>
<?php include "module/verificar.php"; ?>
<?php 
$cod_inteligencia_lista = $_REQUEST['cod_inteligencia_lista'];
$eliminar = "DELETE FROM inteligencia_lista WHERE cod_inteligencia_lista='$cod_inteligencia_lista'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:inteligencia.php");
?>