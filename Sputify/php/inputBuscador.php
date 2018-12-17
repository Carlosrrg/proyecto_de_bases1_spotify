<?php
if(!isset($_POST['inputBuscador'])) exit('No se recibio valor');


include_once('../class/conexion_copy.php');

function inputBuscador(){

	 		$conexion = new Conexion();
            $conexion->establecerConexion();
           $busqueda=$_POST['inputBuscador'];



           	echo "<div id='divResultadosPrincipalesBusqueda'> 
           	";
           							 $CancionesFavoritas=$conexion->ejecutarInstruccion(" SELECT * FROM (SELECT B.CODIGO_CANCION, B.NOMBRE_CANCION , C.NOMBRE_GRUPO_O_ARTISTA  , D.NOMBRE_ALBUM_MUSICAL, B.DURACION_CANCION, C.IMAGEN
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
									
									 <button type='button'  id='' class='play'> <img src='../img/play_arrow.png' id='imgPlayArrow'></button>
									 <h2 style='display: inline-block; '>$fila[NOMBRE_CANCION]</h2>
									 <a href=''  style'display: inline-block;'> $fila[NOMBRE_GRUPO_O_ARTISTA]</a>
									 <a href='' style='display: inline-block; '>$fila[NOMBRE_ALBUM_MUSICAL]</a>
									 <h3 style='float: right;'> $fila[DURACION_CANCION]</h3>


										</div>	";
								

										}
										
			echo "</div>";



					echo "<div id='divArtistasBusqueda'> 
					<h2 style='text-align: center; padding-top: 50px; font-size: 50px;'>Artistas</h2>";

					 $CancionesFavoritass=$conexion->ejecutarInstruccion(" SELECT * FROM (SELECT DISTINCT A.NOMBRE_GRUPO_O_ARTISTA, A.IMAGEN
																						FROM TBL_GRUPOS_O_ARTISTAS A
																						INNER JOIN TBL_CANCIONES B
																						ON(A.CODIGO_GRUPOS_O_ARTISTAS=B.CODIGO_GRUPOS_O_ARTISTAS)
																						INNER JOIN TBL_CANCIONES_FAVORITAS C
																						ON(C.CODIGO_CANCION=B.CODIGO_CANCION)
																					WHERE A.NOMBRE_GRUPO_O_ARTISTA like '%$busqueda%') 
																					WHERE ROWNUM <= 5 ");
									oci_execute($CancionesFavoritass);




							while ($fila = $conexion->obtenerFila($CancionesFavoritass)) {
									 
							echo "<figure id=''  class='efectosArtistas' style='background-image: url($fila[IMAGEN]);  	background-size: cover;'>
									
																													
											<img src='../img/darplayimagen.jpg' id='ArtistaImagen'>

											<figcaption style='color: white; padding-top: -10px; text-align: center; bottom: 0;'>$fila[NOMBRE_GRUPO_O_ARTISTA]</figcaption>
											
									</figure>	";
								

										}






			echo "</div>";



			echo "<div id='divAlbumesBusqueda'> 
			<h2 style='text-align: center; padding-top: 50px; font-size: 50px;'>Albumes</h2>";






			echo "</div>";
}

inputBuscador();
  ?>