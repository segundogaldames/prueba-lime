<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-07 10:48:13
         compiled from "/var/www/html/prueba-lime/views/estadollamadas/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17632707215a7b117b7b4ee6-48787422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1a6f814e90c7bafbec67e7694ecff916c208f5f' => 
    array (
      0 => '/var/www/html/prueba-lime/views/estadollamadas/index.tpl',
      1 => 1518014890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17632707215a7b117b7b4ee6-48787422',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a7b117b7f77a3_53523290',
  'variables' => 
  array (
    'estado_llamadas' => 0,
    'ell' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7b117b7f77a3_53523290')) {function content_5a7b117b7f77a3_53523290($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-10">
	<h2>Estado de Llamadas</h2>
	<?php if (isset($_smarty_tpl->tpl_vars['estado_llamadas']->value)&&count($_smarty_tpl->tpl_vars['estado_llamadas']->value)) {?>
		
			<table class="table table-hover">
				<tr>
					<th>Nombre</th>
					<th>Acciones</th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['ell'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ell']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estado_llamadas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ell']->key => $_smarty_tpl->tpl_vars['ell']->value) {
$_smarty_tpl->tpl_vars['ell']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['ell']->value['nombre'];?>
</td>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
estadollamadas/view/<?php echo $_smarty_tpl->tpl_vars['ell']->value['id'];?>
" class="btn btn-link btn-sm">Editar</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
estadollamadas/delete/<?php echo $_smarty_tpl->tpl_vars['ell']->value['id'];?>
" class="btn btn-link btn-sm" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
estadollamadas/delete/<?php echo $_smarty_tpl->tpl_vars['ell']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['ell']->value['nombre'];?>
')">Eliminar</a>
					</td>
				</tr>
				<?php } ?>
			</table>
		
	<?php } else { ?>
		<p class="text-info">No hay estado de llamadas registradas</p>
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
estadollamadas/add" class="btn btn-link">Agregar Estado Llamadas</a></p>
</div><?php }} ?>
