<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-16 14:17:30
         compiled from "/var/www/html/qepd/views/comunas/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19979494915a0dd63a1a8b75-61604041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cdc6ef1d36e507670535521cd3415311e281b9c' => 
    array (
      0 => '/var/www/html/qepd/views/comunas/index.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19979494915a0dd63a1a8b75-61604041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'comunas' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0dd63a206272_21163716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0dd63a206272_21163716')) {function content_5a0dd63a206272_21163716($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
comunas/add" class="btn btn-enlace">Agregar Comuna</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Comunas</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Region
		</th>
		<th>
			Acciones
		</th>
		
			<?php if (isset($_smarty_tpl->tpl_vars['comunas']->value)&&count($_smarty_tpl->tpl_vars['comunas']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comunas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['c']->value['comuna'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['c']->value['region'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
comunas/view/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
comunas/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
comunas/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['c']->value['comuna'];?>
');">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
			<?php }?>
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
