<style type="text/css">
	table{
		font-size: 14px;
	}
	th{
		text-align: center;
	}
</style>
<div class="col-md-12">
	{if isset($contactos) && count($contactos)}
	<table class="table table-hover table-responsive">
		<tr style="background-color: #C2BBB9">
			<th>Nombre</th>
			<th>Rut</th>
			<th>Email</th>
			<th>Comuna</th>
			<th>Región</th>
			<th>Teléfono</th>
			<th>Teléfono 2</th>
			<th>Teléfono 3</th>
			<th>Teléfono 4</th>
			<th>Teléfono 5</th>
			<th>Teléfono 6</th>
			<th>Teléfono 7</th>
			<th>Teléfono 8</th>
			<th>Teléfono 9</th>
			<th>Teléfono 10</th>
			<th>Empresa</th>
			<th>Profesión</th>
			<th>Edad</th>
			<th>Código</th>
			<th>Tienda</th>
			<th>Dato 1</th>
			<th>Dato 2</th>
			<th>Dato 3</th>
			<th>Fecha 1</th>
			<th>Fecha 2</th>
			<th>Fecha 3</th>
			<th>Criterio 1</th>
			<th>Criterio 2</th>
			<th>Encuesta</th>
			<th>Lista</th>
			<th>Usuario</th>
			<th>Estado de Contacto</th>
			<th>Estado de Llamada</th>
			<th>Fecha de Carga</th>
			<th>Fecha de Modificación</th>
			<th>Acciones</th>
		</tr>
		{foreach from=$contactos item=c}
			<tr>
				<td>{$c.nombre}</td>
				<td>{$c.rut}</td>
				<td>{$c.email}</td>
				<td>{$c.comuna}</td>
				<td>{$c.region}</td>
				<td>{$c.telefono}</td>
				<td>{$c.telefono2}</td>
				<td>{$c.telefono3}</td>
				<td>{$c.telefono4}</td>
				<td>{$c.telefono5}</td>
				<td>{$c.telefono6}</td>
				<td>{$c.telefono7}</td>
				<td>{$c.telefono8}</td>
				<td>{$c.telefono9}</td>
				<td>{$c.telefono10}</td>
				<td>{$c.empresa}</td>
				<td>{$c.profesion}</td>
				<td>{$c.edad}</td>
				<td>{$c.codigo}</td>
				<td>{$c.tienda}</td>
				<td>{$c.dato1}</td>
				<td>{$c.dato2}</td>
				<td>{$c.dato3}</td>
				<td>{$c.fecha1}</td>
				<td>{$c.fecha2}</td>
				<td>{$c.fecha3}</td>
				<td>{$c.criterio1}</td>
				<td>{$c.criterio2}</td>
				<td>{$c.nom_encuesta}</td>
				<td>{$c.num_carga}</td>
				<td>{$c.usuario}</td>
				<td>{if $c.estado_contacto==1}Disponible{else}No Disponible{/if}</td>
				<td>{$c.llamada}</td>
				<td>{$c.creado|date_format:"%d-%m-%Y %H:%I"}</td>
				<td>{$c.modificado|date_format:"%d-%m-%Y %H:%I"}</td>
				<td>Acciones</td>
			</tr>
		{/foreach}
	</table>
	{else}
		<p class="text-alert">No hay contactos registrados</p>
	{/if}
</div>