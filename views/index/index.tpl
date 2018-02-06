<div class="col-md-6">
	<h4>Bienvenido(a) {$saludo.nombre}</h4>
	<hr>
	{if Session::get('role_id') != 2}
		<h3>Panel de Administración</h3>
		<hr>
		<h4>Clientes</h4>
		{if isset($clientes) && count($clientes)}
			<ul type="square">
				{foreach from=$clientes item=c}
					<li>
						<a href="{$_layoutParams.root}clientes/view/{$c.id}" class="btn btn-link btn-sm">{$c.nombre}</a>
					</li>
				{/foreach}
			</ul>
		{else}
			<strong>No hay clientes disponibles</strong>
			<p><a href="{$_layoutParams.root}clientes/add" class="btn btn-link btn-sm">Crear cliente</a></p>
		{/if}
		<hr>
		<h4>Campañas</h4>
		{if isset($campaign) && count($campaign)}
			<ul type="square">
				{foreach from=$campaign item=c}
					<li>
						<a href="{$_layoutParams.root}campaign/view/{$c.id}" class="btn btn-link btn-sm">{$c.nombre}</a>
					</li>
				{/foreach}
			</ul>
		{else}
			<strong>No hay campañas disponibles</strong>
			<p>
				<a href="{$_layoutParams.root}campaign/add" class="btn btn-link btn-sm">Crear Campaña</a>
			</p>
		{/if}
		<hr>
		{if isset($ejecutivos) && count($ejecutivos)}
			<h4>Ejecutivos</h4>
			<ul type="square">
				{foreach from=$ejecutivos item=ej}
					<li>
						<a href="{$_layoutParams.root}usuarios/view/{$ej.id}" class="btn btn-link btn-sm">{$ej.nombre}</a>
					</li>
				{/foreach}
			</ul>
		{else}
			<strong>No hay ejecutivos registrados</strong>
			<p>
				<a href="{$_layoutParams.root}usuarios/add" class="btn btn-link btn-sm">Crear Ejecutivo</a>
			</p>
		{/if}
	{else}
		{if isset($encuestas) && count($encuestas)}
			<h4>Mis Encuestas</h4>
			<ul type="square">
				{foreach from=$encuestas item=e}
					<li><a href="{$e.link}" target="popup" onclick="javascript:window.open('{$e.link}','popup','width=500px,height=500px'); return false">{$e.nombre}</a></li>
				{/foreach}
			</ul>
		{else}
			<strong>No hay encuestas disponibles</strong>
		{/if}
	{/if}

</div>
<div class="col-md-6">
	<a name="encuestas">Encuestas</a>
</div>

		
		
		
		


		
	
