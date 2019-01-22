@extends("layouts.base")

@section("cuerpo")
<div id="cuerpo">
	<section>	
		<h1>PRODUCTOS</h1>
		<p class="texto_seccion">Nuestros productos mas vendidos este el último mes</p>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div id="menu_categorias">
						<h2>CATEGORIAS</h2>
						<ul>
							<li><a href="#">Accesorios</a></li>
							<li><a href="#">Repuestos</a></li>
							<li><a href="#">Mouses</a></li>
							<li><a href="#">Teclados</a></li>
							<li><a href="#">Camaras</a></li>
							<li><a href="#">Routers</a></li>
							<li><a href="#">Cargadores</a></li>
							<li><a href="#">Ver mas</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<div id="galeria">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="producto">
									<div class="nombre_producto">
										Auriculares
									</div>
									<div class="precio">$400</div>
									<img src="{{ asset('img/producto.png') }}" alt="Clinica Cell"/>		
									<a class="btn_comprar">COMPRAR</a>

								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="producto">
									<div class="nombre_producto">										
										Auriculares
									</div>
									<div class="precio">$400</div>
									<img src="{{ asset('img/producto.png') }}" alt="Clinica Cell"/>
									<a class="btn_comprar">COMPRAR</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="producto">
									<div class="nombre_producto">										
										Auriculares
									</div>
									<div class="precio">$400</div>
									<img src="{{ asset('img/producto.png') }}" alt="Clinica Cell"/>
									<a class="btn_comprar">COMPRAR</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="producto">
									<div class="nombre_producto">										
										Auriculares
									</div>
									<div class="precio">$400</div>
									<img src="{{ asset('img/producto.png') }}" alt="Clinica Cell"/>
									<a class="btn_comprar">COMPRAR</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="producto">
									<div class="nombre_producto">
										Auriculares
									</div>
									<img src="{{ asset('img/producto.png') }}" alt="Clinica Cell"/>
									<a class="btn_comprar">COMPRAR</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="producto">
									<div class="nombre_producto">
										Auriculares
									</div>
									<img src="{{ asset('img/producto.png') }}" alt="Clinica Cell"/>
									<a class="btn_comprar">COMPRAR</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="producto">
									<div class="nombre_producto">
										Auriculares
									</div>
									<img src="{{ asset('img/producto.png') }}" alt="Clinica Cell"/>
									<a class="btn_comprar">COMPRAR</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="producto">
									<div class="nombre_producto">
										Auriculares
									</div>
									<img src="{{ asset('img/producto.png') }}" alt="Clinica Cell"/>
									<a class="btn_comprar">COMPRAR</a>
								</div>
							</div>
						</div>
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