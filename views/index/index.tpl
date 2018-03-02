<div class="row">
	<!--columna de la izquierda para mostrar menu #####################################################################################-->
	<div class="col-md-3" style="padding-top: 10px">
		<h6>Bienvenido(a) {$saludo.nombre}</h6>
		<hr>
		<!--Mostrar menu para administrador y supervisor-->
		{if Session::get('role_id')!=2}
		<ul class="nav flex-column">
			<li class="nav-item"><a class="nav-link" href="{$_layoutParams.root}clientes" >Clientes</a></li>
			<li class="nav-item"><a class="nav-link" href="{$_layoutParams.root}campaign" >Campañas</a></li>
			<li class="nav-item"><a class="nav-link" href="{$_layoutParams.root}encuestas" >Encuestas</a></li>
			<li class="nav-item"><a class="nav-link" href="{$_layoutParams.root}usuarios/ejecutivos" >Ejecutivos</a></li>
		</ul>

		<!--Lista los resultados-->
		{/if}
		<!--Mostrar encuestas para ejecutivos -->
		{if Session::get('role_id')==2}

		<!--Lista de encuestas disponibles-->
			<h4>Encuestas Disponibles</h4>
			<ul class="nav flex-column">
				{if isset($encuestas) && count($encuestas)}
					{foreach from=$encuestas item=e}
						<li class="nav-item"><a class="nav-link" href="{$_layoutParams.root}contactos/contactoEncuesta/{$e.encuesta_id}">{$e.nombre}</a></li>
					{/foreach}
				{else}
					<strong>No tienes encuestas disponibles... </strong>
				{/if}
			</ul>
			
			<!--Lista de auditorias disponibles-->
			<div class="col-md-12" style="height: 20px"></div>
			<h4>Auditorías Disponibles</h4>
			<ul class="nav flex-column">
				{if isset($auditorias) && count($auditorias)}
					{foreach from=$auditorias item=a}
						<li class="nav-item"><a class="nav-link" href="{$_layoutParams.root}contactos/auditorias/{$a.encuesta_id}">{$a.nombre}</a></li>
					{/foreach}
				{else}
					<strong>No tienes auditorías disponibles... </strong>
				{/if}
			</ul>
		{/if}
	
	</div>
	<!--columna del medio para mostrar estadistica ##############################################################-->
	<div class="col-md-4" style="padding-top: 60px; margin-right: 30px">
		<!--Estadistica para administradores y supervisores-->
		{if Session::get('role_id')!=2}
		<h4>Estadísticas</h4>
		<form action="" method="post">
			<div class="form-group">
				<label>Desde:</label>
				<input type="date" name="desde" value="{$datos.desde|default:""}" class="form-control">
			</div>
			<div class="form-group">
				<label>Hasta:</label>
				<input type="date" name="hasta" value="{$datos.desde|default:""}" class="form-control">
			</div>
			<div class="form-group">
				<label>Encuesta:</label>
				<select name="encuesta" class="form-control">
					<option value="">Seleccione...</option>
					{if isset($enc_estadistica) && count($enc_estadistica)}
						{foreach from=$enc_estadistica item=enc}
							<option value="{$enc.id}">{$enc.nombre}</option>
						{/foreach}
					{/if}
				</select>
			</div>
			<div class="form-group">
				<input type="hidden" name="enviar" value="{$enviar}">
				<input type="submit" value="Consultar" class="btn btn-success">
			</div>
		</form>
		{/if}
	</div>
		
	<!--columna derecha para Lista los resultados #################################################################################-->
	
	<div class="col-md-4" style="padding-top: 60px">
		{if Session::get('role_id')!=2}
			<h4>Recorrido {if isset($enc_nombre)}{$enc_nombre.nombre}{/if}</h4>
			{if isset($recorridos) && count($recorridos)}
				<table class="table table-hover table-bordered">
					<tr style="background-color: #eeebeb">
						<th>Estado</th>
						<th>Valor</th>
					</tr>
					{foreach from=$recorridos item=r}
					<tr>
						<td>{$r.llamada}:</td>
						<td>{$r.filas}</td>
						</tr>
					{/foreach}
				</table>
			{else}
				<strong>0</strong>
			{/if}
			<div class="col-md-12" style="height: 20px"></div>

			<!--lista de encuestados por ejecutivos-->
			<h4>Encuestados</h4>
			{if isset($encuestados) && count($encuestados)}
				<table class="table table-hover table-bordered">
					<tr style="background-color: #eeebeb">
						<th>Ejecutivo</th>
						<th>Valor</th>
					</tr>
					{foreach from=$encuestados item=en}
					<tr>
						<td>{$en.ejecutivo}:</td>
						<td>{$en.filas}</td>
						</tr>
					{/foreach}
				</table>
			{else}
				<strong>0</strong>
			{/if}
		{/if}
	</div>	
			
</div>