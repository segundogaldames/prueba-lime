<div class="row">
	<div class="col-md-6">
		<h2>Ver Contacto</h2>
		<table class="table table-hover">
			<tr>
				<th>Nombre:</th>
				<td>{$contacto.nombre}</td>
			</tr>
			<tr>
				<th>Teléfono:</th>
				<td>{$contacto.telefono}</td>
			</tr>
			{if isset($contacto.rut)}
			<tr>
				<th>RUT:</th>
				<td>{$contacto.rut}</td>
			</tr>
			{/if}
			{if isset($contacto.comuna)}
			<tr>
				<th>Comuna:</th>
				<td>{$contacto.comuna}</td>
			</tr>
			{/if}
			{if isset($contacto.region)}
			<tr>
				<th>Región:</th>
				<td>{$contacto.region}</td>
			</tr>
			{/if}
			{if isset($contacto.codigo)}
			<tr>
				<th>Código:</th>
				<td>{$contacto.codigo}</td>
			</tr>
			{/if}
			{if isset($contacto.dato1)}
			<tr>
				<th>Dato 1:</th>
				<td>{$contacto.dato1}</td>
			</tr>
			{/if}
			{if isset($contacto.dato2)}
			<tr>
				<th>Dato 2:</th>
				<td>{$contacto.dato2}</td>
			</tr>
			{/if}
			{if isset($contacto.dato3)}
			<tr>
				<th>Dato 3:</th>
				<td>{$contacto.dato3}</td>
			</tr>
			{/if}
			{if isset($contacto.dato4)}
			<tr>
				<th>Dato 4:</th>
				<td>{$contacto.dato4}</td>
			</tr>
			{/if}
			{if isset($contacto.dato5)}
			<tr>
				<th>Dato 5:</th>
				<td>{$contacto.dato5}</td>
			</tr>
			{/if}
			{if isset($contacto.dato6)}
			<tr>
				<th>Dato 6:</th>
				<td>{$contacto.dato6}</td>
			</tr>
			{/if}
			{if isset($contacto.dato7)}
			<tr>
				<th>Dato 7:</th>
				<td>{$contacto.dato7}</td>
			</tr>
			{/if}
			{if isset($contacto.dato8)}
			<tr>
				<th>Dato 8:</th>
				<td>{$contacto.dato8}</td>
			</tr>
			{/if}
			{if isset($contacto.dato9)}
			<tr>
				<th>Dato 9:</th>
				<td>{$contacto.dato9}</td>
			</tr>
			{/if}
			{if isset($contacto.dato10)}
			<tr>
				<th>Dato 10:</th>
				<td>{$contacto.dato10}</td>
			</tr>
			{/if}
			{if isset($contacto.dato11)}
			<tr>
				<th>Dato 11:</th>
				<td>{$contacto.dato11}</td>
			</tr>
			{/if}
			{if isset($contacto.telefono2)}
			<tr>
				<th>Teléfono 2:</th>
				<td>{$contacto.telefono2}</td>
			</tr>
			{/if}
			{if isset($contacto.telefono3)}
			<tr>
				<th>Teléfono 3:</th>
				<td>{$contacto.telefono3}</td>
			</tr>
			{/if}
			{if isset($contacto.telefono4)}
			<tr>
				<th>Teléfono 4:</th>
				<td>{$contacto.telefono4}</td>
			</tr>
			{/if}
			{if isset($contacto.telefono5)}
			<tr>
				<th>Teléfono 5:</th>
				<td>{$contacto.telefono5}</td>
			</tr>
			{/if}
			{if isset($contacto.telefono6)}
			<tr>
				<th>Teléfono 6:</th>
				<td>{$contacto.telefono6}</td>
			</tr>
			{/if}
			{if isset($contacto.telefono7)}
			<tr>
				<th>Teléfono 7:</th>
				<td>{$contacto.telefono7}</td>
			</tr>
			{/if}
			{if isset($contacto.telefono8)}
			<tr>
				<th>Teléfono 8:</th>
				<td>{$contacto.telefono8}</td>
			</tr>
			{/if}
			{if isset($contacto.telefono9)}
			<tr>
				<th>Teléfono 9:</th>
				<td>{$contacto.telefono9}</td>
			</tr>
			{/if}
			{if isset($contacto.telefono10)}
			<tr>
				<th>Teléfono 10:</th>
				<td>{$contacto.telefono10}</td>
			</tr>
			{/if}
			{if isset($contacto.fecha1)}
			<tr>
				<th>Fecha 1:</th>
				<td>{$contacto.fecha1}</td>
			</tr>
			{/if}
			{if isset($contacto.fecha2)}
			<tr>
				<th>Fecha 2:</th>
				<td>{$contacto.fecha2}</td>
			</tr>
			{/if}
			{if isset($contacto.fecha3)}
			<tr>
				<th>Fecha 3:</th>
				<td>{$contacto.fecha3}</td>
			</tr>
			{/if}
		</table>
	</div>
	<div class="col-md-6">
		<table class="table table-hover" style="margin-top: 40px">
			<tr>
				<th>Estado de Contacto:</th>
				<td>{$contacto.e_contacto}</td>
			</tr>
			<tr>
				<th>Estado de Llamada:</th>
				<td>{$contacto.llamada}</td>
			</tr>
			<tr>
				<th>Encuesta:</th>
				<td>{$contacto.nom_encuesta}</td>
			</tr>
			<tr>
				<th>Fecha Creación:</th>
				<td>{$contacto.creado|date_format:"%d-%m-%Y %H:%M"}</td>
			</tr>
			<tr>
				<th>Fecha Modificación:</th>
				<td>{$contacto.modificado|date_format:"%d-%m-%Y %H:%M"}</td>
			</tr>
		</table>
		<p>
			<a href="{$_layoutParams.root}contactos/edit/{$contacto.id}" class="btn btn-link">Editar</a>
			<a href="{$_layoutParams.root}cargas" class="btn btn-link">Listas</a>
			<a href="{$_layoutParams.root}contactos" class="btn btn-link">Contactos</a>
			<a href="{$_layoutParams.root}contactos/contactar/{$contacto.encuesta}/{$contacto.id}" class="btn btn-primary">Contactar</a>
		</p>
	</div>
</div>