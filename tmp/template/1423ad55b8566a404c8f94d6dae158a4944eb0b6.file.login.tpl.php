<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-28 17:09:03
         compiled from "/var/www/html/prueba-lime/views/usuarios/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21293294265a2014f0d27430-03951610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1423ad55b8566a404c8f94d6dae158a4944eb0b6' => 
    array (
      0 => '/var/www/html/prueba-lime/views/usuarios/login.tpl',
      1 => 1519851615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21293294265a2014f0d27430-03951610',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a2014f0d324d8_78619193',
  'variables' => 
  array (
    'enviar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2014f0d324d8_78619193')) {function content_5a2014f0d324d8_78619193($_smarty_tpl) {?><div class="col-md-6">
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
			<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
			<input type="submit" value="Ingresar" class="btn btn-success">
		</div>
	</form>
</div>	
<?php }} ?>
