<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-24 17:03:23
         compiled from "/var/www/html/qepd/views/cinerarios/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11205153885a18891b824b51-93482432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a5825ca5cffcd91e822e5ca5188617046fa6836' => 
    array (
      0 => '/var/www/html/qepd/views/cinerarios/add.tpl',
      1 => 1511557259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11205153885a18891b824b51-93482432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'planes' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a18891b88c316_63671660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a18891b88c316_63671660')) {function content_5a18891b88c316_63671660($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes">Ver Cinerarios</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
imagenes/add">Agregar imagen</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Cinerarios</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="sala">Sala velatorio:<span class="text-danger">*</span></label>
			<select name="sala" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="capilla">Capilla ecuménica:<span class="text-danger">*</span></label>
			<select name="capilla" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="podium">Podium:<span class="text-danger">*</span></label>
			<select name="podium" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="liturgia">Liturgia - responso:<span class="text-danger">*</span></label>
			<select name="liturgia" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="amplificacion">Amplificación:<span class="text-danger">*</span></label>
			<select name="amplificacion" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="diacono">Diácono:<span class="text-danger">*</span></label>
			<select name="diacono" id="" class="form-control">
				<option value="">Seleccione</option>
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
				<option value="">Seleccione</option>
				<option value="1">Básica</option>
				<option value="2">Superior</option>
				<option value="2">No considera</option>
			</select>
		</div>
		<div class="form-group">
			<label for="cafeteria">Ceremonia:<span class="text-danger">*</span></label>
			<select name="ceremonia" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="cafeteria">Incluye ánfora?:<span class="text-danger">*</span></label>
			<select name="anforaincl" id="" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="plan">Seleccione el plan:<span class="text-danger">*</span></label>
			<select name="plan" id="" class="form-control">
				<option value="">Seleccione</option>
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
