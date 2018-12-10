$(document).ready(function(){
	$("#btn_login").click(function(){
		var parametros = "inputEmail=" +$("#inputEmail").val() + 
						"&inputPassword="+$("#inputPassword").val();
		//alert(parametros);
		$.ajax({
				url:"ajax_procesar_php/acciones_login.php",
				method: "POST",
				data: parametros,
				//dataType: "json",
				success:function(respuesta){
					$("#prueba").html(respuesta);
				}
		});
	});	
});