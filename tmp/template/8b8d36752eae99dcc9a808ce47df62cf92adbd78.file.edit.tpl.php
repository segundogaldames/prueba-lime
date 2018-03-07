<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 15:59:30
         compiled from "/var/www/html/prueba-lime/views/criterios/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19344013665aa0446bdcd339-47294240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b8d36752eae99dcc9a808ce47df62cf92adbd78' => 
    array (
      0 => '/var/www/html/prueba-lime/views/criterios/edit.tpl',
      1 => 1520452767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19344013665aa0446bdcd339-47294240',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5aa0446bdde370_01775011',
  'variables' => 
  array (
    'dato' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa0446bdde370_01775011')) {function content_5aa0446bdde370_01775011($_smarty_tpl) {?><div class="col-md-6">
	<h2>Editar Criterio Encuesta <?php echo $_smarty_tpl->tpl_vars['dato']->value['encuesta'];?>
</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre del criterio</label>
			<input type="text" name="nombre" placeholder="Nombre del criterio" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
">
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
