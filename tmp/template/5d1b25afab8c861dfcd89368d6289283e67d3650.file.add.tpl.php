<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 16:49:08
         compiled from "/var/www/html/prueba-lime/views/clientes/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211187215a20710c4c97f0-51236505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d1b25afab8c861dfcd89368d6289283e67d3650' => 
    array (
      0 => '/var/www/html/prueba-lime/views/clientes/add.tpl',
      1 => 1519851496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211187215a20710c4c97f0-51236505',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a20710c4cff54_96136826',
  'variables' => 
  array (
    'datos' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a20710c4cff54_96136826')) {function content_5a20710c4cff54_96136826($_smarty_tpl) {?><div class="col-md-6">
	<h2>Nuevo Cliente</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="nombre" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>
<?php }} ?>
