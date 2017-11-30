<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 11:15:20
         compiled from "/var/www/html/qepd/views/roles/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20989182095a1c2c08135444-87691947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf0029f85d05382bd24725e6a628ce861149048f' => 
    array (
      0 => '/var/www/html/qepd/views/roles/edit.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20989182095a1c2c08135444-87691947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1c2c0818b2e5_81060501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1c2c0818b2e5_81060501')) {function content_5a1c2c0818b2e5_81060501($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Editar Role</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre:</label>
			<input type="text" name="nombre" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Editar" class="btn btn-success">
		</div>
	</form>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
<?php }} ?>
