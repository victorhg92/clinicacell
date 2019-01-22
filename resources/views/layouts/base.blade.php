<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}"/>
	<meta charset="utf-8"/>	
	<title>Clinica Cell</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"/>
</head>
<body>
	<!--<div id="capa_opaca"></div>-->
	<header>
		<form id="login" action="#" method="post">
			<h1>LOGIN</h1>
			<input type="text" name="email_login" id="email_login" class="control" placeholder="nombreusuario@hotmail.com"/>
			<input type="text" name="clave" id="clave" class="control" placeholder="*************"/>
			<input id="btn_login" type="submit" value="INGRESAR"/>
		</form>
		<form id="registro" action="#" method="post">
			<h1>REGISTRO</h1>
			<input type="text" name="Nombre" id="Nombre" class="control" placeholder="Nombre"/>
			<input type="text" name="apellido" id="apellido" class="control" placeholder="Apellido"/>
			<input type="text" name="email" id="email" class="control" placeholder="E-mail"/>
			<p>La contraseña debe mayor a 10 caracteres.</p>
			<input type="password" name="clave" id="clave" class="control" placeholder="*************"/>
			<p>Introduzca nuevamente su contraseña.</p>
			<input type="password" name="clave_repeticion" id="clave_repeticion" class="control" placeholder="*************"/>
			<input id="btn_login" type="submit" value="INGRESAR"/>
		</form>

		<div id="barra_superior" class="container">			
			<div id="logo">
				<img src="{{ asset('img/logo_responsive.png') }}" alt="Clinica Cell"/>
			</div>		
			<div id="btn_menu_responsive">
				<a href="#"><i class="fa fa-bars"></i></a>
			</div>
			<div id="menu_responsive">
				<ul>					
					<li><a href="{{ route('inicio') }}">INICIO</a></li>
					<li><a href="{{ route('productos') }}">PRODUCTOS</a></li>
					<li><a href="{{ route('reparaciones')}}">REPARACIONES</a></li>
					<li><a href="{{ route('contacto') }}">CONTACTO</a></li>

					<li><a href="#" id="enlace_login" class="color_secundario">LOGIN</a></li>
					<li><a href="#" id="enlace_registro" class="color_secundario">REGISTRAR</a></li>
				</ul>				
			</div>
			<div id="enlaces">
				<a>LOGIN</a>
				<a>REGISTRARSE</a>
			</div>
		</div>
		<nav id="menu_principal">
			<ul>
				<li><a href="#">INICIO</a></li>
				<li><a href="#">PRODUCTOS</a></li>
				<li><a href="#">REPARACIONES</a></li>
				<li><a href="#">CONTACTO</a></li>
			</ul>
		</nav>
	</header>
	@yield("cuerpo")
	<footer>		
		Todos los derechos a reservados<br/>
		Clinica cell 2018
	</footer>
</body>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="js/main.js"></script>
</html>