<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-01 16:47:35
         compiled from "/var/www/html/prueba-lime/views/campaign/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3750908645a21ba087ea250-47286482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dacdd27953e645ce387d5bfab051b47c3552257' => 
    array (
      0 => '/var/www/html/prueba-lime/views/campaign/index.tpl',
      1 => 1512161251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3750908645a21ba087ea250-47286482',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a21ba088361a8_99362348',
  'variables' => 
  array (
    'campaign' => 0,
    '_layoutParams' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a21ba088361a8_99362348')) {function content_5a21ba088361a8_99362348($_smarty_tpl) {?><div class="col-md-10">
	<?php if (isset($_smarty_tpl->tpl_vars['campaign']->value)&&count($_smarty_tpl->tpl_vars['campaign']->value)) {?>
	<h2>Lista de Campañas</h2>
	<table class="table table-hover">
		<tr>
			<th>Nombre</th>
			<th>Cliente</th>
			<th>Campaña ViciDial</th>
			<th>Acciones</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['campaign']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
			<tr>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign/view/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</a></td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/view/<?php echo $_smarty_tpl->tpl_vars['c']->value['cliente_id'];?>
" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->tpl_vars['c']->value['cliente'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['vici'];?>
</td>
				<td>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign/edit/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-link btn-sm">Editar</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-link btn-sm" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
')">Eliminar</a>
				</td>
			</tr>
		<?php } ?>
	</table>
	<?php } else { ?>
		<strong>No hay campañas registradas</strong>
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign/add" class="btn btn-link">Nueva Campaña</a></p>
</div><?php }} ?>
