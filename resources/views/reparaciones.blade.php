@extends("layouts.base")

@section("cuerpo")
	<h1>REPARACIONES</h1>	
	<p class="texto_seccion">Realiza un diagnostico acerca de tu dispositivo averiado.</p>	
	<form action="#" method="post">
		<div class="form-row">
			<div class="form-group col-md-6 col-lg-6">
				<p>Indica el tipo de dispositivo</p>
				<select name="dispositivo" id="dispositivo" class="control" placeholder="Dispositivo">
					<option value="1">PC</option>
					<option value="2">Celúlar</option>			
				</select>
			</div>
			<div class="form-group col-md-6 col-lg-6">
				<p>Indica el modelo del dispositivo.</p>
				<input type="text" name="modelo" id="modelo" class="control" placeholder="Modelo"/>
			</div>
		</div>
		<div class="form-row">			
			<div class="form-group col-md-12 col-lg-12">
				<p>Descríbenos el problema de tu dispositivo y envíanos una imagen para ayudarnos a solucionar tu problema.</p>
				<textarea rows="4" name="problema" id="problema" class="control" placeholder="Problema"></textarea>
			</div>
		</div>		
		<input id="btn_reparaciones" type="submit" value="ENVIAR"/>
	</form>
@stop