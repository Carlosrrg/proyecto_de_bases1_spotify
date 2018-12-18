<?php
	include_once("../class/conexion_copy.php");

	session_start();

	$conexion = new Conexion();
	$conexion->establecerConexion();
	$verificar = 0;
	$iguales = 0;
	$codigo_usuario = $_SESSION['codigo_usuario'];
	ini_set('date.timezone', 'America/Tegucigalpa');
	$time_fecha = date('d-m-Y', time());

	if (isset($codigo_usuario)) {
		$resultado_usuario = $conexion->ejecutarInstruccion("SELECT  A.CODIGO_USUARIO,
	                                                                 B.CODIGO_LUGAR
	                                                                 FROM TBL_USUARIOS A
	                                                                 LEFT JOIN TBL_LUGARES B
	                                                                 ON (A.CODIGO_LUGAR_VIVE = B.CODIGO_LUGAR)
	                                                                 WHERE CODIGO_USUARIO = '$codigo_usuario'");
        oci_execute($resultado_usuario);
        while ($fila = $conexion->obtenerFila($resultado_usuario)) {
        	$codigo_lugar = $fila["CODIGO_LUGAR"];
        }
	}
	
	if (isset($_POST["txt-codigo"])) {
		if (strlen($_POST["txt-codigo"]) == 12) {
			$codigo_canjear = $_POST["txt-codigo"];
			$resultado_recibidos = $conexion->ejecutarInstruccion(" SELECT  B.CODIGO_USUARIO, 
                                                                           B.CODIGO_A_CAJEAR
                                                                           FROM TBL_USUARIOS A
                                                                           INNER JOIN TBL_TARJETA_REGALO B
                                                                           ON (A.CODIGO_USUARIO = B.CODIGO_USUARIO)
                                                                           INNER JOIN TBL_LUGARES C
                                                                           ON (B.CODIGO_LUGAR = C.CODIGO_LUGAR)
                                                                           WHERE B.CODIGO_USUARIO = '$codigo_usuario'");
            oci_execute($resultado_recibidos);
            while ($fila = $conexion->obtenerFila($resultado_recibidos)) {
             	if ($codigo_canjear == $fila["CODIGO_A_CAJEAR"]) {
             		$iguales = 1;
             	}
            }
            if ($iguales == 1) {
            	header("Location: ../canjear.php?id=incorrecto");
            }
            else{
	            $arreglo_codigos = array();
				$arreglo_codigos[] = 123456789123;
				$arreglo_codigos[] = 124578965478;
				$arreglo_codigos[] = 987456321478;
				$arreglo_codigos[] = 568974123652;
				$arreglo_codigos[] = 456987569852;
				$arreglo_codigos[] = 123654789654;
				$arreglo_codigos[] = 123456989123;
				$arreglo_codigos[] = 254125874587;
				$arreglo_codigos[] = 654123578951;
				$arreglo_codigos[] = 456987452136;
				$arreglo_codigos[] = 254789654125;
				$arreglo_codigos[] = 951235478952;
				$arreglo_codigos[] = 845632145698;
				$arreglo_codigos[] = 753214569854;
				$arreglo_codigos[] = 654123258745;
				$arreglo_codigos[] = 357412589654;
				$arreglo_codigos[] = 521452365895;
				$arreglo_codigos[] = 521459766533;
				$arreglo_codigos[] = 555412566654;
				$arreglo_codigos[] = 245896597985;
				for ($i=0; $i < count($arreglo_codigos); $i++) { 
					if ($codigo_canjear == $arreglo_codigos[$i]) {
						$verificar = 1;
					}
				}
            }	
		}
		else{
			header("Location: ../canjear.php?id=incorrecto");
		}
	}
	
	
	if ($verificar == 1) {
		$resultado_canjear = $conexion->ejecutarInstruccion("	DECLARE
    																V_CODIGO_TARJETA_REGALO INTEGER;
																BEGIN
    																P_AGREGAR_TARJETA ($codigo_lugar, $codigo_usuario, TO_DATE('$time_fecha', 'DD-MM-YYYY'), $codigo_canjear, V_CODIGO_TARJETA_REGALO);
    																DBMS_OUTPUT.PUT_LINE('CODIGO_TARJETA_AGREGADA: '||V_CODIGO_TARJETA_REGALO);
																END;");
		oci_execute($resultado_canjear);
		header("Location: ../canjear.php?id=correcto");
	}


	//echo "<br>";
	$conexion->cerrarConexion();
?>