<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-09 09:49:36
         compiled from "/var/www/html/prueba-lime/views/cuotas/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8437625655aa28dd72c7a49-28043333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07c7a1b889f84ea9c7bf1ca007132a2942cb53ca' => 
    array (
      0 => '/var/www/html/prueba-lime/views/cuotas/edit.tpl',
      1 => 1520603374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8437625655aa28dd72c7a49-28043333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5aa28dd72e52e5_07833354',
  'variables' => 
  array (
    'dato' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa28dd72e52e5_07833354')) {function content_5aa28dd72e52e5_07833354($_smarty_tpl) {?><div class="col-md-6">
	<h2>Editar Cuota</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Desde</label>
			<input type="date" name="desde" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['desde'];?>
">
		</div>
		<div class="form-group">
			<label>Hasta</label>
			<input type="date" name="hasta" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['hasta'];?>
">
		</div>
		<div class="form-group">
			<label>Valor</label>
			<input type="number" name="valor" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['valor'];?>
">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/view/<?php echo $_smarty_tpl->tpl_vars['dato']->value['encuesta_id'];?>
" class="btn btn-link">Volver</a>
		</div>
	</form>
</div><?php }} ?>
