
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
	display: none;	 !important;
 }
}
@media only screen and (max-width: 720px) {
.responform2 {
	display: none;	 !important;
 }
}
</style>
	<div class="container responform2">
		<br><br>
		<div class="row">
			<div align="center">
			<h1><span>Contactanos</span></h1>
			</div>
			<div class="col-sm-8">
				<form>
					<div class="form-group col-xs-6 col-sm-6">
						<label>Nombre(s)</label>
						<input type="text" class="form-control" id="" name="" alt="" required >
					</div>
					<div class="form-group col-xs-6 col-sm-6">
						<label>Apellido(s)</label>
						<input type="text" class="form-control" id="" name="" alt="" required />
					</div>
					<div class="form-group col-xs-6 col-sm-6">
						<label>Cargo/Titulo/Rol</label>
						<input type="text" class="form-control" id="" name="" alt="" required  />
					</div>
					<div class="form-group col-xs-6 col-sm-6">
						<label>Organización</label>
						<input type="text" class="form-control" id="" name="" alt="" required  />
					</div>
					<div class="form-group col-xs-12">
						<label>Dirección:</label>
						<input type="text" class="form-control" id="" name="" alt="" required  />
					</div>
					<div class="form-group col-xs-4">
						<label>Ciudad</label>
						<input type="text" class="form-control" id="" name="" alt="" required  />
					</div>
					<div class="form-group col-xs-4">
						<label>Estado/Regíon</label>
						<input type="text" class="form-control" id="" name="" alt="" required  />
					</div>
					<div class="form-group col-xs-4">
						<label>País</label>
						<input type="text" class="form-control" id="" name="" alt="" required  />
					</div>

					<div class="form-group col-xs-6">
						<label>Telefono</label>
						<input type="number" class="form-control" id="" name="" alt="" required  />
					</div>
					<div class="form-group col-xs-6">
						<label>Correo Personal</label>
						<input type="email" class="form-control" id="" name="" alt="" required  />
					</div>
					<div class="form-group col-xs-12">
						<label>Comentario</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-froup col-xs-12">
						<div class="g-recaptcha" data-sitekey="6LfJgUAUAAAAAFeg0bP035py8q-q2XMAlxPG5kbm"></div>
					</div>
						<div align="center">
						
						<br><br><br>
						<button type="submit" class="btn btn-primary">Enviar</button>
						</div>
				</form>
			</div>
			<div class="col-sm-4" style="padding-top: 30px;">

				<p style="font-size: 14px; color: #19b3a1">	<i class="fa fa-home icon-default fa-3x" style="color: #19b3a1;"></i> Dirección: xxxxxx-xxxxxx-xxxxxx-xx</p>
				<p style="font-size: 14px; color: #19b3a1">	<i class="fa fa-phone icon-default fa-3x" style="color: #19b3a1;"></i>  Telefono: xxx-xxx-xxx</p>
				<p style="font-size: 14px; color: #19b3a1">	<i class="fa fa-paper-plane icon-default fa-3x" style="color: #19b3a1;"></i>   Correo: xxxxxxxx@xxxxxxxxxxxxx.com</p>
				
				
			</div>
		</div>
	</div>

<!--version mobil-->
<div class="container responform">
	<div class="row form">
		<div align="center">
		<h1><span>Contactanos</span></h1>
		</div>
		<form action="" method="">
		<div class="col-sm-6">
			<div class='field'>
			    <input class='placeholder-input' id='' type='text'>
			    <label class='placeholder-label' for=''>Nombre(s)</label>
			  </div>
		</div>
		<div class="col-sm-6">
			<div class='field'>
			    <input class='placeholder-input' id='' type='text'>
			    <label class='placeholder-label' for=''>Apellido(s)</label>
			  </div>
		</div>
		<div class="col-sm-6">
			<div class='field'>
			    <input class='placeholder-input' id='' type='text'>
			    <label class='placeholder-label' for=''>Cargo/Titulo/Rol</label>
			  </div>
		</div>
		<div class="col-sm-6">
			<div class='field'>
			    <input class='placeholder-input' id='' type='text'>
			    <label class='placeholder-label' for=''>Organizaciín</label>
			  </div>
		</div>
		<div class="col-sm-12">
			<div class='field'>
			    <input class='placeholder-input' id='' type='text'>
			    <label class='placeholder-label' for=''>Direcciín Domicilio</label>
			  </div>
		</div>
		<div class="col-sm-6">
			<div class='field'>
			    <input class='placeholder-input' id='' type='text'>
			    <label class='placeholder-label' for=''>País</label>
			  </div>
		</div>
		<div class="col-sm-6">
			<div class='field'>
			    <input class='placeholder-input' id='' type='text'>
			    <label class='placeholder-label' for=''>Regíon/Estado</label>
			  </div>
		</div>
		<div class="col-sm-6">
			<div class='field'>
			    <input class='placeholder-input' id='' type='number'>
			    <label class='placeholder-label' for=''>Cod Postal</label>
			  </div>
		</div>
		<div class="col-sm-6">
			<div class='field'>
			    <input class='placeholder-input' id='' type='number'>
			    <label class='placeholder-label' for=''>Telefono</label>
			  </div>
		</div>
		<div class="col-sm-6">
			<div class='field'>
			    <input class='placeholder-input' id='' type='email'>
			    <label class='placeholder-label' for=''>Email Personal</label>
			  </div>
		</div>
		<div class="col-sm-6">
			<div class='field'>
			    <input class='placeholder-input' id='' type='text'>
			    <label class='placeholder-label' for=''>Tu Comentario</label>
			    <template class="placeholder-input"></template>
			  </div>
		</div>
		



		<br><br>
		<div class="form-froup col-xs-12">
			<div class="g-recaptcha" data-sitekey="6LfJgUAUAAAAAFeg0bP035py8q-q2XMAlxPG5kbm"></div>
		</div>
			<div align="left">
					<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
	</div>
		</form>
</div>

<script type="text/javascript">
	$(".placeholder-input").on("blur", function() {  $(this).toggleClass("not-empty", !!$(this).val());});
</script>




	






















