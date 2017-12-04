<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-01 17:04:29
         compiled from "/var/www/html/prueba-lime/views/campaign/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5065632005a21c3dd8a53e3-03692236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a868cd800d023ea048abe4d8faca576bfaab8f23' => 
    array (
      0 => '/var/www/html/prueba-lime/views/campaign/edit.tpl',
      1 => 1512162262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5065632005a21c3dd8a53e3-03692236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dato' => 0,
    'clientes' => 0,
    'c' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a21c3dd8e40d6_67906204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a21c3dd8e40d6_67906204')) {function content_5a21c3dd8e40d6_67906204($_smarty_tpl) {?><div class="col-md-6">
	<h2>Editar Campaña</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre:</label>
			<input type="text" name="nombre" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Nombre de la campaña">
		</div>
		<div class="form-group">
			<label>Cliente:</label>
			<select name="cliente" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['cliente_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['cliente'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)&&count($_smarty_tpl->tpl_vars['clientes']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label>Campaña ViciDial:</label>
			<input type="text" name="vici" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['vici'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Código de la camapaña en ViciDial">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign" class="btn btn-link">Volver</a>
		</div>
	</form>
</div><?php }} ?>
