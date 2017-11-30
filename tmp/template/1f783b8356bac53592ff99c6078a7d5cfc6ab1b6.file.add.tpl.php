<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-16 14:15:49
         compiled from "/var/www/html/qepd/views/sedes/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182975175a0dd5d5775f11-91943428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f783b8356bac53592ff99c6078a7d5cfc6ab1b6' => 
    array (
      0 => '/var/www/html/qepd/views/sedes/add.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182975175a0dd5d5775f11-91943428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'empresas' => 0,
    'e' => 0,
    'comunas' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0dd5d5b0fb31_83123888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0dd5d5b0fb31_83123888')) {function content_5a0dd5d5b0fb31_83123888($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes">Ver Sedes</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Sede o Sucursal</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre:<span class="text-danger">*</span></label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombre de la sede o sucursal" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="calle">Ingrese calle:<span class="text-danger">*</span></label></label>
			<input type="text" name="calle" class="form-control" placeholder="Calle donde se ubica la sede o sucursal" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['calle'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="numero">Ingrese número:<span class="text-danger">*</span></label></label>
			<input type="text" name="numero" class="form-control" placeholder="Número donde se ubica la sede o sucursal" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['numero'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="sector">Ingrese sector (opcional):</label>
			<input type="text" name="sector" class="form-control" placeholder="Sector donde se ubica la sede o sucursal" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['sector'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="ubicacion">Ingrese ubicación (opcional):</label>
			<input type="text" name="ubicacion" class="form-control" placeholder="Ubicación, coordenadas, mapa de sede o sucursal" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['ubicacion'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="empresa">Seleccione una empresa:</label>
			<select name="empresa" id="" class="form-control">
				<option value="">Empresas</option>
				<?php if (isset($_smarty_tpl->tpl_vars['empresas']->value)&&count($_smarty_tpl->tpl_vars['empresas']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['empresas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="comuna">Seleccione comuna:</label>
			<select name="comuna" id="" class="form-control">
				<option value="">Comunas</option>
				<?php if (isset($_smarty_tpl->tpl_vars['comunas']->value)&&count($_smarty_tpl->tpl_vars['comunas']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comunas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['comuna'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Registrar" class="btn btn-success">
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
<?php }} ?>
