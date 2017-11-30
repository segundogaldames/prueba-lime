<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-29 15:48:22
         compiled from "/var/www/html/prueba-lime/views/usuario/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15049992145a1f0f06457f43-59181556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9c8137eeeaad4def2f78a2486634aecdfecd40d' => 
    array (
      0 => '/var/www/html/prueba-lime/views/usuario/login.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15049992145a1f0f06457f43-59181556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1f0f06487017_72397194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1f0f06487017_72397194')) {function content_5a1f0f06487017_72397194($_smarty_tpl) {?><div class="col-md-2"></div>
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
