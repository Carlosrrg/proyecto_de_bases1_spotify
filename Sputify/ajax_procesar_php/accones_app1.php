<?php
	include_once("../class/conexion_copy.php");

	session_start();

	$conexion = new Conexion();
	$conexion->establecerConexion();

	$codigo_usuario = $_SESSION['codigo_usuario'];
	$enviar="";
	
	if (isset($_POST["app1"])) {
		$enviar = $_POST["app1"];
	}
	if (isset($_POST["app2"])) {
		$enviar = $_POST["app2"];
	}
	if (isset($_POST["app3"])) {
		$enviar = $_POST["app3"];
	}
	if (isset($_POST["app4"])) {
		$enviar = $_POST["app4"];
	}
	if (isset($_POST["app5"])) {
		$enviar = $_POST["app5"];
	}
	

	if (isset($enviar)) {
		$resultado_usuarios = $conexion->ejecutarInstruccion("	DELETE FROM TBL_VINCULO_APLICACIONES
																WHERE CODIGO_USUARIO = '$codigo_usuario'
																AND CODIGO_VINCULO_APLICACIONES = '$enviar'");
		oci_execute($resultado_usuarios);
		header("Location: ../apps.php?id=correcto");
	}

	
	//echo "<br>";
	$conexion->cerrarConexion();
?>