<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-23 12:20:58
         compiled from "/var/www/html/prueba-lime/views/encuestas/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16109983185a25755e271589-33898220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96d2ea103592b1378bd72fca4cb1497acb3fdfa3' => 
    array (
      0 => '/var/www/html/prueba-lime/views/encuestas/index.tpl',
      1 => 1519402856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16109983185a25755e271589-33898220',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a25755e2b5738_17183108',
  'variables' => 
  array (
    'encuestas' => 0,
    '_layoutParams' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a25755e2b5738_17183108')) {function content_5a25755e2b5738_17183108($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/prueba-lime/libs/smarty/libs/plugins/modifier.date_format.php';
?><div class="col-md-12">
	<?php if (isset($_smarty_tpl->tpl_vars['encuestas']->value)&&count($_smarty_tpl->tpl_vars['encuestas']->value)) {?>
		<h2>Lista de Encuestas</h2>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Status</th>
				<th>Campaña</th>
				<th>Creado</th>
				<th>Actualizado</th>
				<th>Acciones</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['encuestas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
				<tr>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/view/<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->tpl_vars['e']->value['nombre'];?>
</a>
					</td>
					<td><?php if ($_smarty_tpl->tpl_vars['e']->value['status']==1) {?>Activa<?php } else { ?>No activa<?php }?></td>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign/view/<?php echo $_smarty_tpl->tpl_vars['e']->value['campaign_id'];?>
" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->tpl_vars['e']->value['campaign'];?>
</a>
					</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['e']->value['creado'],"%d-%m-%Y %H:%M");?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['e']->value['actualizado'],"%d-%m-%Y %H:%M");?>
</td>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/edit/<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
" class="btn btn-link btn-sm">Editar</a>
					
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/delete/<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
" class="btn btn-link btn-sm" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/delete/<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['e']->value['nombre'];?>
');">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	<?php } else { ?>
		<strong>No hay encuestas registradas</strong>
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/add">Nueva Encuesta</a></p>
</div><?php }} ?>
