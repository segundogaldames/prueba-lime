<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 10:05:11
         compiled from "/var/www/html/qepd/views/usuario/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9789483115a0c66786e2b49-68207958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e47ed626a093cad940f19abb202f358a017a4c7' => 
    array (
      0 => '/var/www/html/qepd/views/usuario/index.tpl',
      1 => 1511791490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9789483115a0c66786e2b49-68207958',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0c667873e189_78473260',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'usuarios' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0c667873e189_78473260')) {function content_5a0c667873e189_78473260($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/add">Agregar Usuarios</a></p>
</div>
<div class="col-md-8">
	<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
		<h3>Lista de Usuarios</h3>
		<table class="table table-hover">
			<th>
				Nombre
			</th>
			<th>
				Email
			</th>
			<th>
				Rol
			</th>
			<th>
				Acciones
			</th>
			
				<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
					<tr>
						<td><?php echo ucfirst($_smarty_tpl->tpl_vars['u']->value['nombre']);?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['u']->value['apellido']);?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['u']->value['email'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['u']->value['rol'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/view/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/delete/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/delete/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['u']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value['apellido'];?>
');">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
		<?php } else { ?>
			<p><strong>No hay usuarios registrados</strong></p>
			<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/add">Agregar Usuarios</a></p>
		<?php }?>
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
