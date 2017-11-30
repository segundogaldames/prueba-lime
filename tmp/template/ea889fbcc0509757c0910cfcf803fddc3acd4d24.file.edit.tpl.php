<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-24 15:26:35
         compiled from "/var/www/html/qepd/views/sepultaciones/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16982707575a18726b4bb571-94886333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea889fbcc0509757c0910cfcf803fddc3acd4d24' => 
    array (
      0 => '/var/www/html/qepd/views/sepultaciones/edit.tpl',
      1 => 1511551592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16982707575a18726b4bb571-94886333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'dato' => 0,
    'datos' => 0,
    'planes' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a18726b79d860_00240012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a18726b79d860_00240012')) {function content_5a18726b79d860_00240012($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes">Ver Servicios de Sepultaciones</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
imagenes/add">Agregar imagen</a></p>
</div>

<div class="col-md-4">
	<h3>Editar Sepultaciones</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="sala">Sala velatorio:<span class="text-danger">*</span></label>
			<select name="sala" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['sala'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['sala']==1) {?>Si<?php } else { ?>No<?php }?></option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="capilla">Capilla ecuménica:<span class="text-danger">*</span></label>
			<select name="capilla" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['capilla'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['capilla']==1) {?>Si<?php } else { ?>No<?php }?></option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="liturgia">Liturgia - responso:<span class="text-danger">*</span></label>
			<select name="liturgia" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['liturgia'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['liturgia']==1) {?>Si<?php } else { ?>No<?php }?></option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="toldos">Número de toldos:</label>
			<input type="number" name="toldos" class="form-control" placeholder="Numero de toldos" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['toldos'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="sillas">Número de sillas:</label>
			<input type="number" name="sillas" class="form-control" placeholder="Numero de sillas" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['sillas'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="amplificacion">Amplificación:<span class="text-danger">*</span></label>
			<select name="amplificacion" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['amplificacion'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['amplificacion']==1) {?>Si<?php } else { ?>No<?php }?></option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="diacono">Diácono:<span class="text-danger">*</span></label>
			<select name="diacono" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['diacono'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['diacono']==1) {?>Si<?php } else { ?>No<?php }?></option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="coro">Coro:</label>
			<input type="number" name="pasajeros" class="form-control" placeholder="Número de integrantes" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['coro'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="cafeteria">Cafetería:<span class="text-danger">*</span></label>
			<select name="cafeteria" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['cafeteria'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['cafeteria']==1) {?>Básica<?php } elseif ($_smarty_tpl->tpl_vars['dato']->value['cafeteria']==2) {?>Superior<?php } else { ?>No considerada<?php }?></option>
				<option value="1">Básica</option>
				<option value="2">Superior</option>
			</select>
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
