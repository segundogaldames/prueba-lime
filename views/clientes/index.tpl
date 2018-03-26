<div class="col-md-6">
	{if isset($clientes) && count($clientes)}
		<h2>Lista de Clientes</h2>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Fecha de Creación</th>
			</tr>
			{foreach from=$clientes item=c}
				<tr>
					<td><a href="{$_layoutParams.root}clientes/view/{$c.id}" class="btn btn-link btn-sm">{$c.nombre}</a></td>
					<td>{$c.creado|date_format:"%d-%m-%Y %H:%M"}</td>
				</tr>
			{/foreach}
		</table>
	{else}
		<strong>No hay clientes registrados</strong>
	{/if}
	<p>
		<a href="{$_layoutParams.root}clientes/add" class="btn btn-link">Nuevo Cliente</a>
		<a href="{$_layoutParams.root}index" class="btn btn-link">Volver</a>
	</p>
</div>