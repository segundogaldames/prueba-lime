<style type="text/css">
	th{
		text-align: center;
	}
</style>
<div class="row">
	<div class="container-fluid">
		<div class="col-md-12">
			{if isset($contactos) && count($contactos)}
			<div class="jumbotron">
				<h2>Lista de Contactos</h3>
				<div class="col-md-4">
					<table class="table table-hover">
						<tr>
							<th>N° Carga:</th>
							<td>{$carga.id}</td>
						</tr>
						<tr>
							<th>Fecha de carga:</th>
							<td>{$carga.fecha|date_format:"%d-%m-%Y %H:%I"}</td>
						</tr>
						<tr>
							<th>Cargados:</th>
							<td>{$num_contactos}</td>
						</tr>
						<tr>
							<th>Disponibles:</th>
							<td>{$num_disponibles}</td>
						</tr>
						<tr>
							<th>Encuestados:</th>
							<td>{$num_encuestados}</td>
						</tr>
					</table>
				</div>
				
				
			</div>
				<table class="table table-hover" style="font-size: 14px">
					<tr>
						<th>Nombre</th>
						<th>Teléfono</th>
						<th>Teléfono 2</th>
						<th>Teléfono 3</th>
						<th>Teléfono 4</th>
						<th>Teléfono 5</th>
						<th>Teléfono 6</th>
						<th>Encuesta</th>
						<th>Fecha de Carga</th>
						<th>Estado del Contacto</th>
						<th>Estado de Llamada</th>
						<th>Acciones</th>
					</tr>
					{foreach from=$contactos item=c}
						<tr>
							<td>{ucwords($c.nombre)}</td>
							<td>{$c.telefono}</td>
							<td>{$c.telefono2}</td>
							<td>{$c.telefono3}</td>
							<td>{$c.telefono4}</td>
							<td>{$c.telefono5}</td>
							<td>{$c.telefono6}</td>
							<td>{ucwords($c.nom_encuesta)}</td>
							<td>{$c.creado|date_format:"%d-%m-%Y %H:%M"}</td>
							<td>{if $c.estado_contacto==1}Disponible{else}No Disponible{/if}</td>
							<td>{ucwords($c.llamada)}</td>
							<td>
								<a href="{$_layoutParams.root}contactos/edit/{$c.id}" class="btn btn-link btn-sm">Editar</a>
								<a href="{$_layoutParams.root}contactos/delete/{$c.id}" class="btn btn-link btn-sm">Eliminar</a>
							</td>
						</tr>
					{/foreach}

				</table>
				
			{else}
				<p class="text-alert">No hay contactos asociados a esta carga</p>
			{/if}
		</div>
		
	</div>
</div>
