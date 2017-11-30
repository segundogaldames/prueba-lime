<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 12:59:15
         compiled from "/var/www/html/qepd/views/empresas/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8841605995a1c39bea38d68-99316832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '125388876e14c642b24d96d5e203887de12c142d' => 
    array (
      0 => '/var/www/html/qepd/views/empresas/edit.tpl',
      1 => 1511801416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8841605995a1c39bea38d68-99316832',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1c39beaa4659_49644227',
  'variables' => 
  array (
    'dato' => 0,
    'usuarios' => 0,
    'u' => 0,
    'tipos' => 0,
    't' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1c39beaa4659_49644227')) {function content_5a1c39beaa4659_49644227($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar Empresa</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" name="email" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="rut">Rut:</label>
			<input type="text" name="rut" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['rut'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="usuario">Usuario actual: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['nom_usuario'])===null||$tmp==='' ? '' : $tmp);?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['apellido'])===null||$tmp==='' ? '' : $tmp);?>
</label>
			<select name="usuario" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['usuario_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['nom_usuario'];?>
 <?php echo $_smarty_tpl->tpl_vars['dato']->value['apellido'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['u']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['apellido'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="tipo_empresa">Tipo empresa actual: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['tipo'])===null||$tmp==='' ? '' : $tmp);?>
</label>
			<select name="tipo_empresa" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['tipo_empresa_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['tipo'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['tipos']->value)&&count($_smarty_tpl->tpl_vars['tipos']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">&nbsp;&nbsp;
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
<?php }} ?>
