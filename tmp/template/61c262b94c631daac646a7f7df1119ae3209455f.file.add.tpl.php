<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 12:59:50
         compiled from "/var/www/html/qepd/views/empresas/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4078483575a1c3a3af2c823-03126112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c262b94c631daac646a7f7df1119ae3209455f' => 
    array (
      0 => '/var/www/html/qepd/views/empresas/add.tpl',
      1 => 1511801987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4078483575a1c3a3af2c823-03126112',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1c3a3b0342f3_43126637',
  'variables' => 
  array (
    'datos' => 0,
    'usuarios' => 0,
    'u' => 0,
    'tipos' => 0,
    't' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1c3a3b0342f3_43126637')) {function content_5a1c3a3b0342f3_43126637($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
</div>

<div class="col-md-4">
	<h3>Agregar Empresa</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Nombre de la empresa">
		</div>
		<div class="form-group">
			<label for="email">Ingrese email: <span class="text-danger">*</span></label>
			<input type="text" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Email de la empresa">
		</div>
		<div class="form-group">
			<label for="rut">Ingrese RUT: <span class="text-danger">*</span></label>
			<input type="text" name="rut" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['rut'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="RUT de la empresa">
		</div>
		<div class="form-group">
			<label for="usuario">Seleccione a un usuario</label>
			<select name="usuario" id="" class="form-control">
				<option value="">Usuarios</option>
				<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['u']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['apellido'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="usuario">Seleccione un tipo de empresa:</label>
			<select name="tipo_empresa" id="" class="form-control">
				<option value="">Tipo Empresa</option>
				<?php if (isset($_smarty_tpl->tpl_vars['tipos']->value)&&count($_smarty_tpl->tpl_vars['tipos']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Registrar" class="btn btn-success">&nbsp;&nbsp;
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas">Volver</a>
		</div>
	</form>
</div>

<div class="col-md-4">
	
</div>
<?php }} ?>
