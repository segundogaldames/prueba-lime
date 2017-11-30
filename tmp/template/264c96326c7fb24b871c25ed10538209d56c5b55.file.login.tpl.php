<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 08:25:51
         compiled from "/var/www/html/qepd/views/usuario/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20246092755a1c044f6f0db4-68888593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '264c96326c7fb24b871c25ed10538209d56c5b55' => 
    array (
      0 => '/var/www/html/qepd/views/usuario/login.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20246092755a1c044f6f0db4-68888593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1c044f6f86d9_63600474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1c044f6f86d9_63600474')) {function content_5a1c044f6f86d9_63600474($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Ingreso de Usuarios</h3>
	<p class="text-success">Ingrese sus datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="email">Ingrese correo electrónico: <span class="text-danger">*</span></label>
			<input type="text" name="email" class="form-control">
		</div> 
		<div class="form-group">
			<label for="password">Ingrese password o clave: <span class="text-danger">*</span></label>
			<input type="password" name="password" class="form-control" onpaste="return false">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Ingresar" class="btn btn-success">
		</div>
	</form>
</div>
<div class="col-md-4">
	<h3>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/cerrar" onclick="return abandonarIngreso('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/cerrar');">
			<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
/views/layout/default/img/cerrar.png" title="Abandonar ingreso">
		</a>
	</h3>
</div>

<?php }} ?>
