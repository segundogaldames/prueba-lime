<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-28 13:11:13
         compiled from "/var/www/html/prueba-lime/views/contactos/addContactosEncuesta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6567405905a96e2b1b17c98-60621387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5c3e5ddbcbb6c78f0aa0a2170502871e80fc0c2' => 
    array (
      0 => '/var/www/html/prueba-lime/views/contactos/addContactosEncuesta.tpl',
      1 => 1519837808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6567405905a96e2b1b17c98-60621387',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enviar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a96e2b1b24a36_06731131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a96e2b1b24a36_06731131')) {function content_5a96e2b1b24a36_06731131($_smarty_tpl) {?><div class="col-md-6">
	<h2>Cargar Contactos</h2>
	<form action="" method="post" enctype="multipart/form-data" class="form-inline">
		<input type="file" name="excel" class="form-control">
		<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
		<input type="submit" value="Cargar" class="btn btn-success">
	</form>
</div>	<?php }} ?>
