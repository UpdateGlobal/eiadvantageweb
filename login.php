<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="es">
<head>

	<?php include ('modulo/headerdescripcion.php');?>

</head>
<body class="logreg-wrapp">
	<!-- Start preloading -->
	<div id="loading" class="loading-invisible">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
			</div>
			<p>Espere Por favor...</p>
		</div>
	</div>
	<!-- End preloading -->

	
	<!-- Start register -->
	<div class="logreg">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="login-wrapp">
						<div class="logreg-contain">
							<div class="custom-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="active">
										<a href="signup.html#tab1" data-toggle="tab">Crear Cuenta</a>
									</li>
									
								</ul>
							 
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab1">
										<form>
											<div class="form-group">
												<label>Email : <span class="noempaty">*</span></label> 
												<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your email address" />
											</div>
											<div class="form-group">
												<label>Contraseña : <span class="noempaty">*</span></label>
												<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter secure password" />
											</div>
											<div class="form-group">
												<label>Confirmar Contraseña : <span class="noempaty">*</span></label>
												<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm secure password" />
											</div>
											<div class="form-group">
												<div class="checkbox">
													<label>
														<input type="checkbox"> No Recibir Noticias
													</label>
												</div>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary">Registrar</button>
											</div>
										</form>
									</div>
								
								</div>
							</div>  
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End register -->
	
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
    
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
	
    <!-- easing -->
	<script src="js/jquery.easing-1.3.min.js"></script>
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
    <!-- Bootsnavs -->
    <script src="js/bootsnav.js"></script>

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

	<!-- google code prettify -->
	<script src="js/google-code-prettify/prettify.js"></script>
	
    <!-- Twitter -->
	<script src="js/twitter/tweetie.min.js"></script>
	<script src="js/twitter/ticker.js"></script>
	<script src="js/twitter/setting.js"></script>
	
    <!-- Custom -->
    <script src="js/custom.js"></script>

	<!-- Theme option-->
	<script src="js/template-option/demosetting.js"></script>
</body>
</html>
