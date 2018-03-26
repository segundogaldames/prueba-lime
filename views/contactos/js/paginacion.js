$(document).ready(function(){
	$(".pagina").click(function(){
		paginacion($(this).attr('pagina'));
	});

	$(".pagina").on('click', function(){
		paginacion($(this).attr('pagina'));
	});

	var paginacion = function(pagina){
		var pagina = 'pagina=' + pagina;

		$.post(_root_ + 'contactos/getAjax', pagina, function(data){
			$("#lista").html(' ');
			$("#lista").html(data);
		});
	}
});