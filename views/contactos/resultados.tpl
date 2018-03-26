<style type="text/css">
	table{
		font-size: 14px;
	}
	th{
		text-align: center;
	}
</style>
<div class="col-md-12">		
	
		{if isset($contacto) && count($contacto)}
	
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
			{foreach from=$contacto item=c}
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
			<p class="text-alert">No hay contactos registrados con este número</p>
		{/if}
		<p>
			<a href="{$_layoutParams.root}cargas" class="btn btn-link">Listas</a>
			<a href="{$_layoutParams.root}contactos" class="btn btn-link">Contactos</a>
		</p>
	
</div>