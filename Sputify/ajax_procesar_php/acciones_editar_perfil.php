<?php
	include_once("../class/conexion_copy.php");

	session_start();

	$conexion = new Conexion();
	$conexion->establecerConexion();

	$codigo_usuario = $_SESSION['codigo_usuario'];
	$correo = $_POST["txt-email"];
	$genero = $_POST["slc-genero"]+1;
	$fecha_dia = $_POST["slc-dia"];
	$fecha_mes = $_POST["slc-mes"];
	$fecha_anio = $_POST["slc-anio"];
	$numero_telefono = $_POST["txt-profile_mobile_number"];
	$telefono_movil = $_POST["slc-mobile"]+1;
	$proveedor = $_POST["slc-provider"]+1;
	


	if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
		$resultado_usuarios = $conexion->ejecutarInstruccion("	UPDATE TBL_USUARIOS
																	SET CORREO_ELECTRONICO = '$correo',
																		CODIGO_GENERO = '$genero',
																	    FECHA_NACIMIENTO = TO_DATE('$fecha_dia/$fecha_mes/$fecha_anio', 'DD/MM/YYYY'),
																	    NUMERO_TELEFONO = $numero_telefono,
																	    CODIGO_MARCA_TELEFONO_M = $telefono_movil,
																	    CODIGO_PROVEEDOR_SERVICIO = $proveedor
																	WHERE CODIGO_USUARIO = '$codigo_usuario'");
		oci_execute($resultado_usuarios);
		$cantidad = $conexion->cantidadRegistros($resultado_usuarios);
		if ($cantidad == " ") {
		}
		else{
			$resultado_usuarios = $conexion->ejecutarInstruccion("COMMIT");
			oci_execute($resultado_usuarios);
		}

		header("Location: ../editar_perfil.php?id=correcto");
	}
	else{
		header("Location: ../editar_perfil.php?id=incorrecto");
	}

	
	//echo "<br>";
	$conexion->cerrarConexion();
?>