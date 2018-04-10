<script>
    function sendContact(){
        var valid;
        valid = validateContact();
        if(valid) {
            jQuery.ajax({
                url: "/partner_form.php",
                data:'nombres='+$("#nombres").val()+'&apellidos='+$("#apellidos").val()+'&cargo='+$("#cargo").val()+'&organizacion='+$("#organizacion").val()+'&direccion='+$("#direccion").val()+'&ciudad='+$("#ciudad").val()+'&estado='+$("#estado").val()+'&postal='+$("#postal").val()+'&pais='+$("#pais").val()+'&telefono='+$("#telefono").val()+'&email='+$("#email").val()+'&comentarios='+$("#comentarios").val()+'&fecha_ingreso='+$("#fecha_ingreso").val(),
                type: "POST",
                success:function(data){
                    $("#mail-status").html(data);
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
        if(!$("#postal").val()) {
            $("#postal").css('background-color','#f28282');
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
        if(!$("#comentarios").val()) {
            $("#comentarios").css('background-color','#f28282');
            valid = false;
        }
        return valid;
    }
</script>
<div class="container-fluid container">
	<div class="row">
		<?php
            $consultarPartner = "SELECT * FROM partner_principal";
            $resultadoPartner = mysqli_query($enlaces, $consultarPartner);
            $filaPar = mysqli_fetch_array($resultadoPartner);
            	$xCodigo      = $filaPar['cod_partner_principal'];
                $xTitulol     = $filaPar['titulo'];
                $xDescripcion = $filaPar['descripcion'];
                $xContacto    = $filaPar['contacto'];
                $xFormulario  = $filaPar['formulario'];
        ?>
		<div class="col-sm-12">
			<div align="center">
				<br><br>
				<h1><?php echo $xTitulol; ?></h1>
			</div>
			<?php echo $xDescripcion; ?>
			<div class="divider"></div>
		</div>
		<?php
        	$consultarPartnerL = "SELECT * FROM partner_lista ORDER BY orden ASC";
            $resultadoPartnerL = mysqli_query($enlaces, $consultarPartnerL);
            while($filaParl = mysqli_fetch_array($resultadoPartnerL)){
            	$xCodigo    	= $filaParl['cod_partner_lista'];
                $xTitulop   	= $filaParl['titulo'];
                $xDescripcionp  = $filaParl['descripcion'];
        ?>
		<div class="col-sm-12">
			<h3><?php echo $xTitulop; ?></h3>
			<?php echo $xDescripcionp; ?>
			<br>
			<br>
		</div>
		<?php
			}
			mysqli_free_result($resultadoPartnerL);
		?>
	</div>
</div>

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
<?php if($xFormulario=="1"){ ?>
<br><br>
<div class="container">
	<div class="divider"></div>
    <div class="row">
		<div align="center">
			<h1><span>Contactanos </span>Partner</h1>
		</div>
		<div class="col-sm-12">
			<div>
			  <!-- <form> -->
				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label>Nombre(s):</label>
					<input type="text" class="form-control" id="nombres" name="nombres" required />
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label>Apellido(s):</label>
					<input type="text" class="form-control" id="apellidos" name="apellidos" required />
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label>Cargo/T&iacute;tulo/Rol:</label>
					<input type="text" class="form-control" id="cargo" name="cargo" required />
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label>Organizaci&oacute;n:</label>
					<input type="text" class="form-control" id="organizacion" name="organizacion" required />
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<label>Direcci&oacute;n:</label>
					<input type="text" class="form-control" id="direccion" name="direccion" required />
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<label>Ciudad:</label>
					<input type="text" class="form-control" id="ciudad" name="ciudad" required />
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<label>Estado/Regi&oacute;n:</label>
					<input type="text" class="form-control" id="estado" name="estado" required />
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<label>C&oacute;digo Postal:</label>
					<input type="text" class="form-control" id="postal" name="postal" required />
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<label>Pa&iacute;s:</label>
					<input type="text" class="form-control" id="pais" name="pais" required />
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<label>N&uacute;mero Telef&oacute;co:</label>
					<input type="text" class="form-control" id="telefono" name="telefono" required />
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<label>Correo Eletr&oacute;nico:</label>
					<input type="email" class="form-control" id="email" name="email" required />
				</div>
				<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<label>Comentarios:</label>
					<textarea id="comentarios" name="comentarios" class="form-control" rows="5" required></textarea>
				</div>
				<!-- <div class="form-froup col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="g-recaptcha" data-sitekey="6LfJgUAUAAAAAFeg0bP035py8q-q2XMAlxPG5kbm"></div>
				</div> -->
				<div align="center">
					<br><br><br>
					<div id="mail-status"></div>
          <?php
            $fecha = date("Y-m-d");
          ?>
          <input type="hidden" id="fecha_ingreso" name="fecha_ingreso" value="<?php echo $fecha ?>">
					<button name="submit" class="btn btn-primary" onClick="sendContact();">Enviar</button>
					<br><br><br>
				</div>
			  <!-- </form> -->
			</div>
		</div>
	</div>
</div>
<?php }else{ } ?>

<script type="text/javascript">
	$(".placeholder-input").on("blur", function() {  $(this).toggleClass("not-empty", !!$(this).val());});
</script>