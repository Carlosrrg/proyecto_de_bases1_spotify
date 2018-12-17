<?php
        session_start();
        if(!isset($_SESSION['codigo_usuario'])){
		header("Location: ../index.html");
        }
        else{
        	 include_once("../class/conexion_copy.php");
        	 $codigo_usuario = $_SESSION['codigo_usuario'];
                                                 
              $conexion = new Conexion();
              $conexion->establecerConexion();

    
    ?>
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
									
											<button type="button"  id="" class="play"> <img src="../img/play_arrow.png" id="imgPlayArrow"></button>
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
								
										<figure id=""  class="efectosArtistas" style="background-image: url(../img/nightcore.jpg); background-size: cover;">
									
																													
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
								
										<figure id=""  class="efectosAlbumes" style="background-image: url(../img/nightcore.jpg); background-size: cover;">
									
																													
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
								
										<figure id=""  class="efectosAlbumes" style="background-image: url(../img/nightcore.jpg); background-size: cover;">
									
																													
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
								<button type="button" id="btnSeleccionadosInicio" style="opacity: 1">Seleccionados</button> 
								<button type="button" id="btnExitosInicio">Lista de exitos</button>
								<button type="button" id="">Generos</button>
							</div>
							<div id="divSeleccionadosInicio" style="display: block ">

								<?php 
									$CancionesFavoritas=$conexion->ejecutarInstruccion("SELECT * FROM(
															SELECT  A.NOMBRE_CANCION , A.CODIGO_CANCION, B.NOMBRE_GRUPO_O_ARTISTA,c.codigo_album_musical, C.NOMBRE_ALBUM_MUSICAL, A.DURACION_CANCION
															FROM TBL_CANCIONES A
															INNER JOIN TBL_ALBUMES_MUSICALES C
															ON(C.codigo_album_musical=A.codigo_album_musical)
															INNER JOIN TBL_GRUPOS_O_ARTISTAS B
															ON(A.CODIGO_GRUPOS_O_ARTISTAS=B.CODIGO_GRUPOS_O_ARTISTAS)
															ORDER BY DBMS_RANDOM.VALUE)
															WHERE ROWNUM<21     ");
									oci_execute($CancionesFavoritas);
									while ($fila = $conexion->obtenerFila($CancionesFavoritas)) {
									 ?>
									<div id=""  class="efectosCanciones" >


																
							<button type="button"  id="" class="play"> <img src="../img/play_arrow.png" id="imgPlayArrow"></button>
							<h2 style="display: inline-block; vertical-align: text-bottom;"><?php  echo $fila["NOMBRE_CANCION"]?></h2>
							<a href="" style=" position: relative; left: -4%; "><?php  echo $fila["NOMBRE_GRUPO_O_ARTISTA"]?></a>
							<a href="" style=" position: relative; left: -4%;"><?php  echo $fila["NOMBRE_ALBUM_MUSICAL"]?></a>
							<h3 style="float: right;"><?php  echo $fila["DURACION_CANCION"]?></h3>


									</div>	
									<?php  

										}
									?>	


							</div>
							<div id="divExitosInicio" style="display: none ">

								<?php 
									$CancionesFavoritas=$conexion->ejecutarInstruccion("SELECT * FROM(
															SELECT  A.NOMBRE_CANCION , A.CODIGO_CANCION, B.NOMBRE_GRUPO_O_ARTISTA,c.codigo_album_musical, C.NOMBRE_ALBUM_MUSICAL, A.DURACION_CANCION, A.CANTIDAD_REPRODUCIDO
															FROM TBL_CANCIONES A
															INNER JOIN TBL_ALBUMES_MUSICALES C
															ON(C.codigo_album_musical=A.codigo_album_musical)
															INNER JOIN TBL_GRUPOS_O_ARTISTAS B
															ON(A.CODIGO_GRUPOS_O_ARTISTAS=B.CODIGO_GRUPOS_O_ARTISTAS)
															ORDER BY A.CANTIDAD_REPRODUCIDO desc)	
															WHERE ROWNUM<21     ");
									oci_execute($CancionesFavoritas);
									while ($fila = $conexion->obtenerFila($CancionesFavoritas)) {
									 ?>
									<div id=""  class="efectosCanciones" >


																
							<button type="button"  id="" class="play"> <img src="../img/play_arrow.png" id="imgPlayArrow"></button>
							<h2 style="display: inline-block; vertical-align: text-bottom;"><?php  echo $fila["NOMBRE_CANCION"]?></h2>
							<a href="" style=" position: relative; left: -4%; "><?php  echo $fila["NOMBRE_GRUPO_O_ARTISTA"]?></a>
							<a href="" style=" position: relative; left: -4%;"><?php  echo $fila["NOMBRE_ALBUM_MUSICAL"]?></a>
							<h3 style="float: right;"><?php  echo $fila["DURACION_CANCION"]?></h3>


									</div>	
									<?php  

										}
									?>
								


							</div>




					</div>
					<div id="biblioteca">
							<div id="listaBiblioteca" >
								<button type="button" id="btnPlaylistBiblioteca" style="opacity: 1;">Playlist</button>
							
								<button type="button" id="btnFavoritasBiblioteca">Canciones favoritas</button>
								<button type="button" id="btnAlbumesBiblioteca">Albumes</button>
								<button type="button" id="btnArtistasBiblioteca">Artistas</button>
							</div>

							<div id="DivPlaylistBiblioteca">
									
									<?php 
									$BibliotecaPlaylist=$conexion->ejecutarInstruccion("SELECT  CODIGO_PLAYLIST, NOMBRE_PLAYLIST 
										                                                 FROM TBL_PLAYLIST
										                                                 WHERE CODIGO_USUARIO_CREA=$codigo_usuario ");
									oci_execute($BibliotecaPlaylist);
									while ($fila = $conexion->obtenerFila($BibliotecaPlaylist)) {
									 ?>
									<figure id="<?php  echo $fila["NOMBRE_PLAYLIST"]?>"  class="efectosAlbumes" style="background-image: url(../img/nightcore.jpg); background-size: cover; ">
									
																							
										 <img src="../img/darplayimagen.jpg" id="ArtistaImagen">

											<figcaption style="color: white; padding-top: -10px; text-align: center; bottom: 0;"><?php  echo $fila["NOMBRE_PLAYLIST"]?></figcaption>
											
									</figure>	

									<?php 
									 }
									 ?>
							</div>
							
							<div id="DivCancionesFavoritas" style="display: none;">
								
									<?php 
									$CancionesFavoritas=$conexion->ejecutarInstruccion("SELECT A.CODIGO_CANCION, B.NOMBRE_CANCION , C.NOMBRE_GRUPO_O_ARTISTA  , D.NOMBRE_ALBUM_MUSICAL, B.DURACION_CANCION
																					FROM tbl_canciones_favoritas A
																					INNER JOIN TBL_CANCIONES B
																					ON (A.CODIGO_CANCION=B.CODIGO_CANCION)
																					INNER JOIN TBL_GRUPOS_O_ARTISTAS C
																					ON(b.codigo_grupos_o_artistas=c.codigo_grupos_o_artistas)
																					INNER JOIN tbl_albumes_musicales D
																					ON(d.codigo_album_musical=b.codigo_album_musical)
																					WHERE A.codigo_usuario_dio_favorito=$codigo_usuario ");
									oci_execute($CancionesFavoritas);
									while ($fila = $conexion->obtenerFila($CancionesFavoritas)) {
									 ?>
									<div id=""  class="efectosCanciones" >


																
							<button type="button"  id="" class="play"> <img src="../img/play_arrow.png" id="imgPlayArrow"></button>
							<h2 style="display: inline-block; vertical-align: text-bottom;"><?php  echo $fila["NOMBRE_CANCION"]?></h2>
							<a href="" style=" position: relative; left: -4%; "><?php  echo $fila["NOMBRE_GRUPO_O_ARTISTA"]?></a>
							<a href="" style=" position: relative; left: -4%;"><?php  echo $fila["NOMBRE_ALBUM_MUSICAL"]?></a>
							<h3 style="float: right;"><?php  echo $fila["DURACION_CANCION"]?></h3>


									</div>	
									<?php  

										}
									?>


							</div>

							<div id="DivAlbumesBibloteca" style="display: none;">
									
										<?php 
									$AlbumesFavoritas=$conexion->ejecutarInstruccion("
																						SELECT C.NOMBRE_ALBUM_MUSICAL, C.CODIGO_ALBUM_MUSICAL
																						FROM TBL_CANCIONES_FAVORITAS A
																						INNER JOIN TBL_CANCIONES B
																						ON(A.CODIGO_CANCION=B.CODIGO_CANCION)
																						INNER JOIN TBL_ALBUMES_MUSICALES C
																						ON(B.CODIGO_ALBUM_MUSICAL=C.CODIGO_ALBUM_MUSICAL)
																						INNER JOIN TBL_USUARIOS D
																						ON(A.CODIGO_USUARIO_DIO_FAVORITO=D.CODIGO_USUARIO)
																						WHERE D.CODIGO_USUARIO=$codigo_usuario ");
									oci_execute($AlbumesFavoritas);
									while ($fila = $conexion->obtenerFila($AlbumesFavoritas)) {
									 ?>

										<figure id=""  class="efectosAlbumes" style="background-image: url(../img/nightcore.jpg); background-size: cover;">
									
																													
												<img src="../img/darplayimagen.jpg" id="ArtistaImagen">

											<figcaption style="color: white; padding-top: -10px; text-align: center; bottom: 0;"><?php  echo $fila["NOMBRE_ALBUM_MUSICAL"]?></figcaption>
											
										</figure>	
										<?php 

											}
										 ?>	

							</div>

							<div id="DivArtistasBiblioteca" style="display: none;">
								
									
									<?php 
									$ArtistasFavoritas=$conexion->ejecutarInstruccion("
																						SELECT DISTINCT A.NOMBRE_GRUPO_O_ARTISTA, A.IMAGEN
																						FROM TBL_GRUPOS_O_ARTISTAS A
																						INNER JOIN TBL_CANCIONES B
																						ON(A.CODIGO_GRUPOS_O_ARTISTAS=B.CODIGO_GRUPOS_O_ARTISTAS)
																						INNER JOIN TBL_CANCIONES_FAVORITAS C
																						ON(C.CODIGO_CANCION=B.CODIGO_CANCION)
																						WHERE C.CODIGO_USUARIO_DIO_FAVORITO=$codigo_usuario ");
									oci_execute($ArtistasFavoritas);
									while ($fila = $conexion->obtenerFila($ArtistasFavoritas)) {
									 ?>

									<figure id=""  class="efectosArtistas" style="background-image: url(<?php  echo $fila["IMAGEN"]?>);  background-size: cover;">
									
																													
											<img src="../img/darplayimagen.jpg" id="ArtistaImagen">

											<figcaption style="color: white; padding-top: -10px; text-align: center; bottom: 0;"><?php  echo $fila["NOMBRE_GRUPO_O_ARTISTA"]?></figcaption>
											
									</figure>	
									<?php 
										}
									 ?>
										

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

		<audio src="../msc/nightcore.mp3" id="musica" ></audio>

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
<?php 


}
 ?>