<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-28 15:17:34
         compiled from "/var/www/html/prueba-lime/views/cargas/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7741829325a8c8f1b04f723-43186413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7558e318e4179d57836a3e282c9268069b09772a' => 
    array (
      0 => '/var/www/html/prueba-lime/views/cargas/index.tpl',
      1 => 1519845452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7741829325a8c8f1b04f723-43186413',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a8c8f1b08bdd8_40994506',
  'variables' => 
  array (
    'cargas' => 0,
    'c' => 0,
    '_layoutParams' => 0,
    'cargasAll' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c8f1b08bdd8_40994506')) {function content_5a8c8f1b08bdd8_40994506($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/prueba-lime/libs/smarty/libs/plugins/modifier.date_format.php';
?><div class="col-md-12">
	<h2>Listas de Contactos Cargados</h2>
	<?php if (Session::get('role_id')==3) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['cargas']->value)&&count($_smarty_tpl->tpl_vars['cargas']->value)) {?>
		<p class="text-danger">Si desea desactivar o eliminar una lista, debe tener en cuenta que se desactivarán o eliminarán los contactos asociados a la lista seleccionada</p>
		<table class="table table-hover">
			<tr>
				<th>Fecha</th>
				<th>Lista N°</th>
				<th>Encuesta</th>
				<th>Estado</th>
				<th>Modificado</th>
				<th>Acciones</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cargas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
				<tr>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['fecha'],"%d-%m-%Y %H:%M");?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['c']->value['estado']==1) {?>Activa<?php } else { ?>No Activa<?php }?></td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['modificado'],"%d-%m-%Y %H:%M");?>
</td>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/contactosCarga/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-link btn-sm">Ver Contactos</a>

						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cargas/edit/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-link btn-sm">Editar Lista</a>

						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cargas/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-link btn-sm" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cargas/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
', 'la lista <?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
 y eliminar sus contactos?')">Eliminar Lista</a>
					</td>
				</tr>
			<?php } ?>
		</table>

		<?php } else { ?>
			<p class="text-info">Usted no ha realizado cargas</p>
		<?php }?>
	<?php }?>
	<?php if (Session::get('role_id')==1) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['cargasAll']->value)&&count($_smarty_tpl->tpl_vars['cargasAll']->value)) {?>
			<p class="text-danger">Si desea desactivar o eliminar una lista, debe tener en cuenta que se desactivarán o eliminarán los contactos asociados a la lista seleccionada</p>
			<table class="table table-hover">
				<tr>
					<th>Fecha</th>
					<th>Lista N°</th>
					<th>Encuesta</th>
					<th>Estado</th>
					<th>Modificado</th>
					<th>Acciones</th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cargasAll']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<tr>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['fecha'],"%d-%m-%Y %H:%M");?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</td>
						<td><?php if ($_smarty_tpl->tpl_vars['c']->value['estado']==1) {?>Activa<?php } else { ?>No Activa<?php }?></td>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['modificado'],"%d-%m-%Y %H:%M");?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/contactosCarga/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-link btn-sm">Ver Contactos</a>

							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cargas/edit/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-link btn-sm">Editar Lista</a>

							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cargas/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-link btn-sm" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cargas/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
', 'la lista <?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
 y eliminar sus contactos?')">Eliminar Lista</a>
						</td>
					</tr>
				<?php } ?>
			</table>
		<?php }?>
	<?php }?>
</div><?php }} ?>
