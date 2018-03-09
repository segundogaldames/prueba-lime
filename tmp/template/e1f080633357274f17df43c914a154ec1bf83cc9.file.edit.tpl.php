<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-09 12:13:01
         compiled from "/var/www/html/prueba-lime/views/camposcontactos/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11548215025aa2b28d6f6923-75557241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1f080633357274f17df43c914a154ec1bf83cc9' => 
    array (
      0 => '/var/www/html/prueba-lime/views/camposcontactos/edit.tpl',
      1 => 1520611966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11548215025aa2b28d6f6923-75557241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dato' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5aa2b28d73cf60_66178500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa2b28d73cf60_66178500')) {function content_5aa2b28d73cf60_66178500($_smarty_tpl) {?><div class="col-md-6">
	<h2>Editar Campos Contacto</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre:</label>
			<input type="text" name="nombre" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
">
		</div>
		<div class="form-group">
			<label>Téléfono:</label>
			<input type="text" name="telefono" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['telefono'];?>
">
		</div>
		<div class="form-group">
			<label>RUT:</label>
			<input type="text" name="rut" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['rut'];?>
">
		</div>
		<div class="form-group">
			<label>Comuna:</label>
			<input type="text" name="comuna" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['comuna'];?>
">
		</div>
		<div class="form-group">
			<label>Región:</label>
			<input type="text" name="region" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['region'];?>
">
		</div>
		<div class="form-group">
			<label>Código:</label>
			<input type="text" name="codigo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['codigo'];?>
">
		</div>
		<div class="form-group">
			<label>Dato 1:</label>
			<input type="text" name="dato1" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dato1'];?>
">
		</div>
		<div class="form-group">
			<label>Dato 2:</label>
			<input type="text" name="dato2" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dato2'];?>
">
		</div>
		<div class="form-group">
			<label>Dato 3:</label>
			<input type="text" name="dato3" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dato3'];?>
">
		</div>
		<div class="form-group">
			<label>Dato 4:</label>
			<input type="text" name="dato4" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dato4'];?>
">
		</div>
		<div class="form-group">
			<label>Dato 5:</label>
			<input type="text" name="dato5" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dato5'];?>
">
		</div>
		<div class="form-group">
			<label>Dato 6:</label>
			<input type="text" name="dato6" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dato6'];?>
">
		</div>
		<div class="form-group">
			<label>Dato 7:</label>
			<input type="text" name="dato7" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dato7'];?>
">
		</div>
		<div class="form-group">
			<label>Dato 8:</label>
			<input type="text" name="dato8" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dato8'];?>
">
		</div>
		<div class="form-group">
			<label>Dato 9:</label>
			<input type="text" name="dato9" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dato9'];?>
">
		</div>
		<div class="form-group">
			<label>Dato 10:</label>
			<input type="text" name="dato10" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dato10'];?>
">
		</div>
		<div class="form-group">
			<label>Dato 11:</label>
			<input type="text" name="dato11" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['dato11'];?>
">
		</div>
		<div class="form-group">
			<label>Fecha 1:</label>
			<input type="text" name="fecha1" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['fecha1'];?>
">
		</div>
		<div class="form-group">
			<label>Fecha 2:</label>
			<input type="text" name="fecha2" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['fecha2'];?>
">
		</div>
		<div class="form-group">
			<label>Fecha 3:</label>
			<input type="text" name="fecha3" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['fecha3'];?>
">
		</div>
		<div class="form-group">
			<label>Teléfono 2:</label>
			<input type="text" name="telefono2" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['telefono2'];?>
">
		</div>
		<div class="form-group">
			<label>Teléfono 3:</label>
			<input type="text" name="telefono3" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['telefono3'];?>
">
		</div>
		<div class="form-group">
			<label>Teléfono 4:</label>
			<input type="text" name="telefono4" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['telefono4'];?>
">
		</div>
		<div class="form-group">
			<label>Teléfono 5:</label>
			<input type="text" name="telefono5" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['telefono5'];?>
">
		</div>
		<div class="form-group">
			<label>Teléfono 6:</label>
			<input type="text" name="telefono6" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['telefono6'];?>
">
		</div>
		<div class="form-group">
			<label>Teléfono 7:</label>
			<input type="text" name="telefono7" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['telefono7'];?>
">
		</div>
		<div class="form-group">
			<label>Teléfono 8:</label>
			<input type="text" name="telefono8" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['telefono8'];?>
">
		</div>
		<div class="form-group">
			<label>Teléfono 9:</label>
			<input type="text" name="telefono9" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['telefono9'];?>
">
		</div>
		<div class="form-group">
			<label>Teléfono 10:</label>
			<input type="text" name="telefono10" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['telefono10'];?>
">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
camposcontactos" class="btn btn-link">Volver</a>
		</div>
	</form>
</div><?php }} ?>
