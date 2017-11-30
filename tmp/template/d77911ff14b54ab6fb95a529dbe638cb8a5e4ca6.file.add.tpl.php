<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-16 14:36:19
         compiled from "/var/www/html/qepd/views/velatorios/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11434519615a0ddaa364e762-34861392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd77911ff14b54ab6fb95a529dbe638cb8a5e4ca6' => 
    array (
      0 => '/var/www/html/qepd/views/velatorios/add.tpl',
      1 => 1510857291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11434519615a0ddaa364e762-34861392',
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
  'unifunc' => 'content_5a0ddaa36bc733_83184510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ddaa36bc733_83184510')) {function content_5a0ddaa36bc733_83184510($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
velatorios">Ver Velatorios</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
velatorios/add">Agregar Velatorios</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
imagenes/add">Agregar imagen</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Velatorio</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="tramite">Trámites defunción:<span class="text-danger">*</span></label>
			<input type="text" name="tramite" class="form-control" placeholder="Trámites del velatorio: inscripción, pase, certificados, etc." value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['tramite'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="asesor">Asesor a domicilio:<span class="text-danger">*</span></label>
			<select name="asesor" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="sala">Sala de velatorio:<span class="text-danger">*</span></label>
			<select name="sala" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="capilla">Capilla ecuménica:<span class="text-danger">*</span></label>
			<select name="capilla" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="cirio">Nº de Cirios:</label></label>
			<input type="number" name="cirios" class="form-control" placeholder="Número de cirios" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cirio'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="portacirios">Nº de Portacirios:</label></label>
			<input type="number" name="portacirios" class="form-control" placeholder="Número de portacirios" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['portacirios'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="cruz">Nº de Cruces:</label></label>
			<input type="number" name="cruz" class="form-control" placeholder="Número de cruces" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cruz'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="canasto">Nº de Flores en canasto:</label></label>
			<input type="number" name="canasto" class="form-control" placeholder="Número de flores en canasto" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['canasto'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="cubreurna">Nº de Flores cubreurna:</label></label>
			<input type="number" name="cubreurna" class="form-control" placeholder="Número de flores cubreurna" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cubreurna'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="libro">Nº de Libros de condolencias:</label></label>
			<input type="number" name="libro" class="form-control" placeholder="Número de libros de condolencias" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['libro'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="parroco">Párroco:<span class="text-danger">*</span></label>
			<select name="parroco" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="coro">Coro:</label></label>
			<input type="number" name="coro" class="form-control" placeholder="Número de integrantes" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['coro'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="aviso">Nº de Avisos de prensa:</label></label>
			<input type="number" name="aviso" class="form-control" placeholder="Número de avisos" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['coro'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="tarjeta">Nº de Tarjetas de agradecimiento:</label></label>
			<input type="number" name="tarjeta" class="form-control" placeholder="Número de tarjetas" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['tarjeta'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="cafeteria">Cafeteria:<span class="text-danger">*</span></label>
			<select name="cafeteria" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Básica</option>
				<option value="2">Superior</option>
				<option value="3">No considerada</option>
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
