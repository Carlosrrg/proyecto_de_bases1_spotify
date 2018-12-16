<?php
	include_once("../class/conexion_copy.php");

	session_start();

	$conexion = new Conexion();
	$conexion->establecerConexion();

	$codigo_usuario = $_SESSION['codigo_usuario'];
	$contrasena_actual = $_POST["txt-contrasena-actual"];
	$contrasena_nueva1 = $_POST["txt-contrasena-nueva1"];
	$contrasena_nueva2 = $_POST["txt-contrasena-nueva2"];
	$verificacion = 0;
	
	$resultado_usuarios = $conexion->ejecutarInstruccion("	SELECT 	CONTRASENA
															FROM TBL_USUARIOS
															WHERE CODIGO_USUARIO = '$codigo_usuario'");
	oci_execute($resultado_usuarios);
	while ($fila = $conexion->obtenerFila($resultado_usuarios)) {
		 	if ($contrasena_actual == $fila["CONTRASENA"]) {
		 		$verificacion = 1;
		 	}
	} 
	
	if ($verificacion == 0) {
		header("Location: ../cambiar_contrasena.php?id=incorrecto");
	}
	else{
		if ($contrasena_nueva1 == $contrasena_nueva2) {
			$resultado_usuarios = $conexion->ejecutarInstruccion("	UPDATE TBL_USUARIOS
																	SET CONTRASENA = '$contrasena_nueva1'
																	WHERE CODIGO_USUARIO = '$codigo_usuario'");
			oci_execute($resultado_usuarios);
			$cantidad = $conexion->cantidadRegistros($resultado_usuarios);
			if ($cantidad == " ") {
			}
			else{
				$resultado_usuarios = $conexion->ejecutarInstruccion("COMMIT");
				oci_execute($resultado_usuarios);
			}
			header("Location: ../cambiar_contrasena.php?id=correcto");
		}
		else{
			header("Location: ../cambiar_contrasena.php?id=incorrecto");
		}
	}

	
	//echo "<br>";
	$conexion->cerrarConexion();
?>