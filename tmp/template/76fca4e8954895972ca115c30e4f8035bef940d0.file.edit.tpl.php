<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-16 14:16:17
         compiled from "/var/www/html/qepd/views/sedes/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8144177945a0dd5f166bb32-76750315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76fca4e8954895972ca115c30e4f8035bef940d0' => 
    array (
      0 => '/var/www/html/qepd/views/sedes/edit.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8144177945a0dd5f166bb32-76750315',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dato' => 0,
    'empresas' => 0,
    'e' => 0,
    'comunas' => 0,
    'c' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0dd5f1874af6_69393103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0dd5f1874af6_69393103')) {function content_5a0dd5f1874af6_69393103($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar Sede</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['sede'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="calle">Calle:</label>
			<input type="calle" name="calle" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['calle'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="numero">Numero:</label>
			<input type="text" name="numero" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['numero'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="sector">Sector:</label>
			<input type="text" name="sector" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['sector'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="ubicacion">Ubicaciòn:</label>
			<input type="text" name="ubicacion" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['ubicacion'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="empresa">Empresa actual: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['empresa'])===null||$tmp==='' ? '' : $tmp);?>
</label>
			<select name="empresa" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['empresa_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['empresa'];?>
</option>
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
			<label for="comuna">Comuna actual: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['comuna'])===null||$tmp==='' ? '' : $tmp);?>
</label>
			<select name="comuna" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['comuna_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['comuna'];?>
</option>
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
			<input type="submit" value="Guardar Cambios" class="btn btn-success">&nbsp;&nbsp;
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
<?php }} ?>
