<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-30 09:37:12
         compiled from "/var/www/html/prueba-lime/views/roles/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12843725615a1f306137b0c1-89773459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb26f89d78ed2d8051611c2b6a3921310213a700' => 
    array (
      0 => '/var/www/html/prueba-lime/views/roles/index.tpl',
      1 => 1512049029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12843725615a1f306137b0c1-89773459',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1f30613fefb5_49903146',
  'variables' => 
  array (
    'roles' => 0,
    'r' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1f30613fefb5_49903146')) {function content_5a1f30613fefb5_49903146($_smarty_tpl) {?><div class="col-md-6">
	<?php if (isset($_smarty_tpl->tpl_vars['roles']->value)&&count($_smarty_tpl->tpl_vars['roles']->value)) {?>
		<h2>Lista de Roles</h2>
		<table class="table table-hover">
			<tr>
				<th>
					Nombre
				</th>
				<th>Acciones</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/edit/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class="btn btn-link btn-sm">Editar</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/delete/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/delete/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
')" class="btn btn-link btn-sm">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	<?php } else { ?>
		<strong>No hay roles registrados</strong>
		
	<?php }?>
	<hr>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/add" class="btn btn-link">Agregar Roles</a></p>
</div><?php }} ?>
