<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-30 16:25:40
         compiled from "/var/www/html/prueba-lime/views/usuarios/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10966702705a206944c3ddb8-93995790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '132c245f2a3e8351ee25fccc25efc25c3d8bc54e' => 
    array (
      0 => '/var/www/html/prueba-lime/views/usuarios/edit.tpl',
      1 => 1512073071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10966702705a206944c3ddb8-93995790',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dato' => 0,
    'roles' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a206944c747c3_27074417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a206944c747c3_27074417')) {function content_5a206944c747c3_27074417($_smarty_tpl) {?><div class="col-md-6">
	<h2>Editar Usuario</h2>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Nombre:</label>
			<input type="text" name="nombre" placeholder="Nombre completo" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label>Email:</label>
			<label><?php echo $_smarty_tpl->tpl_vars['dato']->value['email'];?>
</label>
		</div>
		<div class="form-group">
			<label>Rol:</label>
			<select name="role" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['role_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['role'];?>
</option>
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
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
		</div>	
	</form>
</div><?php }} ?>
