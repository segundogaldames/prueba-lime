<div class="col-md-6">
	<h2>Login</h2>
	<p class="alert alert-warning" role="alert">Debe iniciar sesión para continuar</p>
	<form action="" method="post" autocomplete="off">
		<div class="form-group">
			<label>Usuario</label>
			<input type="email" name="email" placeholder="Correo electrónico" class="form-control">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="clave" class="form-control">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="{$enviar}">
			<input type="submit" value="Ingresar" class="btn btn-success">
		</div>
	</form>
</div>	
