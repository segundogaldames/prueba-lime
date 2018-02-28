<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-27 14:43:57
         compiled from "/var/www/html/prueba-lime/views/estadocontactos/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21314509285a95a68cb7a034-77049176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b2c3f6c019d73388b9b68be0a58c97e2988eabc' => 
    array (
      0 => '/var/www/html/prueba-lime/views/estadocontactos/add.tpl',
      1 => 1519757034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21314509285a95a68cb7a034-77049176',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a95a68cb7c037_45469624',
  'variables' => 
  array (
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a95a68cb7c037_45469624')) {function content_5a95a68cb7c037_45469624($_smarty_tpl) {?><div class="col-md-6">
	<h2>Nuevo Estado de Contacto</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre:<span class="text-danger">*</span></label>
			<input type="text" name="nombre" placeholder="Nombre de Estado de Contacto" class="form-control">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
			<input type="submit" name="" value="Guardar" class="btn btn-success">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
index" class="btn btn-link">Volver</a>
		</div>
	</form>
</div><?php }} ?>
