<div class="col-md-6">
	<h2>Lista de Cargas Realizadas</h2>
	{if isset($cargas) && count($cargas)}
	<table class="table table-hover">
		<tr>
			<th>Fecha</th>
			<th>Carga N°</th>
			<th>Acciones</th>
		</tr>
		{foreach from=$cargas item=c}
			<tr>
				<td>{$c.fecha|date_format:"%d-%m-%Y %H:%M"}</td>
				<td>{$c.id}</td>
				<td>
					<a href="{$_layoutParams.root}contactos/contactosCarga/{$c.id}" class="btn btn-link btn-sm">Ver Contactos</a>
					<a href="{$_layoutParams.root}contactos/deleteContactosCarga/{$c.id}" class="btn btn-link btn-sm">Eliminar Carga</a>
				</td>
			</tr>
		{/foreach}
	</table>

	{else}
		<p class="text-info">Usted no ha realizado cargas</p>
	{/if}
</div>