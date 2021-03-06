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
							<th>Lista</th>
							<th>Usuario</th>
							<th>Estado de Contacto</th>
							<th>Estado de Llamada</th>
							<th>Fecha de Carga</th>
							<th>Fecha Gestión</th>
						</tr>
						{foreach from=$contactos item=c}
							<tr>
								<td><a href="{$_layoutParams.root}contactos/view/{$c.id}">{ucwords($c.nombre)}</a></td>
								<td>{$c.telefono}</td>
								<td>{$c.telefono2}</td>
								<td>{$c.telefono3}</td>
								<td>{ucwords($c.nom_encuesta)}</td>
								<td>{$c.num_carga}</td>
								<td>{ucwords($c.usuario)}</td>
								<td>{$c.e_contacto}</td>
								<td>{if $c.estado_llamada!=1}<a href="{$_layoutParams.root}contactos/contactosCargaLlamada/{$c.num_carga}/{$c.estado_llamada}">{ucwords($c.llamada)}</a>{else}{ucwords($c.llamada)}{/if}</td>
								<td>{$c.creado|date_format:"%d-%m-%Y %H:%I"}</td>
								<td>{$c.modificado|date_format:"%d-%m-%Y %H:%I"}</td>
							</tr>
						{/foreach}

					</table>
					{if isset($paginacion)}{$paginacion}{/if}
				{else}
					<p class="text-alert">No hay contactos asociados a estado de llamada</p>
				{/if}
				<p>
					<a href="{$_layoutParams.root}cargas" class="btn btn-link">Listas</a>
					<a href="{$_layoutParams.root}contactos" class="btn btn-link">Contactos</a>
				</p>
			</div>
			
		</div>
		
	</div>
</div>
