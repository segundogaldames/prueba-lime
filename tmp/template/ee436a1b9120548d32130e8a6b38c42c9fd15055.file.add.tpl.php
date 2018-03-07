<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 10:34:50
         compiled from "/var/www/html/prueba-lime/views/usuarios/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5183342085a1f2033a1c738-87069241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee436a1b9120548d32130e8a6b38c42c9fd15055' => 
    array (
      0 => '/var/www/html/prueba-lime/views/usuarios/add.tpl',
      1 => 1519851594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5183342085a1f2033a1c738-87069241',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1f2033a1dfd3_96881711',
  'variables' => 
  array (
    'datos' => 0,
    'roles' => 0,
    'r' => 0,
    'enviar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1f2033a1dfd3_96881711')) {function content_5a1f2033a1dfd3_96881711($_smarty_tpl) {?><div class="col-md-6">
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
			<label>Rol:</label>
			<select name="role" class="form-control">
				<option value="">Seleccione</option>
				<?php if (isset($_smarty_tpl->tpl_vars['roles']->value)&&count($_smarty_tpl->tpl_vars['roles']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
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
			<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
			<input type="submit" value="Guardar" class="btn btn-success">
		</div>	
	</form>
</div><?php }} ?>
