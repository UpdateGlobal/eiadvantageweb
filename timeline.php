<?php include("cms/module/conexion.php"); 
$letter=0;?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="es">
<head>
<?php include ('modulo/headerdescripcion.php');?>
<style type="text/css">
	/* ================ The Timeline ================ */

	.timeline {
	  position: relative;
	  width: 660px;
	  margin: 0 auto;
	  margin-top: 20px;
	  padding: 1em 0;
	  list-style-type: none;
	}

	.timeline:before {
	  position: absolute;
	  left: 50%;
	  top: 0;
	  content: ' ';
	  display: block;
	  width: 6px;
	  height: 100%;
	  margin-left: -3px;
	  background: rgb(80,80,80);
	  background: -moz-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
	  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(125,185,232,1)));
	  background: -webkit-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
	  background: -o-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
	  background: -ms-linear-gradient(top, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
	  background: linear-gradient(to bottom, rgba(80,80,80,0) 0%, rgb(80,80,80) 8%, rgb(80,80,80) 92%, rgba(80,80,80,0) 100%);
	  
	  z-index: 5;
	}

	.timeline li {
	  padding: 1em 0;
	}

	.timeline li:after {
	  content: "";
	  display: block;
	  height: 0;
	  clear: both;
	  visibility: hidden;
	}

	.direction-l {
	  position: relative;
	  width: 300px;
	  float: left;
	  text-align: right;
	}

	.direction-r {
	  position: relative;
	  width: 296px;
	  float: right;
	}

	.flag-wrapper {
	  position: relative;
	  display: inline-block;
	  
	  text-align: center;
	}

	.flag {
	    position: relative;
	    display: inline;
	    background: rgb(23, 178, 160);
	    padding: 6px 10px;
	    border-radius: 5px;
	    font-weight: 600;
	    text-align: left;
	    color: #fff;
	}

	.direction-l .flag {
	  -webkit-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
	  -moz-box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
	  box-shadow: -1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
	}

	.direction-r .flag {
	  -webkit-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
	  -moz-box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
	  box-shadow: 1px 1px 1px rgba(0,0,0,0.15), 0 0 1px rgba(0,0,0,0.15);
	}

	.direction-l .flag:before,
	.direction-r .flag:before {
	  position: absolute;
	  top: 50%;
	  right: -37px;
	  content: ' ';
	  display: block;
	  width: 12px;
	  height: 12px;
	  margin-top: -10px;
	  background: #fff;
	  border-radius: 10px;
	 border: 4px solid rgb(25, 171, 157);
	  z-index: 10;
	}

	.direction-r .flag:before {
	  left: -40px;
	}

	.direction-l .flag:after {
	  content: "";
	  position: absolute;
	  left: 100%;
	  top: 50%;
	  height: 0;
	  width: 0;
	  margin-top: -8px;
	  border: solid transparent;
	  border-left-color: rgb(248,248,248);
	  border-width: 8px;
	  pointer-events: none;
	}

	.direction-r .flag:after {
	  content: "";
	  position: absolute;
	  right: 100%;
	  top: 50%;
	  height: 0;
	  width: 0;
	  margin-top: -8px;
	  border: solid transparent;
	  border-right-color: rgb(248,248,248);
	  border-width: 8px;
	  pointer-events: none;
	}

	.time-wrapper {
	  display: inline;
	  
	  line-height: 1em;
	  font-size: 0.66666em;
	  color: rgb(26, 174, 159);
	  vertical-align: middle;
	}

	.direction-l .time-wrapper {
	  float: left;
	}

	.direction-r .time-wrapper {
	  float: right;
	}

	.time {
	  display: inline-block;
	  padding: 4px 6px;
	  background: rgb(248,248,248);
	}

	.desc {
	  margin: 1em 0.75em 0 0;
	  
	  font-size: 0.77777em;
	  font-style: italic;
	  line-height: 1.5em;
	}

	.direction-r .desc {
	  margin: 1em 0 0 0.75em;
	}

/* ================ Timeline Media Queries ================ */

@media screen and (max-width: 660px) {

	.timeline {
	 	width: 100%;
		padding: 4em 0 1em 0;
	}

	.timeline li {
		padding: 2em 0;
	}

	.direction-l,
	.direction-r {
		float: none;
		width: 100%;
		text-align: center;
	}

	.flag-wrapper {
		text-align: center;
	}

	.flag {
		background: rgb(255,255,255);
		z-index: 15;
	}

	.direction-l .flag:before,
	.direction-r .flag:before {
	 	position: absolute;
		top: -30px;
		left: 50%;
		content: ' ';
		display: block;
		width: 12px;
		height: 12px;
		margin-left: -9px;
		background: #fff;
		border-radius: 10px;
		border: 4px solid rgb(255,80,80);
		z-index: 10;
	}

	.direction-l .flag:after,
	.direction-r .flag:after {
		content: "";
		position: absolute;
		left: 50%;
		top: -8px;
		height: 0;
		width: 0;
		margin-left: -8px;
		border: solid transparent;
		border-bottom-color: rgb(255,255,255);
		border-width: 8px;
		pointer-events: none;
	}

	.time-wrapper {
		display: block;
		position: relative;
		margin: 4px 0 0 0;
		z-index: 14;
	}

	.direction-l .time-wrapper {
		float: none;
	}

	.direction-r .time-wrapper {
		float: none;
	}

	.desc {
		position: relative;
		margin: 1em 0 0 0;
		padding: 1em;
		background: rgb(245,245,245);
		-webkit-box-shadow: 0 0 1px rgba(0,0,0,0.20);
		-moz-box-shadow: 0 0 1px rgba(0,0,0,0.20);
		box-shadow: 0 0 1px rgba(0,0,0,0.20);
		z-index: 15;
	}

	.direction-l .desc,
	.direction-r .desc {
		position: relative;
		margin: 1em 1em 0 1em;
		padding: 1em;
		z-index: 15;
	}
}

@media screen and (min-width: 400px ?? max-width: 660px) {
	.direction-l .desc, 
	.direction-r .desc {
		margin: 1em 4em 0 4em;
	}
}
</style>
</head>
<body>
<?php
	include ('modulo/preload.php');
	include ('modulo/topbar.php');
	include ('modulo/menu.php');
?>
<ul class="timeline">
	<?php
        $consultarCertifica = "SELECT * FROM certificaciones ORDER BY orden";
        $resultadoCertifica = mysqli_query($enlaces,$consultarCertifica) or die('Consulta fallida: ' . mysqli_error($enlaces));
        while($filaCer = mysqli_fetch_array($resultadoCertifica)){
            $xTitulocer			= $filaCer['titulo'];
            $xDescripcioncer	= $filaCer['descripcion'];
            $xFechacer     		= $filaCer['fecha'];
            $letter++;
    ?>
	<li>
		<?php if($letter==1){ ?>
		<div class="direction-l">
		<?php }elseif($letter==2){ ?>
		<div class="direction-r">
		<?php $letter=0;?>
		<?php } ?>
			<div class="flag-wrapper">
				<span class="flag"><?php echo $xTitulocer; ?></span>
				<span class="time-wrapper"><span class="time"><?php echo $xFechacer; ?></span></span>
			</div>
			<div class="desc"><?php echo $xDescripcioncer; ?></div>
		</div>
	</li>
	<?php 
		}
		mysqli_free_result($resultadoCertifica); 
	?>
</ul>
<?php include ('modulo/footer.php'); ?>
<?php include ('modulo/scripts.php'); ?>
</body>
</html>