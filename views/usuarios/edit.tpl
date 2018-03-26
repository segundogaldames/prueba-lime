<div class="col-md-6">
	<h2>Editar Usuario</h2>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Nombre:</label>
			<input type="text" name="nombre" placeholder="Nombre completo" class="form-control" value="{$dato.nombre|default:""}">
		</div>
		<div class="form-group">
			<label>Email:</label>
			<input type="email" name="email" class="form-control" value="{$dato.email|default:""}"">
		</div>
		<div class="form-group">
			<label>Rol: {if Session::get('role_id')==3}{$dato.role}{/if}</label>
			{if Session::get('role_id')==1}
			<select name="role" class="form-control">
				<option value="{$dato.role_id}">{$dato.role}</option>
				{if isset($roles) && count($roles)}
					{foreach from=$roles item=r}
						<option value="{$r.id}">{$r.nombre}</option>
					{/foreach}
				{/if}
			</select>
			{/if}
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="{$_layoutParams.root}index" class="btn btn-link">Volver</a>
		</div>	
	</form>
</div>