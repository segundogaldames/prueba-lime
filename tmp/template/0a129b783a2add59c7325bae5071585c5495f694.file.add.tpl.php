<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 12:53:22
         compiled from "/var/www/html/qepd/views/tipoempresas/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21018481305a1c425f4d92e3-49569778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a129b783a2add59c7325bae5071585c5495f694' => 
    array (
      0 => '/var/www/html/qepd/views/tipoempresas/add.tpl',
      1 => 1511801598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21018481305a1c425f4d92e3-49569778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1c425f4ef6d7_33421704',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1c425f4ef6d7_33421704')) {function content_5a1c425f4ef6d7_33421704($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2"></div>

<div class="col-md-4">
	<h3>Agregar Tipo Empresa</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre tipo empresa">
		</div>
		
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Registrar" class="btn btn-success">&nbsp;&nbsp;
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoempresas">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
<?php }} ?>
