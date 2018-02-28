<div class="row">
	<div class="col-md-6">
		<h2>Bienvenido(a) {$saludo.nombre}</h2>
		<hr>
		<!--Mostrar menu para administrador y supervisor-->
		{if Session::get('role_id')!=2}
		<ul type="square">
			<li><a href="{$_layoutParams.root}clientes" class="btn btn-link">Clientes</a></li>
			<li><a href="{$_layoutParams.root}campaign" class="btn btn-link">Campañas</a></li>
			<li><a href="{$_layoutParams.root}encuestas" class="btn btn-link">Encuestas</a></li>
			<li><a href="{$_layoutParams.root}usuarios/ejecutivos" class="btn btn-link">Ejecutivos</a></li>
		</ul>
		{/if}
		<!--Mostrar encuestas para ejecutivos-->
		{if Session::get('role_id')==2}
			<ul type="square">
				{if isset($encuestas) && count($encuestas)}
					{foreach from=$encuestas item=e}
						<li><a href="{$_layoutParams.root}contactos/contactoEncuesta/{$e.encuesta_id}">{$e.nombre}</a></li>
					{/foreach}
				{/if}
			</ul>
		{/if}
	</div>
</div>