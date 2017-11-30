<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 12:50:00
         compiled from "/var/www/html/qepd/views/tipoempresas/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2612644115a1c4238aa30f8-10683746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61088f33166afbab11b2240c6218269543497975' => 
    array (
      0 => '/var/www/html/qepd/views/tipoempresas/edit.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2612644115a1c4238aa30f8-10683746',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dato' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1c4238ab4026_80740880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1c4238ab4026_80740880')) {function content_5a1c4238ab4026_80740880($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar Tipo Empresa</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">&nbsp;&nbsp;
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoempresas">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
<?php }} ?>
