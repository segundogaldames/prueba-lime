<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-27 15:42:52
         compiled from "/var/www/html/prueba-lime/views/estadollamadas/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1016459815a95b34b681480-47023873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c273bc9899a185e2c4a9273be458c37bf6480561' => 
    array (
      0 => '/var/www/html/prueba-lime/views/estadollamadas/edit.tpl',
      1 => 1519760568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1016459815a95b34b681480-47023873',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a95b34b8a60e0_01453667',
  'variables' => 
  array (
    'dato' => 0,
    'estado_contactos' => 0,
    'ec' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a95b34b8a60e0_01453667')) {function content_5a95b34b8a60e0_01453667($_smarty_tpl) {?><div class="col-md-6">
	<h2>Editar Estado de Llamadas</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Estado de Llamada</label>
			<input type="text" name="nombre" class="form-control" placeholder="Estado de Llamada" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label>Estado de Contacto</label>
			<select name="est_contacto" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['estado_contacto'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['contacto'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['estado_contactos']->value)&&count($_smarty_tpl->tpl_vars['estado_contactos']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['ec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ec']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estado_contactos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ec']->key => $_smarty_tpl->tpl_vars['ec']->value) {
$_smarty_tpl->tpl_vars['ec']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['ec']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ec']->value['nombre'];?>
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
estadollamadas" class="btn btn-link">Volver</a>
		</div>
	</form>
</div><?php }} ?>
