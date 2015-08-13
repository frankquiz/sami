<html>
	<head>
		<title>Menu Desplegable</title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:900px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:300px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>
	</head>
	<body>
		<div id="header">
			<ul class="nav">
				<li><a href="">Inicio</a></li>
				<li><a href="">Servicios</a>
					<ul>
						<li><a href="">Nuevo Servicio</a>
							<ul>
								<li><a href="">Tipo de Servicio</a>
								<ul>
								<li><a href="{{ url('/formseric') }}">Seric</a></li>
								<li><a href="{{ url('/formradiofonica') }}">Radiofonica</a></li>
								<li><a href="{{ url('/formpreciudadano') }}">Presentacion de ciudadano</a></li>
								<li><a href="{{ url('/formreferencia') }}">Referencia</a></li>
								<li><a href="{{ url('/formllamada') }}">Llamada Telefonica</a></li>
								</ul>
							</ul>
						<li><a href="{{ url('/listaserviciopendiente') }}">Serv. Pend. por Asig.</a></li>
						<li><a href="{{ url('/listaserviciopendienteporfinalizar') }}">Serv. Pend. por Finalizar</a></li>
						</li>
					</ul>
				</li>
				<li><a href="">Reportes</a>
						<ul>
							<li><a href="">Inventario</a></li>
							<li><a href="">Servicio</a></li>
						</ul>
				</li>
				<li><a href="">Inventario</a>
					<ul>
						<li><a href="">Carga de Inventario</a></li>
							<li><a href="">Descarga de Inventario</a></li>
					</ul>
				</li>

				<li><a href="">Cerrar Sesion</a></li>
			</ul>
		</div>
	</body>
</html>
