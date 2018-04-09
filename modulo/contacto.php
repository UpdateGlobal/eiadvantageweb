<script>
	function sendContact(){
        var valid;
        valid = validateContact();
        if(valid) {
            jQuery.ajax({
                url: "contact_form.php",
                data:'nombres='+$("#nombres").val()+'&apellidos='+$("#apellidos").val()+'&cargo='+$("#cargo").val()+'&organizacion='+$("#organizacion").val()+'&direccion='+$("#direccion").val()+'&ciudad='+$("#ciudad").val()+'&estado='+$("#estado").val()+'&pais='+$("#pais").val()+'&telefono='+$("#telefono").val()+'&email='+$("#email").val()+'&mensaje='+$("#mensaje").val()+'&fecha_ingreso='+$("#fecha_ingreso").val(),
                type: "POST",
                success:function(data){
                    $("#mail-status").html(data);
                    $("#send").html("");
                },
                error:function (){}
            });
        }
    }
    function validateContact() {
        var valid = true;
        if(!$("#nombres").val()) {
            $("#nombres").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#apellidos").val()) {
            $("#apellidos").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#cargo").val()) {
            $("#cargo").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#organizacion").val()) {
            $("#organizacion").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#direccion").val()) {
            $("#direccion").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#ciudad").val()) {
            $("#ciudad").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#estado").val()) {
            $("#estado").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#pais").val()) {
            $("#pais").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#telefono").val()) {
            $("#telefono").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#email").val()) {
            $("#email").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#email").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#mensaje").val()) {
            $("#mensaje").css('background-color','#f28282');
            valid = false;
        }
        return valid;
    }
	
</script>
<style type="text/css">
.form {
  width: 100%;
  margin: 30px auto;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 16px;
  transform: translateZ(0);
}
.form .field {
  position: relative;
  margin-bottom: 10px;
  height: 40px;
}
.form .field .placeholder-label {
  position: absolute;
  top: 14px;
  left: 12px;
  font-weight: 300;
  color: #aaa;
  cursor: text;
  z-index: 200;
  transition: all 0.25s;
}
.form .field .placeholder-label:after {
  content: ":";
  opacity: 0;
  color: #333;
  transition: all 0.5s;
}
.form .field .placeholder-input {
  position: absolute;
  width: 80%;
  padding: 10px;
  border-radius: 10px;
  border: 1px solid #aaa;
  font-size: 16px;
  z-index: 100;
  transition: all 0.25s;
}
.form .field .placeholder-input:focus, .form .field .placeholder-input.not-empty {
  margin-left: 0px;
  width: 100%;
  outline: none;
  border-color: #18b7a3;
}
.form .field .placeholder-input:focus + .placeholder-label, .form .field .placeholder-input.not-empty + .placeholder-label {
  color: #333;
  cursor: default;
   display: none;
   padding-right: 20px;
}
.form .field .placeholder-input:focus + .placeholder-label:after, .form .field .placeholder-input.not-empty + .placeholder-label:after {
  opacity: 1;
}
.explanation {
  width: 500px;
  margin: 0 auto;
  line-height: 1.5;
  text-align: center;
}
@media only screen and (min-width: 720px) {
	.responform {
		display: none !important;
 	}
}
@media only screen and (max-width: 720px) {
	.responform2 {
		display: none !important;
 	}
}
</style>
<div class="container responform2">
	<br><br>
	<div class="row">
		<div align="center">
			<h1><span>Contactanos</span></h1>
		</div>
		<div class="col-sm-8 col-xs-12">
			<!-- <form> -->
				<div class="form-group col-xs-12 col-sm-6">
					<label>Nombre(s):</label>
					<input type="text" class="form-control" id="nombres" name="nombres" required />
				</div>
				<div class="form-group col-xs-12 col-sm-6">
					<label>Apellido(s):</label>
					<input type="text" class="form-control" id="apellidos" name="apellidos" required />
				</div>
				<div class="form-group col-xs-12 col-sm-6">
					<label>Cargo/T&iacute;tulo/Rol:</label>
					<input type="text" class="form-control" id="cargo" name="cargo" required />
				</div>
				<div class="form-group col-xs-12 col-sm-6">
					<label>Organizaci&oacute;n:</label>
					<input type="text" class="form-control" id="organizacion" name="organizacion" required />
				</div>
				<div class="form-group col-xs-12">
					<label>Direcci&oacute;n:</label>
					<input type="text" class="form-control" id="direccion" name="direccion" required />
				</div>
				<div class="form-group col-xs-12 col-sm-4">
					<label>Ciudad:</label>
					<input type="text" class="form-control" id="ciudad" name="ciudad" required />
				</div>
				<div class="form-group col-xs-12 col-sm-4">
					<label>Estado/Regi&oacute;n:</label>
					<input type="text" class="form-control" id="estado" name="estado" required />
				</div>
				<div class="form-group col-xs-12 col-sm-4">
					<label>Pa&iacute;s:</label>
					<input type="text" class="form-control" id="pais" name="pais" required />
				</div>
				<div class="form-group col-xs-12 col-sm-6">
					<label>Tel&eacute;fono:</label>
					<input type="number" class="form-control" id="telefono" name="telefono" required />
				</div>
				<div class="form-group col-xs-12 col-sm-6">
					<label>Correo Personal:</label>
					<input type="email" class="form-control" id="email" name="email" required />
				</div>
				<div class="form-group col-xs-12 col-sm-12">
					<label>Comentario:</label>
					<textarea class="form-control" id="mensaje" name="mensaje"></textarea>
				</div>
				<!-- <div class="form-froup col-xs-12 col-sm-12">
					<div class="g-recaptcha" data-sitekey="6LfJgUAUAAAAAFeg0bP035py8q-q2XMAlxPG5kbm"></div>
				</div> -->
				<div align="center">
					<br><br><br>
					<div style="clear:both;"></div>
					<div id="mail-status"></div>
					<?php 
					 	$fecha = date("Y-m-d");
					?>
        	        <input type="hidden" id="fecha_ingreso" name="fecha_ingreso" value="<?php echo $fecha ?>">
					<button type="button" class="btn btn-primary" onClick="sendContact();">Enviar</button>
				</div>
			<!-- </form> -->
		</div>
		<div class="col-sm-4 col-xs-12" style="padding-top: 30px;">
			<?php
				$consultarCot = 'SELECT * FROM contacto';
				$resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
				while($filaCot = mysqli_fetch_array($resultadoCot)){
					$xDirection		= $filaCot['direction'];
					$xPhone			= $filaCot['phone'];
					$xEmail			= $filaCot['email'];
			?>
			<p style="font-size: 14px; color: #19b3a1">	
				<i class="fa fa-home icon-default fa-3x" style="color: #19b3a1;"></i> <strong>Direcci&oacute;n:</strong> <?php echo $xDirection; ?>
			</p>
			<p style="font-size: 14px; color: #19b3a1">	
				<i class="fa fa-phone icon-default fa-3x" style="color: #19b3a1;"></i> <strong>Tel&eacute;fono:</strong> <?php echo $xPhone; ?>
			</p>
			<p style="font-size: 14px; color: #19b3a1">	
				<i class="fa fa-paper-plane icon-default fa-3x" style="color: #19b3a1;"></i> <strong>Correo:</strong> <?php echo $xEmail; ?>
			</p>
			<?php
				}
				mysqli_free_result($resultadoCot);
			?>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(".placeholder-input").on("blur", function() {  $(this).toggleClass("not-empty", !!$(this).val());});
</script>