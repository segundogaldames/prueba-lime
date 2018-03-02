<div class="row">
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
		<!--Mostrar opcion de estadisticas-->
	<div class="col-md-4" style="padding-top: 60px; margin-right: 30px">
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
		
	<!--Lista los resultados-->
	
	<div class="col-md-4" style="padding-top: 60px">
		{if Session::get('role_id')!=2}
			<h4>Recorrido {if isset($enc_nombre)}{$enc_nombre.nombre}{/if}</h4>
			{if isset($recorridos) && count($recorridos)}
				<table class="table table-hover table-bordered">
					
					<tr>
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
				<strong>No hay datos</strong>
			{/if}
		{/if}
	</div>	
			
</div>