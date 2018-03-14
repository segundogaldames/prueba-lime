<div class="row justify-content-md-center">
	<div class="col-md-6">
		<h2>Auditar</h2>
		<form action="" method="post">
			<div class="form-group">
				<label>Estado de la auditoria</label>
				<select name="estado" class="form-control">
					<option value="">Seleccione...</option>
					<option value="1">Auditada</option>
					<option value="2">Pendiente</option>
				</select>
			</div>
			<div class="form-group">
				<input type="hidden" name="enviar" value="{$enviar}">
				<input type="submit" value="Guardar" class="btn btn-success">
				<a href="{$_layoutParams.root}index" class="btn btn-link">Volver</a>
			</div>
			
		</form>
	</div>
</div>

<div class="row justify-content-md-center">
	<div class="col-md-8">
		{if isset($encuesta) && count($encuesta)}
			<iframe src="{$encuesta.link}" marginwidth="0" marginheight="0" name="ventana_iframe" scrolling="no" border="0" 
		frameborder="0" width="750" height="4800"></iframe>							
		{/if}
	</div>
</div>
