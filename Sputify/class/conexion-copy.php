<?php 
	// crear conexion con oracle
	class Conexion{ 
		
		private $nombre_base = "DB_SPOTIFY";
		private $contrasena = "oracle";
		private $host = "localhost/xe";
		private $conexion;

		public function __construct(){
			$this->establecerConexion();
		}	

		//guarda en variable de conexion
		public function establecerConexion(){
			$this->$conexion = oci_connect($nombre_base, $contrasena, $host);
			if (!$conexion) {    
				  $m = oci_error();    
				  echo $m['message'], "n";    
				  exit; 
			} else {    
				  echo "Conexión con éxito a Oracle!". '<br>'; 
				  echo "Conexion hecha a la base de datos de SPOTIFY";
			} 
		}

		//cerrar conexion de la BD
		public function cerrarConexion(){
			oci_close($this->$conexion);
		}

		//recibir consulta de SQL
		public function ejecutarInstruccion($sql){
			
		}

		//retornar resultado de arreglo
		public function obtenerFila($resultado){
			
		}


 	}
?>
