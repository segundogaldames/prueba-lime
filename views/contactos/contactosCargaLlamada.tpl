<div class="col-md-6">
	<h2>Cambiar Estado Llamadas a Contactos</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Estado de Llamada</label>
			<select name="llamada" class="form-control">
				<option value="{$estado.id}">{$estado.nombre}</option>
				{if isset($e_llamadas) && count($e_llamadas)}
					{foreach from=$e_llamadas item=ell}
						<option value="{$ell.id}">{$ell.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}contactos/contactosCarga" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>