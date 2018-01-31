<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include ('modulo/headerdescripcion.php');?>
	<meta name="robots" content="index,follow">
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- RS5.0 Main Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/revolution/settings.css">
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="css/revolution/layers.css">
	<link rel="stylesheet" type="text/css" href="css/revolution/navigation.css">
	<link href="css/style.css" rel="stylesheet">
	<!-- Color -->
	<link id="skin" href="skins/default.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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

	<!-- Item 1 -->
	<li>
		<div class="direction-r">
			<div class="flag-wrapper">
				<span class="flag">Nombre del Certificación</span>
				<span class="time-wrapper"><span class="time">2013 - present</span></span>
			</div>
			<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
	</li>
  
	<!-- Item 2 -->
	<li>
		<div class="direction-l">
			<div class="flag-wrapper">
				<span class="flag">Nombre del Certificación</span>
				<span class="time-wrapper"><span class="time">2013 - present</span></span>
			</div>
			<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
	</li>

	<!-- Item 3 -->
	<li>
		<div class="direction-r">
			<div class="flag-wrapper">
				<span class="flag">Nombre del Certificación</span>
				<span class="time-wrapper"><span class="time">2013 - present</span></span>
			</div>
			<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
	</li>
		<!-- Item 2 -->
	<li>
		<div class="direction-l">
			<div class="flag-wrapper">
				<span class="flag">Nombre del Certificación</span>
				<span class="time-wrapper"><span class="time">2013 - present</span></span>
			</div>
			<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
	</li>
		<!-- Item 3 -->
	<li>
		<div class="direction-r">
			<div class="flag-wrapper">
				<span class="flag">Nombre del Certificación</span>
				<span class="time-wrapper"><span class="time">2013 - present</span></span>
			</div>
			<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
		</div>
	</li>
  
</ul>






<?php

			
			include ('modulo/footer.php');

		?>

	<!-- Start to top -->
	<a href="index-corporate-alt1.html#" class="toTop">
		<i class="fa fa-chevron-up"></i>
	</a>
	<!-- End to top -->

	<!-- START JAVASCRIPT -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/loading.js"></script>

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="js/ie-emulation-modes-warning.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

	
	<!-- easing -->
	<script src="js/jquery.easing-1.3.min.js"></script>
	


	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>

	

	<!-- Bootsnavs -->
	<script src="js/bootsnav.js"></script>

	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script>

	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="js/revolution/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="js/revolution/jquery.themepunch.revolution.min.js"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
	(Load Extensions only on Local File Systems ! 
	The following part can be removed on Server for On Demand Loading) -->
	<script type="text/javascript" src="js/revolution/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="js/revolution/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="js/revolution/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="js/revolution/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="js/revolution/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="js/revolution/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="js/revolution/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="js/revolution/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="js/revolution/revolution.extension.video.min.js"></script>

	<!-- CUSTOM REVOLUTION JS FILES -->
	<script type="text/javascript" src="js/revolution/setting/clean-revolution-slider.js"></script>

	<!-- Custom form -->
	<script src="js/form/jcf.js"></script>
	<script src="js/form/jcf.scrollable.js"></script>
	<script src="js/form/jcf.select.js"></script>

	<!-- Custom checkbox and radio -->
	<script src="js/checkator/fm.checkator.jquery.js"></script>
	<script src="js/checkator/setting.js"></script>

	<!-- Select language -->
	<script src="js/selectdropdown/jquery.dd.min.js"></script>
	<script src="js/selectdropdown/setting.js"></script>

	<!-- masonry -->
	<script src="js/masonry/masonry.min.js"></script>
	<script src="js/masonry/masonry.filter.js"></script>
	<script src="js/masonry/setting.js"></script>

	<!-- PrettyPhoto -->
	<script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
	<script src="js/prettyPhoto/setting.js"></script>

	<!-- owl carousel -->
	<script src="js/owlcarousel/owl.carousel.min.js"></script>
	<script src="js/owlcarousel/setting.js"></script>

	<!-- Parallax -->
	<script src="js/parallax/jquery.parallax-1.1.3.js"></script>
	<script src="js/parallax/setting.js"></script>

	<!-- Twitter -->
	<script src="js/twitter/tweetie.min.js"></script>
	<script src="js/twitter/ticker.js"></script>
	<script src="js/twitter/setting.js"></script>

	<!-- Custom -->
	<script src="js/custom.js"></script>

	<!-- Theme option-->
	<script src="js/template-option/demosetting.js"></script>
</body>
