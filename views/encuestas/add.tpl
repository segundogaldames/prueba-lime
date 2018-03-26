<div class="col-md-6">
	<h2>Nueva Encuesta</h2>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="nombre" value="{$datos.nombre|default:""}" class="form-control" placeholder="Nombre de la encuesta">
		</div>
		<div class="form-group">
			<label>Link</label>
			<input type="url" name="link" value="{$datos.link|default:""}" class="form-control" placeholder="Link de la encuesta">
		</div>
		<div class="form-group">
			<label>Campaña</label>
			<select name="campaign" class="form-control">
				<option value="">Seleccione</option>
				{if isset($campaign) &&count($campaign)}
					{foreach from=$campaign item=c}
						<option value="{$c.id}">{$c.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label>Tipo</label>
			<select name="tipo" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Encuesta</option>
				<option value="2">Auditoria</option>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}encuestas" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>