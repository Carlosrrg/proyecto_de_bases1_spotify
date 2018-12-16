$(document).ready(function(){
	$("#btn_login").click(function(){
		var parametros = "inputEmail=" +$("#inputEmail").val() + 
						"&inputPassword="+$("#inputPassword").val();
		//alert(parametros);
		$.ajax({
				url:"ajax_procesar_php/acciones_login.php",
				method:"POST",
				data:parametros,
				success:function(respuesta){
					$("#prueba").html(respuesta);
					if(respuesta == 0){
						alert("Lo sentimos, correo o contrasena incorrectos...");
						window.location="iniciar_seccion.html";
					}
					else{
						//alert("el codigo_usuario es= " + respuesta);
						window.location="vista_general_cuenta.php";
					}
				}
		});
	});	
});