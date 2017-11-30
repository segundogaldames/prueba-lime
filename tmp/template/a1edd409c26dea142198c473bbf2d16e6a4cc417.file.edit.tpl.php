<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-17 09:55:40
         compiled from "/var/www/html/qepd/views/velatorios/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5899934445a0ee9f5c54652-85660969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1edd409c26dea142198c473bbf2d16e6a4cc417' => 
    array (
      0 => '/var/www/html/qepd/views/velatorios/edit.tpl',
      1 => 1510926935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5899934445a0ee9f5c54652-85660969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0ee9f5eee376_89822816',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'dato' => 0,
    'planes' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ee9f5eee376_89822816')) {function content_5a0ee9f5eee376_89822816($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
velatorios">Ver Velatorios</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
velatorios/add">Agregar Velatorios</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
imagenes/add">Agregar imagen</a></p>
</div>

<div class="col-md-4">
	<h3>Editar Velatorio</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="tramite">Trámites defunción:<span class="text-danger">*</span></label>
			<input type="text" name="tramite" class="form-control" placeholder="Trámites del velatorio: inscripción, pase, certificados, etc." value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['tramites'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="asesor">Asesor a domicilio:<span class="text-danger">*</span></label>
			<select name="asesor" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['asesor'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['asesor']==1) {?>Si<?php } else { ?>No<?php }?></option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="sala">Sala de velatorio:<span class="text-danger">*</span></label>
			<select name="sala" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['sala'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['sala']==1) {?>Si<?php } else { ?>No<?php }?></option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="capilla">Capilla ecuménica:<span class="text-danger">*</span></label>
			<select name="capilla" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['capilla'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['capilla']==1) {?>Si<?php } else { ?>No<?php }?></option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="cirios">Nº de Cirios:</label></label>
			<input type="number" name="cirios" class="form-control" placeholder="Número de cirios" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['cirios'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="portacirios">Nº de Portacirios:</label></label>
			<input type="number" name="portacirios" class="form-control" placeholder="Número de portacirios" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['portacirios'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="cruces">Nº de Cruces:</label></label>
			<input type="number" name="cruces" class="form-control" placeholder="Número de cruces" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['cruces'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="canastos">Nº de Flores en canasto:</label></label>
			<input type="number" name="canastos" class="form-control" placeholder="Número de flores en canasto" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['florescanastos'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="cubreurna">Nº de Flores cubreurna:</label></label>
			<input type="number" name="cubreurna" class="form-control" placeholder="Número de flores cubreurna" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['florescubreurnas'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="condolencias">Nº de Libros de condolencias:</label></label>
			<input type="number" name="condolencias" class="form-control" placeholder="Número de libros de condolencias" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['condolencias'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="parroco">Párroco:<span class="text-danger">*</span></label>
			<select name="parroco" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['parroco'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['parroco']==1) {?>Si<?php } else { ?>No<?php }?></option>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		</div>
		<div class="form-group">
			<label for="coro">Coro:</label></label>
			<input type="number" name="coro" class="form-control" placeholder="Número de integrantes" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['coro'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="aviso">Nº de Avisos de prensa:</label></label>
			<input type="number" name="avisos" class="form-control" placeholder="Número de avisos" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['avisosprensa'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="tarjeta">Nº de Tarjetas de agradecimiento:</label></label>
			<input type="number" name="tarjeta" class="form-control" placeholder="Número de tarjetas" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['tarjetas'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="cafeteria">Cafeteria:<span class="text-danger">*</span></label>
			<select name="cafeteria" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['cafeteria'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['cafeteria']==1) {?>Básica<?php } elseif ($_smarty_tpl->tpl_vars['dato']->value['cafeteria']==2) {?>Superior<?php } else { ?>No aplica<?php }?></option>
				<option value="1">Básica</option>
				<option value="2">Superior</option>
				<option value="3">No considerada</option>
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
