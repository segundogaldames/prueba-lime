<style type="text/css">
	th{
		text-align: right;
	}
</style>
<div class="col-md-12">
	<div class="col-md-6">
		<h3>Contactar</h3>
		{if isset($contacto) && count($contacto)}
			<table class="table table-hover">
				<tr>
					<th>Nombre:</th>
					<td>{$contacto.nombre}</td>
				</tr>
				<tr>
					<th>Teléfono:</th>
					<td>{$contacto.telefono}</td>
				</tr>
				{if isset($contacto.rut)}
				<tr>
					<th>RUT:</th>
					<td>{$contacto.rut}</td>
				</tr>
				{/if}
				<tr>
					<th>Teléfono 2:</th>
					<td>{$contacto.telefono2}</td>
				</tr>
				{if isset($contacto.telefono3)}
				<tr>
					<th>Teléfono 3:</th>
					<td>{$contacto.telefono3}</td>
				</tr>
				{/if}
			</table>
			<hr>
			<form action="{$_layoutParams.root}encuestasusuarios/editEstadoContacto" method="post">
				<div class=	"form-group">
					<label>Estado de Contacto<span class="text-danger">*</span></label>
					<select name="contacto" class="form-control">
						<option value="">Seleccione</option>
						<option value="1">Disponible</option>
						<option value="2">No disponible</option>
					</select>
				</div>
				<div class="form-group">
					<label>Estado de la Llamada<span class="text-danger">*</span></label>
					<select name="llamada" class="form-control">
						<option value="">Seleccione</option>
						{if isset($estado_llamadas) && count($estado_llamadas)}
							{foreach from=$estado_llamadas item=ell}
								<option value="{$ell.id}">{$ell.nombre}</option>	
							{/foreach}
						{/if}
					</select>
				</div>
				<div class="form-group">
					<input type="hidden" name="contacto_id" value="{$contacto.id}">
					<input type="hidden" name="enviar" value="{$enviar}">
					<input type="submit" value="Cambiar">
				</div>
			</form>
		{else}
			<p class="text-info">No hay contactos asociados a esta encuesta</p>
		{/if}
		<p><a href="{$_layoutParams.root}index">Volver</a></p>
	</div>
	<div class="col-md-8">
		{if isset($encuesta) && count($encuesta)}
			<iframe src="{$encuesta.link}" marginwidth="0" marginheight="0" name="ventana_iframe" scrolling="no" border="0" 
			frameborder="0" width="800" height="4800"></iframe>
		{/if}
	</div>
	
</div>