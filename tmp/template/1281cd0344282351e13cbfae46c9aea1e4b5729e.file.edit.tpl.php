<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 10:32:25
         compiled from "/var/www/html/qepd/views/usuario/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11865414855a1c214be47434-99567076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1281cd0344282351e13cbfae46c9aea1e4b5729e' => 
    array (
      0 => '/var/www/html/qepd/views/usuario/edit.tpl',
      1 => 1511793142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11865414855a1c214be47434-99567076',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1c214be7b922_93438308',
  'variables' => 
  array (
    'dato' => 0,
    'roles' => 0,
    'rol' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1c214be7b922_93438308')) {function content_5a1c214be7b922_93438308($_smarty_tpl) {?>
<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar de Usuario</h3>
	<p class="text-success">Ingrese sus datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
">
		</div>
		<div class="form-group">
			<label for="nombre">Apellido: <span class="text-danger">*</span></label>
			<input type="text" name="apellido" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['apellido'];?>
">
		</div>
		<div class="form-group">
			<label for="role">Rol usuario:</label>
			<select name="role" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['roles_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['rol'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['roles']->value)&&count($_smarty_tpl->tpl_vars['roles']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['rol'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rol']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rol']->key => $_smarty_tpl->tpl_vars['rol']->value) {
$_smarty_tpl->tpl_vars['rol']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['rol']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rol']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Actualizar" class="btn btn-success">
		</div>
	</form>
</div>
<div class="col-md-4">
	<h3>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
" onclick="return abandonarRegistro('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/cerrar}');">
			<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/layout/default/img/cerrar.png" title="Abandonar registro">
		</a>
	</h3>
</div>	


	
	
	
<?php }} ?>
