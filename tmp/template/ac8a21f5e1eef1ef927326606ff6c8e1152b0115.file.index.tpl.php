<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-01 11:19:24
         compiled from "/var/www/html/prueba-lime/views/clientes/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12131221015a216bb5cea488-49601291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac8a21f5e1eef1ef927326606ff6c8e1152b0115' => 
    array (
      0 => '/var/www/html/prueba-lime/views/clientes/index.tpl',
      1 => 1512141562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12131221015a216bb5cea488-49601291',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a216bb5daae36_85368202',
  'variables' => 
  array (
    'clientes' => 0,
    '_layoutParams' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a216bb5daae36_85368202')) {function content_5a216bb5daae36_85368202($_smarty_tpl) {?><div class="col-md-6">
	<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)&&count($_smarty_tpl->tpl_vars['clientes']->value)) {?>
		<h2>Lista de Clientes</h2>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
				<tr>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/view/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</a></td>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/edit/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-link btn-sm">Editar</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-link btn-sm" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
')">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	<?php } else { ?>
		<strong>No hay clientes registrados</strong>
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/add" class="btn btn-link">Nuevo Cliente</a></p>
</div><?php }} ?>
