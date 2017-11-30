<div class="col-md-12">
	<h4>Bienvenido(a) {$saludo.nombre}</h4>
	<hr>
	{if Session::get('role_id') != 2}
		<h2>Panel de Administración</h2>

		<h3>Clientes</h3>
		<ul>
			<li>Lista de clientes</li>
		</ul>
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

		
		
		
		


		
	
