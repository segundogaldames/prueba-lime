<div class="col-md-12">
	<h2>Ver encuesta: {$encuesta.nombre}</h2>
	<p><strong>Link:</strong> {$encuesta.link}</p>
	<p><strong>Status:</strong> {if $encuesta.status==1}Activa{else}No activa{/if}</p>
	<p><strong>Campaña:</strong> {$encuesta.campaign}</p>
	<p><strong>Tipo:</strong> {if $encuesta.tipo==1}Encuesta{else}Auditoría{/if}</p>
	<p><strong>Creado:</strong> {$encuesta.creado|date_format:"%d-%m-%Y %H:%M"}</p>
	<p><strong>Modificado:</strong> {$encuesta.actualizado|date_format:"%d-%m-%Y %H:%M"}</p>
	
	<p>
		<a href="{$_layoutParams.root}encuestas/edit/{$encuesta.id}" class="btn btn-link btn-sm">Editar</a>
		{if Session::get('role_id')==1}
		<a href="{$_layoutParams.root}encuestas/delete/{$encuesta.id}" class="btn btn-link btn-sm" onclick="return eliminar('{$_layoutParams.root}encuestas/delete/{$encuesta.id}','{$encuesta.nombre}')">Eliminar</a>
		{/if}
		<a href="{$_layoutParams.root}encuestas/encuestasSupervisores" class="btn btn-link btn-sm">Encuestas</a>
		<a href="{$_layoutParams.root}contactos/probar/{$encuesta.id}" class="btn btn-primary btn-sm">Probar Formulario</a>
		<a href="{$_layoutParams.root}contactos/contactoEncuesta/{$encuesta.id}" class="btn btn-success btn-sm">Probar Encuesta</a>
	</p>

	<hr>
	{if $encuesta.tipo == 1}
	<!--lista de criterios asociados-->
		{if isset($criterios) && count($criterios)}
			<h4>Criterios Asociados</h4>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<!--tabla disponibles-->
					<table class="table table-hover table-bordered">
						<tr>
							<th>Criterio</th>
							<th>Disponibles</th>
						</tr>
						{foreach from=$disponibles item=d}
							<tr>
								<td>{$d.nom_criterio}</td>
								<td>{$d.filas}</td>
							</tr>
						{/foreach}
					</table>
					
				</div>
				<div class="col-md-6">
					<!--tabla criterios-->
					<table class="table table-hover table-bordered">
						<tr>
							<th>Criterios</th>
							<th>Carga</th>
						</tr>
						{foreach from=$criterios item=cr}
							<tr>
								<td>
									<a href="{$_layoutParams.root}criterios/view/{$cr.id}" class="btn btn-link btn-sm" title="Administrar Criterio">{ucwords($cr.nombre)}</a>
								</td>
								<td>
									<a href="{$_layoutParams.root}contactos/addContactosEncuestaCriterio/{$encuesta.id}/{$cr.id}">Cargar Contactos</a>
								</td>
							</tr>
						{/foreach}
					</table>
					<p><a href="{$_layoutParams.root}criterios/addCriterioEncuesta/{$encuesta.id}" class="btn btn-link">Crear Criterio</a></p>
					
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<hr>
				</div>
				<div class="col-md-6">
					<table class="table table-hover table-bordered">
						<tr>
							<th>Criterio</th>
							<th>Desde</th>
							<th>Hasta</th>
							<th>Cuota</th>
						</tr>
						{foreach from=$cuotas item=cu}
							<tr>
								<td>
									<a href="{$_layoutParams.root}criterios/view/{$cu.criterio_id}" class="btn btn-link btn-sm" title="Modificar Cuota">{$cu.criterio}</a>
									
								</td>
								<td>{$cu.desde|date_format:"%d-%m-%Y"}</td>
								<td>{$cu.hasta|date_format:"%d-%m-%Y"}</td>
								<td>{$cu.valor}</td>
							</tr>
						{/foreach}
					</table>
				</div>
				<div class="col-md-4">
					<a href="{$_layoutParams.root}index" class="btn btn-link">Ver Estadística</a>
				</div>
			</div>
		{else}
			<p class="text-info">No hay criterios asociados</p>
			
			<p><a href="{$_layoutParams.root}criterios/addCriterioEncuesta/{$encuesta.id}" class="btn btn-link">Crear Criterio</a></p>
			<!--Lista de cargas realizadas asociadas a un usuario-->
			{if isset($cargas) && count($cargas)}
				<h4>Listas de Contactos Asociados</h4>
				<ul type="square">
					{foreach from=$cargas item=car}
						<li><a href="{$_layoutParams.root}cargas/view/{$car.id}" class="btn btn-link">Carga {$car.id}</a></li>
					{/foreach}
				</ul>
			{else}
				<strong>No hay listas de contactos cargadas</strong>
				
			{/if}
			<p><a href="{$_layoutParams.root}contactos/addContactosEncuesta/{$encuesta.id}" class="btn btn-link">Cargar Contactos</a></p>

			<!--cuota asociada-->
			{if isset($cuota) && count($cuota)}
				<div class="col-md-6">
					<h4>Cuota Asociada</h4>
					<table class="table table-hover table-bordered">
						<tr style="background-color: #eeebeb">
							<th>Desde</th>
							<th>Hasta</th>
							<th>Valor</th>
							<th>Encuestados</th>
						</tr>
						<tr>
							<td>{$cuota.desde|date_format:"%d-%m-%Y"}</td>
							<td>{$cuota.hasta|date_format:"%d-%m-%Y"}</td>
							<td>{$cuota.valor}</td>
							<td>{$encuestados}</td>
						</tr>
					</table>
				</div>
				
				<p><a href="{$_layoutParams.root}cuotas/edit/{$cuota.id}">Modificar</a></p>
			{else}
				<p><a href="{$_layoutParams.root}cuotas/add/{$encuesta.id}/" class="btn btn-link">Agregar Cuota</a></p>
			{/if}
			
		{/if}
	{/if}
	<hr>
	<!--Lista los usuarios asociados a una encuesta y permite asociar usuarios-->
	<h4>Ejecutivos asociados</h4>
	{if isset($usuarios) && count($usuarios)}
		<ul type="square"></ul>
		{foreach from=$usuarios item=u}
			<li>
				<a href="{$_layoutParams.root}usuarios/view/{$u.usuario_id}" class="btn btn-link btn-sm">{$u.usuario}</a>
				{if isset($criterios) && count($criterios)}
					<a href="{$_layoutParams.root}encuestasusuarios/criterioEjecutivo/{$u.id}/{$u.encuesta_id}" class="btn btn-link btn-sm">Cambiar Criterio</a>
				{/if}
			</li>
		{/foreach}
	{else}
		<strong>No hay ejecutivos asociados</strong>
	{/if}
	<p><a href="{$_layoutParams.root}encuestasusuarios/addUsuarioEncuesta/{$encuesta.id}" class="btn btn-link">Asociar Ejecutivos</a></p>

	<!--lista de supervisores asignados a una encuesta segun si es adminitrador-->
	{if Session::get('role_id')==1}
		<h4>Supervisores Responsables</h4>
		{if isset($supervisores) && count($supervisores)}
			<ul type="square">
				{foreach from=$supervisores item=s}
					<li><a href="{$_layoutParams.root}usuarios/view/{$s.supervisor_id}">{$s.supervisor}</a></li>
				{/foreach}
			</ul>
		{else}
			<p class="text-info">No hay supervisores asignados</p>
			
		{/if}
		<p><a href="{$_layoutParams.root}encuestassupervisores/add/{$encuesta.id}">Agregar Supervisor</a></p>
	{/if}
	

	