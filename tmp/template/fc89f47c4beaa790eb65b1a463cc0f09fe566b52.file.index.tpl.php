<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-15 12:33:31
         compiled from "/var/www/html/qepd/views/urnas/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16900488025a0c6c5bb34f39-29630682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc89f47c4beaa790eb65b1a463cc0f09fe566b52' => 
    array (
      0 => '/var/www/html/qepd/views/urnas/index.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16900488025a0c6c5bb34f39-29630682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'urnas' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0c6c5bbb4b59_70943268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0c6c5bbb4b59_70943268')) {function content_5a0c6c5bbb4b59_70943268($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
urnas/add">Agregar Urnas</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes">Ver Planes</a></p>
</div>
<div class="col-md-8">
	<?php if (isset($_smarty_tpl->tpl_vars['urnas']->value)&&count($_smarty_tpl->tpl_vars['urnas']->value)) {?>
		<h3>Lista de Urnas</h3>
		<table class="table table-hover">
			<th>
				Modelo
			</th>
			<th>
				Material
			</th>
			<th>
				color
			</th>
			<th>
				Plan
			</th>
			<th>
				Acciones
			</th>
			
				<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['urnas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
					<tr>
						<td><?php echo ucfirst($_smarty_tpl->tpl_vars['u']->value['modelo']);?>
</td>
						<td><?php echo ucfirst($_smarty_tpl->tpl_vars['u']->value['material']);?>
</td>
						<td><?php echo ucfirst($_smarty_tpl->tpl_vars['u']->value['color']);?>
</td>
						<td><?php echo ucwords($_smarty_tpl->tpl_vars['u']->value['plan']);?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
urnas/view/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
urnas/delete/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
urnas/delete/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['u']->value['modelo'];?>
');">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
		<?php } else { ?>
			<p><strong>No hay urnas registradas</strong></p>
			<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
urnas/add">Agregar Urnas</a></p>
		<?php }?>
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
