<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-29 18:13:05
         compiled from "/var/www/html/prueba-lime/views/roles/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67187245a1f2c296acb49-11116497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9481a38e706be4a3cfd798b7bae61aff235b3405' => 
    array (
      0 => '/var/www/html/prueba-lime/views/roles/add.tpl',
      1 => 1511993537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67187245a1f2c296acb49-11116497',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1f2c296b5024_84234046',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1f2c296b5024_84234046')) {function content_5a1f2c296b5024_84234046($_smarty_tpl) {?><div class="col-md-6">
	<h2>Nuevo Rol</h2>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Nombre:</label>
			<input type="text" name="nombre" placeholder="Nombre de rol" class="form-control" value="">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
		</div>
	</form>
</div><?php }} ?>
