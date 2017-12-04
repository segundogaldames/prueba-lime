<div class="col-md-12">
	<h4>Bienvenido(a) {$saludo.nombre}</h4>
	<hr>
	{if Session::get('role_id') != 2}
		<h2>Panel de Administración</h2>

		<h3>Clientes</h3>
		{if isset($clientes) && count($clientes)}
		<ul type="square">
			{foreach from=$clientes item=c}
			<li><a href="{$_layoutParams.root}clientes/view/{$c.id}">{$c.nombre}</a></li>
			{/foreach}
		</ul>
		{else}
			<strong>No hay clientes disponibles</strong>
			<p><a href="{$_layoutParams.root}clientes/add" class="btn btn-link btn-sm">Crear cliente</a></p>
		{/if}
		<h3>Campañas</h3>
		<ul>
			<li>Lista de campañas</li>
		</ul>
		<h3>Ejecutivos</h3>
		<ul>
			<li>Lista de ejecutivos</li>
		</ul>
	{else}
		<h3>Mis Campañas</h3>
		<ul>
			<li>Mis campañas</li>
		</ul>
	{/if}

</div>

		
		
		
		


		
	
