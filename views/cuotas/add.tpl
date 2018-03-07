<div class="col-md-6">
	<h2>Agregar Cuota</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Desde</label>
			<input type="date" name="desde" class="form-control">
		</div>
		<div class="form-group">
			<label>Hasta</label>
			<input type="date" name="hasta" class="form-control">
		</div>
		<div class="form-group">
			<label>Valor</label>
			<input type="number" name="valor" class="form-control">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar" class="btn btn-success">
		</div>
	</form>
</div>