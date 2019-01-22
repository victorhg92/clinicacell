@extends("layouts.base")

@section("cuerpo")
	<section>
		<h1>ENVIANOS TU CONSULTA</h1>
		<form action="#" method="post">
			<p class="texto_seccion">Te responderemos a la brevedad.</p>
			<div class="form-row">
				<div class="form-group col-md-6 col-lg-6">			
					<input type="text" name="nombre" id="nombre" class="control" placeholder="Nombre (*)"/>
				</div>
				<div class="form-group col-md-6 col-lg-6">
					<input type="text" name="apellido" id="apellido" class="control" placeholder="Apellido (*)"/>
				</div>
			</div>
			<div class="form-row">		
				<div class="form-group col-md-12 col-lg-12">
					<input type="text" name="email" id="email" class="control" placeholder="E-mail (*)"/>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6 col-lg-6">
					<input type="text" name="telefono" id="telefono" class="control" placeholder="Teléfono"/>
				</div>
				<div class="form-group col-md-6 col-lg-6">
					<input type="text" name="direccion" id="direccion" class="control" placeholder="Dirección"/>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12 col-lg-12">
					<textarea rows="4" name="problema" id="problema" class="control" placeholder="Problema"></textarea>
				</div>
			</div>
			<p>Los campos marcados con (*) son obligatorios.</p>
			<input id="btn_reparaciones" type="submit" value="ENVIAR"/>
		</form>		
	</section>
	<section>		
		<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13114.504963156834!2d-58.617561650000006!3d-34.7398144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1547404884949" frameborder="0" style="border:0" allowfullscreen></iframe>
		<div id="informacion_contacto">
			<div class="item_contacto">
				<i class="fa fa-map-marker"></i>
				<b>Dirección</b>
				<p>Piedra buena 6452 - 1757 Laferrere</p>
			</div>
			<div class="item_contacto">
				<i class="fa fa-envelope"></i>
				<b>E-mail</b>
				<p>clinicacelll@gmail.com</p>
			</div>
			<div class="item_contacto">
				<i class="fa fa-phone"></i>
				<b>Teléfono</b>
				<p>1170728147</p>
			</div>
			<div class="item_contacto">
				<i class="fa fa-user"></i>
				<b>Horarios de atención</b>
				<p class="horario">Lunes y martes:  8:00 hs a 20:00hs</p>
				<p class="horario">Jueves y viernes  7:00 hs a 19:00hs</p>
			</div>
		</div>
	</section>
	<p id="aviso_registro">
		<a href="#" class="color_secundario">REGISTRATE</a> PARA PODER SOLICITARNOS UN DIAGNOSTICO DE TU DISPOSITIVO.
	</p>
@stop