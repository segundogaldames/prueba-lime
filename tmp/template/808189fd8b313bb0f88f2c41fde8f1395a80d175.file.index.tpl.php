<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-17 10:53:41
         compiled from "/var/www/html/qepd/views/traslados/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16370943565a0ef7de845cf2-59466007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '808189fd8b313bb0f88f2c41fde8f1395a80d175' => 
    array (
      0 => '/var/www/html/qepd/views/traslados/index.tpl',
      1 => 1510930417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16370943565a0ef7de845cf2-59466007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0ef7de8d9df2_90796058',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'traslados' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ef7de8d9df2_90796058')) {function content_5a0ef7de8d9df2_90796058($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
traslados/add">Agregar Traslados</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes">Ver Planes</a></p>
</div>
<div class="col-md-8">
	<?php if (isset($_smarty_tpl->tpl_vars['traslados']->value)&&count($_smarty_tpl->tpl_vars['traslados']->value)) {?>
		<h3>Lista de Traslados</h3>
		<table class="table table-hover">
			<th>
				Planes
			</th>
			<th>
				Acciones
			</th>
			
				<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['traslados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
					<tr>
						<td><?php echo ucwords($_smarty_tpl->tpl_vars['t']->value['plan']);?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
traslados/view/<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
traslados/delete/<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
traslados/delete/<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
', 'El traslado de <?php echo $_smarty_tpl->tpl_vars['t']->value['plan'];?>
');">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
		<?php } else { ?>
			<p><strong>No hay traslados registrados</strong></p>
			<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
traslados/add">Agregar Traslados</a></p>
		<?php }?>
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
