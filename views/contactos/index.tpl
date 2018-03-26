<style type="text/css">
	table{
		font-size: 14px;
	}
	th{
		text-align: center;
	}
</style>
<div class="col-md-12">
		<div style="padding: 20px">
			<form action="{$_layoutParams.root}contactos/resultados" method="post" class="form-inline">
				<label>Número de Teléfono:&nbsp;</label>
				<input type="text" name="telefono" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Buscar por teléfono">
				<input type="hidden" name="enviar" value="{$enviar}">
				<input type="submit" value="Buscar" class="btn btn-primary">
			</form>
		</div>
		
		<div style="margin-top: 20px; padding: 0 0 20px 20px">
			<form action="{$_layoutParams.root}contactos/estadoLlamada" method="post" class="form-inline">
				<label>Estado de Llamada:&nbsp;</label>
				<input type="text" name="llamada" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder=Buscar por estado de llamada">
				<input type="hidden" name="enviar" value="{$enviar}">
				<input type="submit" value="Buscar" class="btn btn-primary">
			</form>
		</div>
		{if isset($contactos) && count($contactos)}
	
		<table class="table table-hover table-condensed table-responsive">
			<tr style="background-color: #eeebeb">
				<th>Nombre</th>
				<th>Teléfono</th>
				<th>Teléfono 2</th>
				<th>Teléfono 3</th>
				<th>Encuesta</th>
				<th>Lista</th>
				<th>Usuario</th>
				<th>Estado de Contacto</th>
				<th>Estado de Llamada</th>
				<th>Fecha de Carga</th>
				<th>Fecha Gestión</th>
			</tr>
			{foreach from=$contactos item=c}
				<tr>
					<td><a href="{$_layoutParams.root}contactos/view/{$c.id}">{ucwords($c.nombre)}</a></td>
					<td>{$c.telefono}</td>
					<td>{$c.telefono2}</td>
					<td>{$c.telefono3}</td>
					<td>{ucwords($c.nom_encuesta)}</td>
					<td>{$c.num_carga}</td>
					<td>{ucwords($c.usuario)}</td>
					<td>{$c.e_contacto}</td>
					<td>{$c.llamada}</td>
					<td>{$c.creado|date_format:"%d-%m-%Y %H:%I"}</td>
					<td>{$c.modificado|date_format:"%d-%m-%Y %H:%I"}</td>
				</tr>

			{/foreach}
		</table>
			{if isset($paginacion)}{$paginacion}{/if}
		{else}
			<p class="text-alert">No hay contactos registrados</p>
		{/if}
	
</div>