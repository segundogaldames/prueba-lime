<div class="col-md-6">
	<h2>Nueva Campaña</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre:</label>
			<input type="text" name="nombre" class="form-control" value="{$datos.nombre|default:""}" placeholder="Nombre de la campaña">
		</div>
		<div class="form-group">
			<label>Campaña ViciDial:</label>
			<input type="text" name="vici" class="form-control" value="{$datos.vici|default:""}" placeholder="Código de la camapaña en ViciDial">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}campaign" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>