<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-06 12:20:06
         compiled from "/var/www/html/prueba-lime/views/contactos/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2062633575a79d5b6989dd8-99807444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b520feffad95d8ff56d4d5857f1724c7ea4d420c' => 
    array (
      0 => '/var/www/html/prueba-lime/views/contactos/add.tpl',
      1 => 1517933907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062633575a79d5b6989dd8-99807444',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a79d5b6990d54_76740410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a79d5b6990d54_76740410')) {function content_5a79d5b6990d54_76740410($_smarty_tpl) {?><div class="col-md-6">
	<h2>Agregar Contactos</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<input type="file" name="excel" class="form-control">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Cargar" class="btn btn-success">
		</div>
		
	</form>
</div><?php }} ?>
