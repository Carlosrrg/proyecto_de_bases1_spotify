<!DOCTYPE html>
<html id="html1">
<head lang="es">
	<meta charset="iso-8559-1">
	<title>Browse</title>
	<link rel="icon"  href="../img/logo2.ico"> 
	<link rel="stylesheet" type="text/css" href="../css/navegador.css">
	<script type="text/javascript" src="../js/navegador.js"></script>
</head>
<body>
	<aside>
		<nav>
			<button type="button" id="buttonInicio"><h1><img src="../img/inicio.png" id="imginicio"> Spotify</h1></button>

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
						<div id="divbuscador">
							<form>
							 	<input type="text"  id="inputBuscador" autofocus autocomplete="off"> 
							</form>

							<div id="listaBuscar">
								<button type="button" id="btnDivListaBuscarPrincipales">Resultados principales</button>
								<button type="button" id="btnDivListaBuscarArtistas">Artistas</button>
								<button type="button" id="btnDivListaBuscarCanciones">Canciones</button>
								<button type="button" id="btnDivListaBuscarPlaylist">Playlist</button>
								<button type="button" id="btnDivListaBuscarAlbumes">Albumes</button>
							</div>

							<div id="divContenidoBuscador">
								
								<figure id="imagenBusqueda">

																		
									<img src="../img/darplayimagen.jpg" id="reproductorImagen">

								</figure>

							
									<?php 
										for ($i=0; $i <5 ; $i++) { 
									 ?>
								
										<div id=""  class="efectosCanciones" >
									
											<button type="button"  id="play" class="play"> <img src="../img/play_arrow.png" id="imgPlayArrow"></button>
											<h2 style="display: inline-block; vertical-align: text-bottom;">Nombre de la cancion</h2>
											<a href="" style=" position: relative; left: -154px; ">Nombre del artista</a>
											<a href="" style=" position: relative; left: -154px;">nombre del album</a>
											<h3 style="float: right;">4:33</h3>


										</div>	
									<?php 
										}
								 ?>
								
								 

										<h2 style="text-align: center; padding-top: 50px; font-size: 50px;">Artistas</h2>
										
														<?php 
														for ($i=0; $i <10 ; $i++) { 
														 ?>
								
										<figure id=""  class="efectosArtistas" style="background-image: url(../img/nightcore.jpg); ">
									
																													
												<img src="../img/darplayimagen.jpg" id="ArtistaImagen">

											<figcaption style="color: white; padding-top: -10px; text-align: center; bottom: 0;">Nombre del artista</figcaption>
											
										</figure>	

														<?php 

																					}
														 ?> 








										<h2 style="text-align: center; margin-top: 550px; font-size: 50px;">Albumes</h2>		
												 

											<?php 
														for ($i=0; $i <10 ; $i++) { 
														 ?>
								
										<figure id=""  class="efectosAlbumes" style="background-image: url(../img/nightcore.jpg); ">
									
																													
												<img src="../img/darplayimagen.jpg" id="ArtistaImagen">

											<figcaption style="color: white; padding-top: -10px; text-align: center; bottom: 0;">Nombre del ALbum</figcaption>
											
										</figure>	

														<?php 

																					}
														 ?> 

										<h2 style="text-align: center; margin-top: 550px; font-size: 50px;">Playlist</h2>		
												 

											<?php 
														for ($i=0; $i <10 ; $i++) { 
														 ?>
								
										<figure id=""  class="efectosAlbumes" style="background-image: url(../img/nightcore.jpg); ">
									
																													
												<img src="../img/darplayimagen.jpg" id="ArtistaImagen">

											<figcaption style="color: white; padding-top: -10px; text-align: center; bottom: 0;">Nombre de la playlist</figcaption>
											
										</figure>	

														<?php 

																					}
														 ?> 

									




							</div>
								


						</div>
					</div>
					<div id="inicio">
							<div id="listaInicio" >
								<button type="button" id="">Seleccionados</button> 
								<button type="button" id="">Podcast</button>
								<button type="button" id="">Lista de exitos</button>
								<button type="button" id="">Generos</button>
							</div>
					</div>
					<div id="biblioteca">
							<div id="listaBiblioteca" >
								<button type="button" id="">Playlist</button>
								<button type="button" id="">Especialmente para ti</button>
								<button type="button" id="">Canciones favoritas</button>
								<button type="button" id="">Albumes</button>
								<button type="button" id="">Artistas</button>
							</div>
					</div>
					<div id="EscuchadosRecientemente">
						<div id="listaEscuchadoRecientemente" >
								<button type="button" id="">General</button>
								<button type="button" id="">Artistas relacionados</button>
								<button type="button" id="">Informacion</button>
								
							</div>
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
				<button type="button" id="anterior"><img src="../img/anterior.png" id="imagenreproductor"></button>
				<button type="button" id="reproducir"><img src="../img/play.png" id="imagenplay"></button>
				<button type="button" id="siguiente"><img src="../img/siguiente.png" id="imagenreproductor"></button>
			</div>

			

				
		</div>	
			<div id="barra">
				<div id="progreso">

				</div>
			
			</div>
			<img src="../img/sonidomedio.png" id="imagenSonido">
			<div id="volumen" >
				
				<div id="controlarVolumen">
					
				</div>

			</div>

		</div>
			
	

</body>
</html>