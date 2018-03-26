<div class="col-md-12">
	<h2>Campos Contactos</h2>
	{if isset($campos) && count($campos)}
	<table class="table table-hover table-responsive">
		<tr>
			<th>Encuesta</th>
			<th>Nombre</th>
			<th>Teléfono</th>
			<th>Rut</th>
			<th>Comuna</th>
			<th>Región</th>
			<th>Código</th>
			<th>Dato 1</th>
			<th>Dato 2</th>
			<th>Dato 3</th>
			<th>Dato 4</th>
			<th>Dato 5</th>
			<th>Dato 6</th>
			<th>Dato 7</th>
			<th>Dato 8</th>
			<th>Dato 9</th>
			<th>Dato 10</th>
			<th>Dato 11</th>
			<th>Fecha 1</th>
			<th>Fecha 2</th>
			<th>Fecha 3</th>
			<th>Teléfono 2</th>
			<th>Teléfono 3</th>
			<th>Teléfono 4</th>
			<th>Teléfono 5</th>
			<th>Teléfono 6</th>
			<th>Teléfono 7</th>
			<th>Teléfono 8</th>
			<th>Teléfono 9</th>
			<th>Teléfono 10</th>
		</tr>
		{foreach from=$campos item=cc}
			<tr>
				<td><a href="{$_layoutParams.root}camposcontactos/edit/{$cc.id}" title="Editar Campo">{$cc.encuesta}</a></td>
				<td>{$cc.nombre}</td>
				<td>{$cc.telefono}</td>
				<td>{$cc.rut}</td>
				<td>{$cc.comuna}</td>
				<td>{$cc.region}</td>
				<td>{$cc.codigo}</td>
				<td>{$cc.dato1}</td>
				<td>{$cc.dato2}</td>
				<td>{$cc.dato3}</td>
				<td>{$cc.dato4}</td>
				<td>{$cc.dato5}</td>
				<td>{$cc.dato6}</td>
				<td>{$cc.dato7}</td>
				<td>{$cc.dato8}</td>
				<td>{$cc.dato9}</td>
				<td>{$cc.dato10}</td>
				<td>{$cc.dato11}</td>
				<td>{$cc.fecha1}</td>
				<td>{$cc.fecha2}</td>
				<td>{$cc.fecha3}</td>
				<td>{$cc.telefono2}</td>
				<td>{$cc.telefono3}</td>
				<td>{$cc.telefono4}</td>
				<td>{$cc.telefono5}</td>
				<td>{$cc.telefono6}</td>
				<td>{$cc.telefono7}</td>
				<td>{$cc.telefono8}</td>
				<td>{$cc.telefono9}</td>
				<td>{$cc.telefono10}</td>
			</tr>
		{/foreach}
	</table>
	{else}
		<p class="text-info">No hay campos registrados</p>
	{/if}
</div>