<?php
	include_once("../class/conexion_copy.php");

	session_start();

	$conexion = new Conexion();
	$conexion->establecerConexion();
	$email = $_POST["inputEmail"];
	$password = $_POST["inputPassword"];
	//echo $email. " " .$password;
	//echo "<br><br>";


	if ($email == "" ||  $password == "") {
		//echo "Ingrese los datos solicitados para iniciar seccion";
	}
	else{
		$resultado_usuarios = $conexion->ejecutarInstruccion("SELECT 	CODIGO_USUARIO,
											 							USUARIO_PLATAFORMA,
											 							NOMBRE_COMPLETO, 
											 							CORREO_ELECTRONICO, 
											 							CONTRASENA
																		FROM TBL_USUARIOS
																		WHERE CORREO_ELECTRONICO = '$email'
																		AND CONTRASENA = '$password'
																		ORDER BY CODIGO_USUARIO");
		oci_execute($resultado_usuarios);
		while ($fila = $conexion->obtenerFila($resultado_usuarios)) {
		 	if ($fila["CORREO_ELECTRONICO"] == $_POST["inputEmail"] && $fila["CONTRASENA"] == $_POST["inputPassword"]) {
		 		//echo $fila["CODIGO_USUARIO"] . ", nombre= ". $fila["NOMBRE_COMPLETO"] . ",    correo = " . $fila["CORREO_ELECTRONICO"] . "   " . "contrasena = " . $fila["CONTRASENA"] . "<br>";
		 		$codigo_usuario = $fila["CODIGO_USUARIO"];
		 	}
		} 

		$cantidad = $conexion->cantidadRegistros($resultado_usuarios);
		if ($cantidad == 0) {
			//echo "correo o contrasena incorrectos";
		}
		else{
			//echo "Inicio de seccion exitosa...";
		}
	}

	//valida session
	if (!isset($codigo_usuario)) {
		//echo "<br>variable codigo_usuario sin valor";
	}
	else{
		echo $_SESSION['codigo_usuario'] = $codigo_usuario;
		//echo "<br>variable codigo_usuario con un valor= " . $_SESSION['codigo_usuario'];
	}
	



	//echo "<br>";
	$conexion->cerrarConexion();
?>