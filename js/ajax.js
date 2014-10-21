$("#form_buscar").submit(function(){

	$.ajax({
		url	: "index.php",
		type:"post",
		data	: $("#form_buscar").serialize(),
		success : function(data){
			$("#resultado_busqueda").html(data);
		}

	});
		
});