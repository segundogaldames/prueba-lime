{if isset($contactos) && count($contactos)}
	
		<table class="table table-hover table-condensed">
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
					<td>{if $c.estado_contacto==1}Disponible{else}No Disponible{/if}</td>
					<td>{$c.llamada}</td>
					<td>{$c.creado|date_format:"%d-%m-%Y %H:%I"}</td>
				</tr>

			{/foreach}
		</table>
			{if isset($paginacion)}{$paginacion}{/if}
		{else}
			<p class="text-alert">No hay contactos registrados</p>
		{/if}