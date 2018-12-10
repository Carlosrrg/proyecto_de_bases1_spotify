<?php
	include_once("../class/conexion_copy.php");

	$conexion = new Conexion();
	$conexion->establecerConexion();
	$email = "Correo enviado=" . $_POST["inputEmail"];
	$password = ", Password enviado=" . $_POST["inputPassword"];
	echo $email. " " .$password;
	echo "<br><br>";

	$resultado_usuarios = $conexion->ejecutarInstruccion("SELECT CODIGO_USUARIO,
									 							CODIGO_GENERO, 
									 							CODIGO_LUGAR_VIVE, 
									 							CODIGO_MARCA_TELEFONO_M, 
									 							CODIGO_PROVEEDOR_SERVICIO, 
									 							CODIGO_TIPO_USUARIO, 
									 							CODIGO_PLANES_CUENTA, 
									 							NOMBRE_COMPLETO, 
									 							FECHA_NACIMIENTO, 
									 							USUARIO_PLATAFORMA, 
									 							CORREO_ELECTRONICO, 
									 							CONTRASENA, 
									 							NUMERO_TELEFONO
																FROM TBL_USUARIOS
																ORDER BY CODIGO_USUARIO");
	oci_execute($resultado_usuarios);

	$cont = 0;
	$verificar = 0;
	$codigo_usuario;
	while ($fila = $conexion->obtenerFila($resultado_usuarios)) {
		$cont++;
		echo $fila["CODIGO_USUARIO"] . "  correo = " . $fila["CORREO_ELECTRONICO"] . "   " . "contrasena = " . $fila["CONTRASENA"] . "<br>";

	 	if ($fila["CORREO_ELECTRONICO"] == $_POST["inputEmail"] && $fila["CONTRASENA"] == $_POST["inputPassword"]) {
	 		echo "Usuario encontrado";
	 		$codigo_usuario = $fila["CODIGO_USUARIO"];
	 		echo " con codigo de usuarios igual a: " . $codigo_usuario;
	 		$verificar = 1;
	 		exit;
	 	}
	 } 
	 if ($verificar == 0) {
	 	echo "<br>no se encontro ningun usuario con ese correo o contrasena<br>";
	 }


	echo "<br>";
	$conexion->cerrarConexion();
?>