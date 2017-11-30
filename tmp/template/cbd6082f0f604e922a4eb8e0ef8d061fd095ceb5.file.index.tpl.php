<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 11:24:43
         compiled from "/var/www/html/qepd/views/roles/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18956355245a1c2b104fdf16-71046074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbd6082f0f604e922a4eb8e0ef8d061fd095ceb5' => 
    array (
      0 => '/var/www/html/qepd/views/roles/index.tpl',
      1 => 1511796280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18956355245a1c2b104fdf16-71046074',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1c2b108fd5f6_63963635',
  'variables' => 
  array (
    'roles' => 0,
    'r' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1c2b108fd5f6_63963635')) {function content_5a1c2b108fd5f6_63963635($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Lista de Roles</h3>
	<table class="table table-hover">
		<th>
			Role
		</th>
		<th>
			Acciones
		</th>
		
			<?php if (isset($_smarty_tpl->tpl_vars['roles']->value)&&count($_smarty_tpl->tpl_vars['roles']->value)) {?>
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
roles/view/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/delete/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/delete/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
')">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
			<?php }?>
		
	</table>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
<?php }} ?>
