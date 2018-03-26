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
						<table class="table table-hover table-responsive">
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
								<th>Encuestados:</th>
								<td>{$num_encuestados}</td>
							</tr>
						</table>
						<table class="table table-hover">
							<tr style="background-color:  #d9d9da">
								<th>Estado</th>
								<th>Valor</th>
							</tr>
							{if isset($num_estados) && count($num_estados)}
								{foreach from=$num_estados item=ne}
									<tr>
										<td><a href="{$_layoutParams.root}contactos/contactosCargaEstado/{$carga.id}/{$ne.estado_contacto}" class="btn btn-link btn-sm">{ucwords($ne.estado)}(s)</a></td>
										<td>{$ne.filas}</td>
									</tr>
								{/foreach}
							{/if}
						</table>
					</div>
					<div>
						<form action="{$_layoutParams.root}contactos/resultados" method="post" class="form-inline">
							<label>Número de Teléfono:&nbsp;</label>
							<input type="text" name="telefono" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Buscar por teléfono">
							<input type="hidden" name="enviar" value="{$enviar}">
							<input type="submit" value="Buscar" class="btn btn-primary">
						</form>
					</div>
					<div style="margin-top: 20px">
						<form action="{$_layoutParams.root}contactos/estadoLlamada" method="post" class="form-inline">
							<label>Estado de Llamada:&nbsp;</label>
							<input type="text" name="llamada" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Buscar por estado de llamada">
							<input type="hidden" name="enviar" value="{$enviar}">
							<input type="submit" value="Buscar" class="btn btn-primary">
						</form>
					</div>
				</div>
					<table class="table table-hover" id="table-datos">
						<tr style="background-color: #eeebeb">
							<th>Nombre</th>
							<th>Teléfono</th>
							<th>Teléfono 2</th>
							<th>Teléfono 3</th>
							<th>Encuesta</th>
							<<th>Criterio</th>
							<th>Fecha de Carga</th>
							<th>Estado del Contacto</th>
							<th>Estado de Llamada</th>
							<th>Fecha de Gestión</th>
						</tr>
						{foreach from=$contactos item=c}
							<tr>
								<td><a href="{$_layoutParams.root}contactos/view/{$c.id}">{ucwords($c.nombre)}</a></td>
								<td>{$c.telefono}</td>
								<td>{$c.telefono2}</td>
								<td>{$c.telefono3}</td>
								<td>{ucwords($c.nom_encuesta)}</td>
								<td>{ucwords($c.criterio)}</td>
								<td>{$c.creado|date_format:"%d-%m-%Y %H:%M"}</td>
								<td>{$c.e_contacto}</td>
								<td>{if $c.estado_llamada!=1}<a href="{$_layoutParams.root}contactos/contactosCargaLlamada/{$carga.id}/{$c.estado_llamada}">{ucwords($c.llamada)}</a>{else}{ucwords($c.llamada)}{/if}</td>
								<td>{$c.modificado|date_format:"%d-%m-%Y %H:%M"}</td>
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
