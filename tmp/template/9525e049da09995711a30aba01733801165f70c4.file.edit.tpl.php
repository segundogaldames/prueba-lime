<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-16 14:16:35
         compiled from "/var/www/html/qepd/views/telefonos/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10677955175a0dd603370c23-93588466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9525e049da09995711a30aba01733801165f70c4' => 
    array (
      0 => '/var/www/html/qepd/views/telefonos/edit.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10677955175a0dd603370c23-93588466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dato' => 0,
    'sedes' => 0,
    's' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0dd6033c43b9_88831876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0dd6033c43b9_88831876')) {function content_5a0dd6033c43b9_88831876($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar Teléfono</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label for="numero">Numero:</label>
			<input type="text" name="numero" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['numero'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="sedes">Sede actual: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['sede'])===null||$tmp==='' ? '' : $tmp);?>
</label>
			<select name="sede" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['sede_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['sede'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['sedes']->value)&&count($_smarty_tpl->tpl_vars['sedes']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sedes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['sede'];?>
 - <?php echo $_smarty_tpl->tpl_vars['s']->value['empresa'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>		
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">&nbsp;&nbsp;
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
<?php }} ?>
