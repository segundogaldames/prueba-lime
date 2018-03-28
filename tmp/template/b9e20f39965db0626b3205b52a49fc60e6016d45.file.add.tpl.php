<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-28 17:48:03
         compiled from "/var/www/html/prueba-lime/views/campaign/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:283898295a21be7b65e4c8-92226530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9e20f39965db0626b3205b52a49fc60e6016d45' => 
    array (
      0 => '/var/www/html/prueba-lime/views/campaign/add.tpl',
      1 => 1522269946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283898295a21be7b65e4c8-92226530',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a21be7b678165_36876752',
  'variables' => 
  array (
    'datos' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a21be7b678165_36876752')) {function content_5a21be7b678165_36876752($_smarty_tpl) {?><div class="col-md-6">
	<h2>Nueva Campaña</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre:</label>
			<input type="text" name="nombre" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Nombre de la campaña">
		</div>
		<div class="form-group">
			<label>Campaña ViciDial:</label>
			<input type="text" name="vici" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['vici'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Código de la camapaña en ViciDial">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign" class="btn btn-link">Volver</a>
		</div>
	</form>
</div><?php }} ?>
