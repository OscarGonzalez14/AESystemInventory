$(document).ready(function(){
	$("#cbx_categoria").change(function () {



		$("#cbx_categoria option:selected").each(function () {
			id_estado = $(this).val();
			$.post("Helpers/getProductos.php", { id_estado: id_estado }, function(data){
				$("#cbx_producto").html(data);
			});
		});
	})
});
