<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 16:07:49
         compiled from "/var/www/html/prueba-lime/views/criterios/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14924258545a9dab9d71f245-71068288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '384a8428f67b5006b4c1c6ef9e32d708ac1a2b1f' => 
    array (
      0 => '/var/www/html/prueba-lime/views/criterios/view.tpl',
      1 => 1520453267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14924258545a9dab9d71f245-71068288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9dab9d7956f8_56108670',
  'variables' => 
  array (
    'criterio' => 0,
    '_layoutParams' => 0,
    'listas' => 0,
    'l' => 0,
    'cuota' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9dab9d7956f8_56108670')) {function content_5a9dab9d7956f8_56108670($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/prueba-lime/libs/smarty/libs/plugins/modifier.date_format.php';
?><div class="col-md-6">
	<h2>Ver Criterio</h2>
	<p><strong>Nombre:</strong> <?php echo ucwords($_smarty_tpl->tpl_vars['criterio']->value['nombre']);?>
</p>
	<p><strong>Encuesta:</strong> <?php echo ucwords($_smarty_tpl->tpl_vars['criterio']->value['encuesta']);?>
</p>
	<p><strong>Creado:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['criterio']->value['creado'],"%d-%m-%Y %H:%M");?>
</p>
	<p><strong>Creado:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['criterio']->value['modificado'],"%d-%m-%Y %H:%M");?>
</p>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
criterios/edit/<?php echo $_smarty_tpl->tpl_vars['criterio']->value['id'];?>
" class="btn btn-link">Editar</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
criterios/delete/<?php echo $_smarty_tpl->tpl_vars['criterio']->value['id'];?>
" class="btn btn-link" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
criterios/delete/<?php echo $_smarty_tpl->tpl_vars['criterio']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['criterio']->value['nombre'];?>
')">Eliminar</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas" class="btn btn-link">Encuestas</a>
	</p>

	<hr>
	<!--lista de cargas asociadas-->
	<h4>Listas de Contacto Asociadas</h4>
	<?php if (isset($_smarty_tpl->tpl_vars['listas']->value)&&count($_smarty_tpl->tpl_vars['listas']->value)) {?>
		<ul type="square">
			<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cargas/view/<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
">Lista <?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
</a></li>
			<?php } ?>
		</ul>
		
	<?php } else { ?>
		<strong>No hay listas asociadas</strong>
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/addContactosEncuestaCriterio/<?php echo $_smarty_tpl->tpl_vars['criterio']->value['encuesta_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['criterio']->value['id'];?>
" class="btn btn-link">Cargar Contactos</a></p>

	<!--Cuota Asociada-->
	<?php if (isset($_smarty_tpl->tpl_vars['cuota']->value)&&count($_smarty_tpl->tpl_vars['cuota']->value)) {?>
		<h4>Cuota Asociada</h4>
		<div class="col-md-4">
			<table class="table table-hover table-bordered">
				<tr>
					<th>Desde</th>
					<th>Hasta</th>
					<th>Valor</th>
				</tr>
				<tr>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['cuota']->value['desde'],"%d-%m-%Y");?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['cuota']->value['hasta'],"%d-%m-%Y");?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['cuota']->value['valor'];?>
</td>
				</tr>
			</table>
		</div>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cuotas/edit/<?php echo $_smarty_tpl->tpl_vars['criterio']->value['encuesta_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['criterio']->value['id'];?>
" class="btn btn-link">Modificar</a></p>
	<?php } else { ?>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cuotas/add/<?php echo $_smarty_tpl->tpl_vars['criterio']->value['encuesta_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['criterio']->value['id'];?>
" class="btn btn-link">Agregar Cuota</a></p>
	<?php }?>
	
</div><?php }} ?>
