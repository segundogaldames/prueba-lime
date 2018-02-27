<style type="text/css">
	#table-datos{
		text-align: center;
		font-size: 14px;
	}
</style>
<div class="row">
	<div class="container-fluid">
		<div class="col-md-12">
			<div id="lista">
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
								<td>{$carga.fecha|date_format:"%d-%m-%Y %H:%M"}</td>
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
					<table class="table table-hover" id="table-datos">
						<tr style="background-color: #eeebeb">
							<th>Nombre</th>
							<th>Teléfono</th>
							<th>Teléfono 2</th>
							<th>Teléfono 3</th>
							<th>Encuesta</th>
							<th>Fecha de Carga</th>
							<th>Estado del Contacto</th>
							<th>Estado de Llamada</th>
						</tr>
						{foreach from=$contactos item=c}
							<tr>
								<td><a href="{$_layoutParams.root}contactos/view/{$c.id}">{ucwords($c.nombre)}</a></td>
								<td>{$c.telefono}</td>
								<td>{$c.telefono2}</td>
								<td>{$c.telefono3}</td>
								<td>{ucwords($c.nom_encuesta)}</td>
								<td>{$c.creado|date_format:"%d-%m-%Y %H:%M"}</td>
								<td>{if $c.estado_contacto==1}Disponible{else}No Disponible{/if}</td>
								<td>{ucwords($c.llamada)}</td>
							</tr>
						{/foreach}

					</table>
					{if isset($paginacion)}{$paginacion}{/if}
				{else}
					<p class="text-alert">No hay contactos asociados a esta carga</p>
				{/if}
			</div>
			
		</div>
		
	</div>
</div>
