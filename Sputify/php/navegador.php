<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="iso-8559-1">
	<title>Browse</title>
	<link rel="icon"  href="../img/logo.ico"> 
	<link rel="stylesheet" type="text/css" href="../css/navegador.css">
	<script type="text/javascript" src="../js/navegador.js"></script>
</head>
<body>
	<aside>
		<nav>
			<button type="button" id="buttonInicio"><h1><img src="../img/inicio.png" id="imginicio"> Sputify</h1></button>

			<button type="button" id="buttonBuscar"><h2><img src="../img/buscar.jpg" id="imgbuscar">    Buscar</h2></button>

			<button type="button" id="buttonIniciorespaldo"><h2><img src="../img/inicio2.png" id="imginicio2">    Inicio</h2></button>

			<button type="button" id="Btnbiblioteca"><h2><img src="../img/biblioteca.png" id="bibliotecaimg">    Tu Biblioteca </h2></button>


			<h2 ><br>Escuchados recientemente</h2>

			<button type="button" id="BtnEscuchadosRecientemente"><h3> EL nombre sale por consulta </br>Artista</h3></button>

			<button type="button" id="Btntop50"><h3> EL top 50 mundial </br>Playlist</h3></button>

					
		</nav>
	</aside>
	<section id="principal">
			
			<div id="subprincipal" >
					<div  id="buscar">
						buscar
					</div>
					<div id="inicio">
						inicio
					</div>
					<div id="biblioteca">
						biblioteca
					</div>
					<div id="EscuchadosRecientemente">
						escuchados recientemente
					</div>
					<div id="top50">
						top 50 global
					</div>
			</div>
	</section>

	<div id="reproductor">

		<audio src="../msc/♫Nightcore♫ For The Glory [All Good Things].mp3" id="musica" ></audio>

		<div id="controlesreproductor">
			
			
			<div id="botones" >
				<button type="button" id="anterior"><img src="../img/anterior.jpg" id="imagenreproductor"></button>
				<button type="button" id="reproducir"><img src="../img/play.jpg" id="imagenplay"></button>
				<button type="button" id="siguiente"><img src="../img/siguiente.jpg" id="imagenreproductor"></button>
			</div>

				
		</div>	
			<div id="barra">
				<div id="progreso">

				</div>
			
			</div>

		</div>
			
	

</body>
</html>