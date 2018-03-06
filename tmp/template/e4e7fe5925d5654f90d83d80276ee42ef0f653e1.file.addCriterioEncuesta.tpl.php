<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-05 16:09:47
         compiled from "/var/www/html/prueba-lime/views/criterios/addCriterioEncuesta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17050178925a9da40bd49ff9-40113714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4e7fe5925d5654f90d83d80276ee42ef0f653e1' => 
    array (
      0 => '/var/www/html/prueba-lime/views/criterios/addCriterioEncuesta.tpl',
      1 => 1520278958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17050178925a9da40bd49ff9-40113714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'encuesta' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9da40bd71776_71293990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9da40bd71776_71293990')) {function content_5a9da40bd71776_71293990($_smarty_tpl) {?><div class="col-md-6">
	<h2>Nuevo Criterio Encuesta <?php echo $_smarty_tpl->tpl_vars['encuesta']->value['nombre'];?>
</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre del criterio</label>
			<input type="text" name="nombre" placeholder="Nombre del criterio" class="form-control">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas" class="btn btn-link">Volver</a>
		</div>
	</form>
</div><?php }} ?>
