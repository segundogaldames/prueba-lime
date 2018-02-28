<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-28 16:56:14
         compiled from "/var/www/html/prueba-lime/views/encuestasusuarios/addUsuarioEncuesta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9351658345a97168bd0b028-96638316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a1bc98487b9580a3a8a3eeff1e49bed8687af41' => 
    array (
      0 => '/var/www/html/prueba-lime/views/encuestasusuarios/addUsuarioEncuesta.tpl',
      1 => 1519851369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9351658345a97168bd0b028-96638316',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a97168bd23e17_27240660',
  'variables' => 
  array (
    'ejecutivos' => 0,
    'ej' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a97168bd23e17_27240660')) {function content_5a97168bd23e17_27240660($_smarty_tpl) {?><div class="col-md-6">
	<h2>Asociar Encuestas y Usuarios</h2>
	<form action="" method="post" name="form">
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
