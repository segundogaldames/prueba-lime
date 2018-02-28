<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-28 15:38:32
         compiled from "/var/www/html/prueba-lime/views/usuarios/ejecutivos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19138661215a970499be1b93-71809121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f428b5fe8e4d651e58f1b3259d0c8c1c78b51246' => 
    array (
      0 => '/var/www/html/prueba-lime/views/usuarios/ejecutivos.tpl',
      1 => 1519846708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19138661215a970499be1b93-71809121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a970499c1aa57_16777252',
  'variables' => 
  array (
    'ejecutivos' => 0,
    '_layoutParams' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a970499c1aa57_16777252')) {function content_5a970499c1aa57_16777252($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/prueba-lime/libs/smarty/libs/plugins/modifier.date_format.php';
?><div class="col-md-12">
	<?php if (isset($_smarty_tpl->tpl_vars['ejecutivos']->value)&&count($_smarty_tpl->tpl_vars['ejecutivos']->value)) {?>
		<h2>Lista de Usuarios</h2>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Email</th>
				<th>Creado</th>
				<th>Actualizado</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ejecutivos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
				<tr>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/view/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['u']->value['nombre'];?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['u']->value['email'];?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['u']->value['fecha'],"%d-%m-%Y %H:%M");?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['u']->value['actualizado'],"%d-%m-%Y %H:%M");?>
</td>
				</tr>
			<?php } ?>
		</table>
	<?php } else { ?>
		<strong>No hay usuarios registrados</strong>
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/add" class="btn btn-link">Nuevo Usuario</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
index" class="btn btn-link">Volver</a>
	</p>
</div><?php }} ?>
