//Ajax de la busqueda del catalogo
	$(document).ready(function(){

			$("#form_buscar").submit(function(){
				$.ajax({
					url	: "index.php?action=buscar",
					type:"post",
					data	: $("#form_buscar").serialize(),
					success : function(data){
						$("#resultado_busqueda").html(data);

					}

				});
				return false;	
			});
		}
	);

	function clickComprar(idProducto){
		$.ajax({
			url  : "index.php",		//URL a la que le pegamos
			type : "post",			//metodo que usamos para enviar
			data : {				// data = objeto tipo JSON (CLAVE : VALOR)
					action: "agregarProductoCarrito", //action ->
					idProducto:idProducto				
					},

			success: function(data){ 	// que hace si el envio del JSON fue exitoso
			}
		});
	}

//