<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-17 12:02:52
         compiled from "/var/www/html/qepd/views/traslados/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19412749175a0f082cc543c3-94133105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '724ea2ae371205395b957fb31f81902467342dae' => 
    array (
      0 => '/var/www/html/qepd/views/traslados/edit.tpl',
      1 => 1510934365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19412749175a0f082cc543c3-94133105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'dato' => 0,
    'planes' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0f082ccb2766_74380122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0f082ccb2766_74380122')) {function content_5a0f082ccb2766_74380122($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
traslados">Ver Traslados</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
imagenes/add">Agregar imagen</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Traslado</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="instalacion">Carroza de instalación:<span class="text-danger">*</span></label>
			<select name="instalacion" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['instalacion'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['instalacion']==1) {?>Si<?php } else { ?>No<?php }?></option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="funeral">Carroza de funeral:<span class="text-danger">*</span></label>
			<select name="funeral" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['funeral'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['funeral']==1) {?>Si<?php } else { ?>No<?php }?></option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="conflores">Carroza con flores:<span class="text-danger">*</span></label>
			<select name="conflores" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['conflores'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['conflores']==1) {?>Si<?php } else { ?>No<?php }?></option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="acompanamiento">Vehículo de acompañamiento:<span class="text-danger">*</span></label>
			<select name="acompanamiento" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['acompanamiento'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['acompanamiento']==1) {?>Si<?php } else { ?>No<?php }?></option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="pasajeros">Nº de Pasajeros:</label>
			<input type="number" name="pasajeros" class="form-control" placeholder="Número de pasajeros" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['pasajeros'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="plan">Seleccione el plan:<span class="text-danger">*</span></label>
			<select name="plan" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['plan_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['plan'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['planes']->value)&&count($_smarty_tpl->tpl_vars['planes']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
<?php }} ?>
