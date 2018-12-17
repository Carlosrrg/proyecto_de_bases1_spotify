<?php
if(!isset($_POST['inputBuscador'])) exit('No se recibio valor');


include_once('../class/conexion_copy.php');

function inputBuscador(){

	 		$conexion = new Conexion();
            $conexion->establecerConexion();
           $busqueda=$_POST['inputBuscador'];



           	echo "<div id='divResultadosPrincipalesBusqueda'> 
           	";
           							 $CancionesFavoritas=$conexion->ejecutarInstruccion(" SELECT * FROM (SELECT B.CODIGO_CANCION, B.NOMBRE_CANCION , C.NOMBRE_GRUPO_O_ARTISTA  , D.NOMBRE_ALBUM_MUSICAL, B.DURACION_CANCION, C.IMAGEN ,B.DIRECCION
																					FROM TBL_CANCIONES B
																					iNNER JOIN TBL_GRUPOS_O_ARTISTAS C
																					ON(b.codigo_grupos_o_artistas=c.codigo_grupos_o_artistas)
																					INNER JOIN tbl_albumes_musicales D
																					ON(d.codigo_album_musical=b.codigo_album_musical)
																					WHERE B.NOMBRE_CANCION like '%$busqueda%') 
																					WHERE ROWNUM <= 5 ");
									oci_execute($CancionesFavoritas);




							while ($fila = $conexion->obtenerFila($CancionesFavoritas)) {
									 
							echo "<div id=''  class='efectosCanciones' >
									
									 <button type='button'  id=' $fila[DIRECCION]'  onClick='reprodusir(this.id); play();' class='play'> <img src='../img/play_arrow.png' id='imgPlayArrow'></button>
									 <h2 style='display: inline-block; '>$fila[NOMBRE_CANCION]</h2>
									 <a href=''  style'display: inline-block;'> $fila[NOMBRE_GRUPO_O_ARTISTA]</a>
									 <a href='' style='display: inline-block; '>$fila[NOMBRE_ALBUM_MUSICAL]</a>
									 <h3 style='float: right;'> $fila[DURACION_CANCION]</h3>


										</div>	";
								

										}
										
			echo "</div>";



					echo "<div id='divArtistasBusqueda' style='width: 100%; clear: both;'> 
					<h2 style='text-align: center; padding-top: 50px; font-size: 50px;'>Artistas</h2>";

					 $CancionesFavoritass=$conexion->ejecutarInstruccion(" SELECT * FROM (SELECT  A.NOMBRE_GRUPO_O_ARTISTA, A.IMAGEN
																						FROM TBL_GRUPOS_O_ARTISTAS A
																						WHERE A.NOMBRE_GRUPO_O_ARTISTA like '%$busqueda%') 
																						WHERE ROWNUM <= 10	 ");
									oci_execute($CancionesFavoritass);




							while ($fila = $conexion->obtenerFila($CancionesFavoritass)) {
									 
							echo "<figure id=''  class='efectosArtistas' style='background-image: url($fila[IMAGEN]);  	background-size: cover;'>
									
																													
											<img src='../img/darplayimagen.jpg' id='ArtistaImagen'>

											<figcaption style='color: white; padding-top: -10px; text-align: center; bottom: 0;'>$fila[NOMBRE_GRUPO_O_ARTISTA]</figcaption>
											
									</figure>	";
								

										}






			echo "</div>";



			echo "<div id='divAlbumesBusqueda' style='width: 100%; clear: both;'> 
			<h2 style='text-align: center; padding-top: 50px; font-size: 50px;'>Albumes</h2>";

								 $CancionesFavoritass=$conexion->ejecutarInstruccion(" SELECT * FROM (SELECT  A.NOMBRE_ALBUM_MUSICAL, A.IMAGEN
																						FROM TBL_ALBUMES_MUSICALES A
																						
																						WHERE A.NOMBRE_ALBUM_MUSICAL like '%$busqueda%') 
																					WHERE ROWNUM <= 5 ");
									oci_execute($CancionesFavoritass);

									while ($fila = $conexion->obtenerFila($CancionesFavoritass)) {
										
									echo"	<figure id=''  class='efectosAlbumes' style='background-image: url($fila[IMAGEN]); background-size: cover;'>
											<img src='../img/darplayimagen.jpg' id='ArtistaImagen'>

											<figcaption style='color: white; padding-top: -10px; text-align: center; bottom: 0;'>$fila[NOMBRE_ALBUM_MUSICAL]</figcaption>
											
										</figure>	


									";}

			echo "</div>";



			echo "<div id='divPlaylistBusqueda' style='width: 100%; clear: both;'> 
			<h2 style='text-align: center; padding-top: 50px; font-size: 50px;'>Playlist</h2>";


				 $CancionesFavoritass=$conexion->ejecutarInstruccion(" SELECT * FROM (SELECT  A.NOMBRE_PLAYLIST, A.CODIGO_PLAYLIST
																						FROM TBL_PLAYLIST A
																						
																						WHERE A.NOMBRE_PLAYLIST like '%$busqueda%') 
																					WHERE ROWNUM <= 5 ");
									oci_execute($CancionesFavoritass);

									while ($fila = $conexion->obtenerFila($CancionesFavoritass)) {
										
									echo"	<figure id=''  class='efectosAlbumes' style='background-image: url(../img/playlist.jpg); background-size: cover;'>
											<img src='../img/darplayimagen.jpg' id='ArtistaImagen'>

											<figcaption style='color: white; padding-top: -10px; text-align: center; bottom: 0;'>$fila[NOMBRE_PLAYLIST]</figcaption>
											
										</figure>	


									";}





			echo "</div>";
}

inputBuscador();
  ?>