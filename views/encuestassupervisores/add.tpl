<div class="col-md-6">
	<h2>Agregar Asociación</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Usuario</label>
			<select name="usuario" class="form-control">
				<option value="">Seleccione...</option>
				{if isset($usuarios) && count($usuarios)}
					{foreach from=$usuarios item=u}
						<option value="{$u.id}">{$u.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar" class="btn btn-success">
		</div>
	</form>
	
</div>