<div class="row">
	<div class="col-md-4" style="padding-top: 15px">
		<h6>Bienvenido(a) {$saludo.nombre}</h6>
		<hr>
		{if Session::get('role_id')==2}

		<!--Lista de encuestas disponibles-->
			<h4>Encuestas Disponibles</h4>
			<ul class="nav flex-column">
				{if isset($encuestas) && count($encuestas)}
					{foreach from=$encuestas item=e}
						<li class="nav-item"><a class="nav-link" href="{$_layoutParams.root}contactos/contactoEncuesta/{$e.encuesta_id}/{$e.criterio_id}">{$e.nombre}</a></li>
					{/foreach}
				{else}
					<strong>No tienes encuestas disponibles... </strong>
				{/if}
			</ul>
		{/if}
	</div>
	<div class="col-md-8" style="padding-top: 75px">
		<h4>Agendamientos</h4>
			{if isset($agendamientos) && count($agendamientos)}
				<table class="table table-hover table-responsive">
					<tr>
						<th>Fecha Agenda</th>
						<th>Hora Agenda</th>
						<th>Contacto</th>
						<th>Status</th>
						<th></th>
					</tr>
					{foreach from=$agendamientos item=ag}
						<tr>
							<td>{$ag.fecha_agenda|date_format:"%d-%m-%Y"}</td>
							<td>{$ag.hora_agenda|date_format:"%d-%m-%Y"}</td>
							<td>{ucwords($ag.contacto)}</td>
							<td>{ucwords($ag.encuesta)}</td>
							<td>{if $ag.status==1}Pendiente{else}Contactado{/if}</td>
							<td><a href="{$_layoutParams.root}contactos/contactar/{$ag.encuesta_id}/{$ag.contacto_id}/{$ag.id}" class="btn btn-primary">Contactar</a></td>
						</tr>
					{/foreach}
				</table>
			{else}
				<p class="text-info">No tienes agendamientos pendientes</p>
			{/if}
	</div>
</div>