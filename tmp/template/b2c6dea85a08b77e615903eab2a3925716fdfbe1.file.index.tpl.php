<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-16 14:58:25
         compiled from "/var/www/html/qepd/views/velatorios/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6404754185a0dd893c26a83-05407301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2c6dea85a08b77e615903eab2a3925716fdfbe1' => 
    array (
      0 => '/var/www/html/qepd/views/velatorios/index.tpl',
      1 => 1510858700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6404754185a0dd893c26a83-05407301',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0dd893c7eac3_68706899',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'velatorios' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0dd893c7eac3_68706899')) {function content_5a0dd893c7eac3_68706899($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
velatorios/add">Agregar Velatorios</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes">Ver Planes</a></p>
</div>
<div class="col-md-8">
	<?php if (isset($_smarty_tpl->tpl_vars['velatorios']->value)&&count($_smarty_tpl->tpl_vars['velatorios']->value)) {?>
		<h3>Lista de Velatorios</h3>
		<table class="table table-hover">
			<th>
				Plan
			</th>
			<th>
				Acciones
			</th>
			
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['velatorios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<tr>
						<td><?php echo ucfirst($_smarty_tpl->tpl_vars['v']->value['plan']);?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
velatorios/view/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
velatorios/delete/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
velatorios/delete/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['v']->value['plan'];?>
');">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
		<?php } else { ?>
			<p><strong>No hay velatorios registrados</strong></p>
			<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
velatorios/add">Agregar Velatorios</a></p>
		<?php }?>
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
