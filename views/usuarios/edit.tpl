<div class="col-md-6">
	<h2>Editar Usuario</h2>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Nombre:</label>
			<input type="text" name="nombre" placeholder="Nombre completo" class="form-control" value="{$dato.nombre|default:""}">
		</div>
		<div class="form-group">
			<label>Email:</label>
			<label>{$dato.email}</label>
		</div>
		<div class="form-group">
			<label>Rol:</label>
			<select name="role" class="form-control">
				<option value="{$dato.role_id}">{$dato.role}</option>
				{if isset($roles) && count($roles)}
					{foreach from=$roles item=r}
						<option value="{$r.id}">{$r.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
		</div>	
	</form>
</div>