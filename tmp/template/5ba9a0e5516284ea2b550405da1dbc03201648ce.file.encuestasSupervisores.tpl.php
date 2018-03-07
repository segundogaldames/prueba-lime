<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 14:50:31
         compiled from "/var/www/html/prueba-lime/views/encuestas/encuestasSupervisores.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16147452085a9ff71e753c06-70811167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ba9a0e5516284ea2b550405da1dbc03201648ce' => 
    array (
      0 => '/var/www/html/prueba-lime/views/encuestas/encuestasSupervisores.tpl',
      1 => 1520448628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16147452085a9ff71e753c06-70811167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9ff71e7c7e05_54314115',
  'variables' => 
  array (
    'encuestas' => 0,
    '_layoutParams' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9ff71e7c7e05_54314115')) {function content_5a9ff71e7c7e05_54314115($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/prueba-lime/libs/smarty/libs/plugins/modifier.date_format.php';
?><div class="col-md-12">
	<?php if (isset($_smarty_tpl->tpl_vars['encuestas']->value)&&count($_smarty_tpl->tpl_vars['encuestas']->value)) {?>
		<h2>Lista de Encuestas</h2>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Status</th>
				<th>Campaña</th>
				<th>Tipo</th>
				<th>Creado</th>
				<th>Actualizado</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['encuestas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
				<tr>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/view/<?php echo $_smarty_tpl->tpl_vars['e']->value['encuesta_id'];?>
" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->tpl_vars['e']->value['encuesta'];?>
</a>
					</td>
					<td><?php if ($_smarty_tpl->tpl_vars['e']->value['status']==1) {?>Activa<?php } else { ?>No activa<?php }?></td>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign/view/<?php echo $_smarty_tpl->tpl_vars['e']->value['campaign_id'];?>
" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->tpl_vars['e']->value['campaign'];?>
</a>
					</td>
					<td><?php if ($_smarty_tpl->tpl_vars['e']->value['tipo']==1) {?>Encuesta<?php } else { ?>Auditoria<?php }?></td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['e']->value['creado'],"%d-%m-%Y %H:%M");?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['e']->value['modificada'],"%d-%m-%Y %H:%M");?>
</td>
				</tr>
			<?php } ?>
		</table>
	<?php } else { ?>
		<p class="text-info">Usted no tiene encuestas a su cargo</p>
		<p class="text-info">Comuníquese con el Administrador del Sistema</p>
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
index" class="btn btn-link">Volver</a>
	</p>
</div><?php }} ?>
