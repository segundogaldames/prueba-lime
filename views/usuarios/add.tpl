<div class="col-md-6">
	<h2>Nuevo Usuario</h2>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Nombre:</label>
			<input type="text" name="nombre" placeholder="Nombre completo" class="form-control" value="{$datos.nombre|default:""}">
		</div>
		<div class="form-group">
			<label>Email:</label>
			<input type="email" name="email" placeholder="Correo electronico" class="form-control" value="{$datos.email|default:""}">
		</div>
		<div class="form-group">
			<label>Rol:</label>
			<select name="role" class="form-control">
				<option value="">Seleccione</option>
				{if isset($roles) && count($roles)}
					{foreach from=$roles item=r}
						<option value="{$r.id}">{$r.nombre}</option>
					{/foreach}
				{/if}
			</select>
		</div>
		<div class="form-group">
			<label>Password:</label>
			<input type="password" name="clave" placeholder="Password mínimo 8 caracteres" class="form-control">
		</div>
		<div class="form-group">
			<label>Repita Password:</label>
			<input type="password" name="reclave" placeholder="Repetir password" class="form-control">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
		</div>	
	</form>
</div>