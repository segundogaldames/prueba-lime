<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-01 11:13:53
         compiled from "/var/www/html/prueba-lime/views/usuarios/addEjecutivos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14591815265a9818b1427210-62145572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b26bbf6a9960ceea10dd90d16d92ee96f7ff48c' => 
    array (
      0 => '/var/www/html/prueba-lime/views/usuarios/addEjecutivos.tpl',
      1 => 1519917218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14591815265a9818b1427210-62145572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    'enviar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9818b1473297_30917005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9818b1473297_30917005')) {function content_5a9818b1473297_30917005($_smarty_tpl) {?><div class="col-md-6">
	<h2>Nuevo Usuario</h2>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Nombre:</label>
			<input type="text" name="nombre" placeholder="Nombre completo" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label>Email:</label>
			<input type="email" name="email" placeholder="Correo electronico" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
">
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
			<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
			<input type="submit" value="Guardar" class="btn btn-success">
		</div>	
	</form>
</div><?php }} ?>
