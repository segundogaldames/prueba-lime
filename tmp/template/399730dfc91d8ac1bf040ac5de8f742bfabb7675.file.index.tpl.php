<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 14:34:04
         compiled from "/var/www/html/prueba-lime/views/encuestassupervisores/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16351796015aa0031c74bfe0-85639573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '399730dfc91d8ac1bf040ac5de8f742bfabb7675' => 
    array (
      0 => '/var/www/html/prueba-lime/views/encuestassupervisores/index.tpl',
      1 => 1520447641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16351796015aa0031c74bfe0-85639573',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5aa0031c74cd70_33014717',
  'variables' => 
  array (
    'supervisores' => 0,
    '_layoutParams' => 0,
    'sup' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa0031c74cd70_33014717')) {function content_5aa0031c74cd70_33014717($_smarty_tpl) {?><div class="col-md-8">
	<h2>Encuestas y Supervisores</h2>
	<?php if (isset($_smarty_tpl->tpl_vars['supervisores']->value)&&count($_smarty_tpl->tpl_vars['supervisores']->value)) {?>
	<table class="table table-hover">
		<tr>
			<th>Encuesta</th>
			<th>Supervisor</th>
			<th>Acciones</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['sup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['supervisores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sup']->key => $_smarty_tpl->tpl_vars['sup']->value) {
$_smarty_tpl->tpl_vars['sup']->_loop = true;
?>
			<tr>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/view/<?php echo $_smarty_tpl->tpl_vars['sup']->value['encuesta_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['sup']->value['encuesta'];?>
</a></td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/view/<?php echo $_smarty_tpl->tpl_vars['sup']->value['supervisor_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['sup']->value['supervisor'];?>
</a></td>
				<td>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestassupervisores/delete/<?php echo $_smarty_tpl->tpl_vars['sup']->value['id'];?>
" class="btn btn-link btn-sm" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestassupervisores/delete/<?php echo $_smarty_tpl->tpl_vars['sup']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['sup']->value['encuesta'];?>
 y <?php echo $_smarty_tpl->tpl_vars['sup']->value['supervisor'];?>
')">Eliminar</a>
				</td>
			</tr>
		<?php } ?>
	</table>
	<?php } else { ?>
		<p class="text-info">No hay asociación de encuestas y supervisores</p>
		<p class="text-info">Debe seleccionar una encuesta para iniciar la asociación</p>
	<?php }?>
</div><?php }} ?>
