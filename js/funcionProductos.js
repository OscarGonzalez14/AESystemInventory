$(obtener_registros());

function obtener_productos(getProductos)
{
	$.ajax({
		url : 'Helpers/buscaProductos.php',
		type : 'POST',
		dataType : 'html',
		data : { getProductos: getProductos },
		})

	.done(function(resultado){
		$("#tabla_productos").html(resultado);
	})
}

$(document).on('keyup', '#producto', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_productos(valorBusqueda);
	}
	else
		{
			obtener_productos();
		}
});
