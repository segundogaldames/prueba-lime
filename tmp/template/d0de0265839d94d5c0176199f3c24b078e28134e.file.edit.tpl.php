<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-16 14:20:44
         compiled from "/var/www/html/qepd/views/planes/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1875353845a0dd6fc584ff7-96066816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0de0265839d94d5c0176199f3c24b078e28134e' => 
    array (
      0 => '/var/www/html/qepd/views/planes/edit.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1875353845a0dd6fc584ff7-96066816',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dato' => 0,
    'tipoplanes' => 0,
    'tp' => 0,
    'servicios' => 0,
    'serv' => 0,
    'empresas' => 0,
    'emp' => 0,
    'destinatarios' => 0,
    'dest' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0dd6fc5f3b66_35786724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0dd6fc5f3b66_35786724')) {function content_5a0dd6fc5f3b66_35786724($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar Plan</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="codigo">Código:</label>
			<input type="text" name="codigo" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['codigo'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="tipo_plan">Tipo Plan: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['tipo_plan'])===null||$tmp==='' ? '' : $tmp);?>
</label>
			<select name="tipo_plan" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['tipo_plan_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['tipo_plan'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['tipoplanes']->value)&&count($_smarty_tpl->tpl_vars['tipoplanes']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipoplanes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tp']->key => $_smarty_tpl->tpl_vars['tp']->value) {
$_smarty_tpl->tpl_vars['tp']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['tp']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tp']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="servicio">Servicio: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['servicio'])===null||$tmp==='' ? '' : $tmp);?>
</label>
			<select name="servicio" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['servicio_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['servicio'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['servicios']->value)&&count($_smarty_tpl->tpl_vars['servicios']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['serv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servicios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serv']->key => $_smarty_tpl->tpl_vars['serv']->value) {
$_smarty_tpl->tpl_vars['serv']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['serv']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['serv']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="empresa">Empresa: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['empresa'])===null||$tmp==='' ? '' : $tmp);?>
</label>
			<select name="empresa" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['empresa_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['empresa'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['empresas']->value)&&count($_smarty_tpl->tpl_vars['empresas']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['emp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['emp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['empresas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['emp']->key => $_smarty_tpl->tpl_vars['emp']->value) {
$_smarty_tpl->tpl_vars['emp']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['emp']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="destinatario">Destinatario: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['destinatario'])===null||$tmp==='' ? '' : $tmp);?>
</label>
			<select name="destinatario" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['destinatario_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['destinatario'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['destinatarios']->value)&&count($_smarty_tpl->tpl_vars['destinatarios']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['dest'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dest']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['destinatarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dest']->key => $_smarty_tpl->tpl_vars['dest']->value) {
$_smarty_tpl->tpl_vars['dest']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['dest']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dest']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="status">Status:<?php if ($_smarty_tpl->tpl_vars['dato']->value['status']==1) {?>Activo <?php } else { ?>Inactivo<?php }?></label>
			<select name="status" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Activar</option>
				<option value="2">Desactivar</option>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">
		</div>
	</form>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes" class="btn btn-link">Volver</a>
	</p>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
<?php }} ?>
