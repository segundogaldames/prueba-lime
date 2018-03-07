<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-06 17:11:33
         compiled from "/var/www/html/prueba-lime/views/encuestasusuarios/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:652317195a25b9d017cdc9-73774150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17671849f39fe14168292de6431c379ab96d0444' => 
    array (
      0 => '/var/www/html/prueba-lime/views/encuestasusuarios/add.tpl',
      1 => 1519851552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '652317195a25b9d017cdc9-73774150',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a25b9d01a76f8_52191054',
  'variables' => 
  array (
    'encuestas' => 0,
    'e' => 0,
    'ejecutivos' => 0,
    'ej' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a25b9d01a76f8_52191054')) {function content_5a25b9d01a76f8_52191054($_smarty_tpl) {?><div class="col-md-6">
	<h2>Asociar Encuestas y Usuarios</h2>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Encuesta</label>
			<select name="encuesta" class="form-control">
				<option value="">Seleccione</option>
				<?php if (isset($_smarty_tpl->tpl_vars['encuestas']->value)&&count($_smarty_tpl->tpl_vars['encuestas']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['encuestas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
			<label>Usuario</label>
			<select name="usuario" class="form-control">
				<option value="">Seleccione</option>
				<?php if (isset($_smarty_tpl->tpl_vars['ejecutivos']->value)&&count($_smarty_tpl->tpl_vars['ejecutivos']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['ej'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ej']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ejecutivos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ej']->key => $_smarty_tpl->tpl_vars['ej']->value) {
$_smarty_tpl->tpl_vars['ej']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['ej']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ej']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>				
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestasusuarios" class="btn btn-link">Volver</a>
		</div>
	</form>
</div><?php }} ?>
