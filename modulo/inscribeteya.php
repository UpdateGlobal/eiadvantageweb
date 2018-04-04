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
	<div class="container">
		<br><br>
		<div class="row">
			<div align="center">
				<h1><strong>Inscribete</strong> YA!</h1>
			</div>
			<div class="col-sm-12 ">
				<form>
					<div class="form-group col-xs-12">
						<label>Direcci&oacute;n:</label>
						<input type="text" class="form-control" id="direccion" name="direccion" alt="" required  />
					</div>
					<div class="form-group col-xs-12">
						<label>Tel&eacute;fono:</label>
						<input type="text" class="form-control" id="telefono" name="telefono" alt="" required  />
					</div>
					<div class="form-group col-xs-12">
						<label>Correo Electr&oacute;nico:</label>
						<input type="email" class="form-control" id="email" name="email" alt="" required  />
					</div>
					<div class="form-froup col-xs-12">
						<div class="g-recaptcha" data-sitekey="6LfJgUAUAAAAAFeg0bP035py8q-q2XMAlxPG5kbm"></div>
					</div>
					<div align="center">
						<br><br><br>
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bs-example-modal-lg">Inscribete</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="modal fade bs-example-modal-lg container" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">×</span></button>
					<h5 class="modal-title">Términos y Condiciones</h5>
				</div>
				<div class="modal-body">
					<p class="lead">Al certificarse significa que usted ha sido capacitado(a) para usar los instrumentos de Evaluación Genos de Inteligencia Emocional y está autorizado(a) a comprarlos y usarlos en el país en donde se certificó. Usted no puede certificar a otras personas para que le compren y usen los instrumentos de Evaluación Genos de Inteligencia Emocional con sus respectivos clientes, ni puede comprar y usar los instrumentos de Evaluación Genos de Inteligencia Emocional fuera del país en donde se certificó.</p>
					<h5>Reservaciones y Cancelaciones</h5>
					<p class="lead">Usted puede cancelar su reservación sin penalización avisándonos por escrito (al correo electrónico genos@ei-advantage.com), con una anticipación de por lo menos 15 días, antes de la fecha de inicio del programa en el que se inscribió.
					Excepto por circunstancias de fuerza mayor o caso fortuito, usted no puede cancelar o transferir su reservación dentro de los 15 días anteriores a la fecha de inicio del programa en el que se inscribió.</p>
					<h5>Reservaciones para Devoluciones</h5>
					<p class="lead">Como parte del Programa de Certificación Genos en Inteligencia Emocional, uno de nuestros facilitadores le dará el feedback de su propia evaluación 360º a través de una conferencia web. Adicionalmente, se requerirá que usted haga la devolución con uno de nuestros facilitadores, a través de una conferencia web, para finalizar el proceso y recibir su certificación. Excepto circunstancias de fuerza mayor o caso fortuito, se aplicará un cargo de reprogramación de US$90.00 + Impuesto al Valor Agregado en caso que solicite cambiar cualquiera de las fechas de las sesiones de feedback o devolución.</p>
					<h5>Conservación de su Credencial Genos</h5>
					<p class="lead">El uso profesional y competente de las herramientas Genos de evaluación proviene del aprendizaje continuo acerca de su uso, la interacción y diálogo con otros “Genos Certified Practitioners” y las experiencias reales y repetitivas de su aplicación.
					Por consiguiente, para mantener su Certificación, todos los Practitioners deben efectuar la devolución de un mínimo de tres (3) Informes de IE en un período de 12 meses y asistir por lo menos a un Evento de Desarrollo Profesional Genos ese año calendario. Usted puede inscribirse a estos eventos a través de nuestro portal en línea para miembros certificados.
					Además de estos requisitos, Genos también requiere que los “Genos Certified Practitioners” mantengan una póliza de seguro de responsabilidad civil profesional en los países que lo exijan.</p>
					<h5>Aceptación de los Términos y Condiciones</h5>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">No Acepto</button>
					<button type="button" class="btn btn-primary btn-sm">Acepto</button>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal -->
	<script type="text/javascript">
		$(".placeholder-input").on("blur", function() {  $(this).toggleClass("not-empty", !!$(this).val());});
	</script>
	<script>
		$(document).ready(function(){$("#myModal").modal("show");});
	</script>
</div>