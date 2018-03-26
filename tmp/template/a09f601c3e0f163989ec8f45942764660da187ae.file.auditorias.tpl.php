<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-26 17:55:58
         compiled from "/var/www/html/prueba-lime/views/contactos/auditorias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9647769235a99bfbee62244-13450891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a09f601c3e0f163989ec8f45942764660da187ae' => 
    array (
      0 => '/var/www/html/prueba-lime/views/contactos/auditorias.tpl',
      1 => 1521044994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9647769235a99bfbee62244-13450891',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a99bfbee70af0_14603835',
  'variables' => 
  array (
    'enviar' => 0,
    '_layoutParams' => 0,
    'encuesta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a99bfbee70af0_14603835')) {function content_5a99bfbee70af0_14603835($_smarty_tpl) {?><div class="row justify-content-md-center">
	<div class="col-md-6">
		<h2>Auditar</h2>
		<form action="" method="post">
			<div class="form-group">
				<label>Estado de la auditoria</label>
				<select name="estado" class="form-control">
					<option value="">Seleccione...</option>
					<option value="1">Auditada</option>
					<option value="2">Pendiente</option>
				</select>
			</div>
			<div class="form-group">
				<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
				<input type="submit" value="Guardar" class="btn btn-success">
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
index" class="btn btn-link">Volver</a>
			</div>
			
		</form>
	</div>
</div>

<div class="row justify-content-md-center">
	<div class="col-md-8">
		<?php if (isset($_smarty_tpl->tpl_vars['encuesta']->value)&&count($_smarty_tpl->tpl_vars['encuesta']->value)) {?>
			<iframe src="<?php echo $_smarty_tpl->tpl_vars['encuesta']->value['link'];?>
" marginwidth="0" marginheight="0" name="ventana_iframe" scrolling="no" border="0" 
		frameborder="0" width="750" height="4800"></iframe>							
		<?php }?>
	</div>
</div>
<?php }} ?>
