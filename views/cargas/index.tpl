<div class="col-md-12">
	<h2>Listas de Contactos Cargados</h2>
	{if Session::get('role_id') == 3}
		{if isset($cargas) && count($cargas)}
		<p class="text-danger">Si desea desactivar o eliminar una lista, debe tener en cuenta que se desactivarán o eliminarán los contactos asociados a la lista seleccionada</p>
		<table class="table table-hover">
			<tr>
				<th>Fecha</th>
				<th>Lista N°</th>
				<th>Encuesta</th>
				<th>Estado</th>
				<th>Modificado</th>
				<th>Acciones</th>
			</tr>
			{foreach from=$cargas item=c}
				<tr>
					<td>{$c.fecha|date_format:"%d-%m-%Y %H:%M"}</td>
					<td>{$c.id}</td>
					<td>{$c.nombre}</td>
					<td>{if $c.estado ==1}Activa{else}No Activa{/if}</td>
					<td>{$c.modificado|date_format:"%d-%m-%Y %H:%M"}</td>
					<td>
						<a href="{$_layoutParams.root}contactos/contactosCarga/{$c.id}" class="btn btn-link btn-sm">Ver Contactos</a>

						<a href="{$_layoutParams.root}cargas/edit/{$c.id}" class="btn btn-link btn-sm">Editar Lista</a>
						{if Session::get('role_id') == 1}
						<a href="{$_layoutParams.root}cargas/delete/{$c.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}cargas/delete/{$c.id}', 'la lista {$c.id} y eliminar sus contactos?')">Eliminar Lista</a>
						{/if}
					</td>
				</tr>
			{/foreach}
		</table>

		{else}
			<p class="text-info">Usted no ha realizado cargas</p>
		{/if}
	{/if}
	{if Session::get('role_id') == 1}
		{if isset($cargasAll) && count($cargasAll)}
			<p class="text-danger">Si desea desactivar o eliminar una lista, debe tener en cuenta que se desactivarán o eliminarán los contactos asociados a la lista seleccionada</p>
			<table class="table table-hover">
				<tr>
					<th>Fecha</th>
					<th>Lista N°</th>
					<th>Encuesta</th>
					<th>Estado</th>
					<th>Modificado</th>
					<th>Acciones</th>
				</tr>
				{foreach from=$cargasAll item=c}
					<tr>
						<td>{$c.fecha|date_format:"%d-%m-%Y %H:%M"}</td>
						<td>{$c.id}</td>
						<td>{$c.nombre}</td>
						<td>{if $c.estado ==1}Activa{else}No Activa{/if}</td>
						<td>{$c.modificado|date_format:"%d-%m-%Y %H:%M"}</td>
						<td>
							<a href="{$_layoutParams.root}contactos/contactosCarga/{$c.id}" class="btn btn-link btn-sm">Ver Contactos</a>

							<a href="{$_layoutParams.root}cargas/edit/{$c.id}" class="btn btn-link btn-sm">Editar Lista</a>

							<a href="{$_layoutParams.root}cargas/delete/{$c.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}cargas/delete/{$c.id}', 'la lista {$c.id} y eliminar sus contactos?')">Eliminar Lista</a>
						</td>
					</tr>
				{/foreach}
			</table>
		{/if}
	{/if}
</div>