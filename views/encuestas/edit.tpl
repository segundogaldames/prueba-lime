<div class="col-md-8">
	<h2>Editar Encuesta</h2>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="nombre" value="{$dato.nombre|default:""}" class="form-control" placeholder="Nombre de la encuesta">
		</div>
		<div class="form-group">
			<label>Link</label>
			<input type="url" name="link" value="{$dato.link|default:""}" class="form-control" placeholder="Link de la encuesta">
		</div>
		<div class="form-group">
			<label>Status</label>
			<select name="status" class="form-control">
				<option value="{$dato.status}">{if $dato.status==1}Activa{else}No activa{/if}</option>
				<option value="1">Activar</option>
				<option value="2">Desactivar</option>
			</select>
		</div>
		<div class="form-group">
			<label>Campaña</label>
			<select name="campaign" class="form-control">
				<option value="{$dato.campaign_id}">{$dato.campaign}</option>
				{if isset($campaign) &&count($campaign)}
					{foreach from=$campaign item=c}
						<option value="{$c.id}">{$c.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}encuestas" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>