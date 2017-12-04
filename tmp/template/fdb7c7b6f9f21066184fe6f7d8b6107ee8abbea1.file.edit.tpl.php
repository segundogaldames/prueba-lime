<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-01 11:33:42
         compiled from "/var/www/html/prueba-lime/views/clientes/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11902709385a216e565f7235-45484512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdb7c7b6f9f21066184fe6f7d8b6107ee8abbea1' => 
    array (
      0 => '/var/www/html/prueba-lime/views/clientes/edit.tpl',
      1 => 1512142420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11902709385a216e565f7235-45484512',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a216e57e23780_79314533',
  'variables' => 
  array (
    'dato' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a216e57e23780_79314533')) {function content_5a216e57e23780_79314533($_smarty_tpl) {?><div class="col-md-6">
	<h2>Editar Cliente</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="nombre" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>
<?php }} ?>
