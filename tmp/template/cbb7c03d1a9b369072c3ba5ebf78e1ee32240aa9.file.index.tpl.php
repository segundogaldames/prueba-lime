<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-30 11:38:46
         compiled from "/var/www/html/prueba-lime/views/usuarios/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11240023865a200ba115f870-38322912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbb7c03d1a9b369072c3ba5ebf78e1ee32240aa9' => 
    array (
      0 => '/var/www/html/prueba-lime/views/usuarios/index.tpl',
      1 => 1512056323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11240023865a200ba115f870-38322912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a200ba121c561_15638279',
  'variables' => 
  array (
    'usuarios' => 0,
    'u' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a200ba121c561_15638279')) {function content_5a200ba121c561_15638279($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/prueba-lime/libs/smarty/libs/plugins/modifier.date_format.php';
?><div class="col-md-12">
	<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
		<h2>Lista de Usuarios</h2>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Email</th>
				<th>Creado</th>
				<th>Actualizado</th>
				<th>Acciones</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['u']->value['nombre'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['u']->value['email'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['u']->value['role'];?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['u']->value['creado'],"%d-%m-%Y %H:%M");?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['u']->value['actualizado'],"%d-%m-%Y %H:%M");?>
</td>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/edit/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" class="btn btn-link btn-sm">Editar</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/delete/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" class="btn btn-link btn-sm" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/delete/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['u']->value['nombre'];?>
')">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	<?php } else { ?>
		<strong>No hay usuarios registrados</strong>
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/add" class="btn btn-link">Nuevo Usuario</a></p>
</div><?php }} ?>
