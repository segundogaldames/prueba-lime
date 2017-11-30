<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-24 17:01:06
         compiled from "/var/www/html/qepd/views/componentes/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2576596235a188893007fb6-47806244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '281cc582fb6c3ca7e04c19103b63b23654365041' => 
    array (
      0 => '/var/www/html/qepd/views/componentes/add.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2576596235a188893007fb6-47806244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'datos' => 0,
    'servicios' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a18889304c801_95490523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a18889304c801_95490523')) {function content_5a18889304c801_95490523($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
componentes">Ver Componentes</a></p>
</div>

<div class="col-md-4">
	<h3>Agregar Componente</h3>
	<p class="text-success">Ingrese los datos en el formulario...</p>
	<p class="text-danger">* Datos Obligatorios</p>
	<form action="" method="post" name="form" id="form">
		<div class="form-group">
			<label for="nombre">Ingrese nombre: <span class="text-danger">*</span></label>
			<input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Nombre del componente">
		</div>
		<div class="form-group">
			<label for="servicio">Seleccione un servicio</label>
			<select name="servicio" id="" class="form-control">
				<option value="">Servicios</option>
				<?php if (isset($_smarty_tpl->tpl_vars['servicios']->value)&&count($_smarty_tpl->tpl_vars['servicios']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servicios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<label for="url">Ingrese la url:</label>
			<input type="text" name="url" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['url'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Url del componente del tipo controlador/metodo">
		</div>
		<div class="form-group">
			<label for="url">Ingrese la url de vista:</label>
			<input type="text" name="url_view" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['url_view'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Url vista del componente del tipo controlador/metodo">
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
