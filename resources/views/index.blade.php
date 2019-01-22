@extends("layouts.base")

@section("cuerpo")
<div id="cuerpo">
	<section>
	<h1>
		SERVICIO DE REPARACIÓN DE <span class="color_primario">COMPUTADORAS</span> Y 
		<span class="color_secundario">CELULARES</span> Y VENTA DE <span class="color_primario">ACCESORIOS</span> Y <span class="color_secundario">REPUESTOS</span>
	</h1>
	</section>
	<section>
		<ul id="guia">
			<li><span class="numero_guia">1</span>- REGISTRATE <a href="#" class="color_secundario">AQUÍ</a></li>
			<li><span class="numero_guia">2</span>- RECIBE NUESTRA RESPUESTA O  UNA PROPUESTA PARA QUE NOS TRAIGAS TU DISPOSITIVO A NUESTRO LOCAL.</li>
			<li><span class="numero_guia">3</span>- INDICANOS TU DISPOSITIVO, SU MODELO Y UNA DESCRIPCIÓN DEL PROBLEMA.</li>
		</ul>
	</section>
	<section>
		<h1>PRODUCTOS DESTACADOS</h1>
		<p class="texto_seccion">Productos mas vendidos</p>
		<div class="container-fluid">
			<div class="row">
				<div class="producto_destacado">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<img src="http://lorempixel.com/g/400/200/" alt="Prueba"/>
					</div>
				</div>
				<div class="producto_destacado">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<img src="http://lorempixel.com/g/400/200/" alt="Prueba"/>
					</div>
				</div>
				<div class="producto_destacado">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<img src="http://lorempixel.com/g/400/200/" alt="Prueba"/>
					</div>
				</div>
				<div class="producto_destacado">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<img src="http://lorempixel.com/g/400/200/" alt="Prueba"/>
					</div>
				</div>
			</div>
		</div>
	</section>
	<h1>DONDE ESTAMOS</h1>
	<p class="texto_seccion">Ven a visitarnos a nuestro local.</p>
	<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13114.504963156834!2d-58.617561650000006!3d-34.7398144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1547404884949" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
@stop