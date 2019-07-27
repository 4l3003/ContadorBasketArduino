$(obtener_registros());

function obtener_registros(nota,desde,hasta)
{
	$.ajax({
		url : 'consulta.php',
		type : 'POST',
		dataType : 'html',
		data : { nota: nota,
		desde: desde,
		hasta: hasta },
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	})
}

$(document).on('keyup', '#busqueda', function()
{
	var valorBusqueda=$(this).val();
		var valordesde=$('#desde').val();
			var valorhasta=$('#hasta').val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda,valordesde,valorhasta);
	}
	else
		{
			obtener_registros();
		}
});
