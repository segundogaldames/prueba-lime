<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-27 15:06:47
         compiled from "/var/www/html/prueba-lime/views/estadollamadas/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20999778215a7b0cadcf7692-76272182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '109eb5603c8dfa383d5daf1a53037cc9026103d5' => 
    array (
      0 => '/var/www/html/prueba-lime/views/estadollamadas/add.tpl',
      1 => 1519758403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20999778215a7b0cadcf7692-76272182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a7b0cadd025c3_68485735',
  'variables' => 
  array (
    'estado_contacto' => 0,
    'ec' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b0cadd025c3_68485735')) {function content_5a7b0cadd025c3_68485735($_smarty_tpl) {?><div class="col-md-6">
	<h2>Nuevo Estado de Llamadas</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Estado de Llamada</label>
			<input type="text" name="nombre" class="form-control" placeholder="Estado de Llamada">
		</div>
		<div class="form-group">
			<label>Estado de Contacto</label>
			<select name="est_contacto" class="form-control">
				<option value="">Seleccione</option>
				<?php if (isset($_smarty_tpl->tpl_vars['estado_contacto']->value)&&count($_smarty_tpl->tpl_vars['estado_contacto']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['ec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ec']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estado_contacto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
