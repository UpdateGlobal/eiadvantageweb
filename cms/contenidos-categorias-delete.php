<?php include("module/conexion.php"); ?>
<?php include("module/verificar.php"); ?>
<?php 
$cod_menu = $_REQUEST['cod_menu'];
$eliminar = "DELETE FROM contenidos_categorias WHERE cod_menu='$cod_menu'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:contenidos-categorias.php");
?>