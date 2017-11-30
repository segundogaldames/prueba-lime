<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 12:48:27
         compiled from "/var/www/html/qepd/views/tipoempresas/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13405888365a0dd5a69747c4-70524167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdef7121759105d1ffa7b90f86df38562882c9e5' => 
    array (
      0 => '/var/www/html/qepd/views/tipoempresas/index.tpl',
      1 => 1511801305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13405888365a0dd5a69747c4-70524167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0dd5a6bdcf92_32803053',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'tipos' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0dd5a6bdcf92_32803053')) {function content_5a0dd5a6bdcf92_32803053($_smarty_tpl) {?><div style="padding-top: 70px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoempresas/add">Agregar Tipo Empresa</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas">Ver Empresas</a></p>
</div>
<div class="col-md-8">
	<h3>Lista Tipo Empresas</h3>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Acciones
		</th>
		
			<?php if (isset($_smarty_tpl->tpl_vars['tipos']->value)&&count($_smarty_tpl->tpl_vars['tipos']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['t']->value['nombre'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoempresas/view/<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoempresas/delete/<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoempresas/delete/<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['t']->value['nombre'];?>
');">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
			<?php }?>
		
	</table>
</div>
<div class="col-md-2">
	
</div><?php }} ?>
