<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-05 16:51:23
         compiled from "/var/www/html/prueba-lime/views/criterios/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14924258545a9dab9d71f245-71068288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '384a8428f67b5006b4c1c6ef9e32d708ac1a2b1f' => 
    array (
      0 => '/var/www/html/prueba-lime/views/criterios/view.tpl',
      1 => 1520283073,
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
    'ejecutivos' => 0,
    'listas' => 0,
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
	<!--lista de ejecutivos asociados-->
	<h4>Ejecutivos Asociados</h4>
	<?php if (isset($_smarty_tpl->tpl_vars['ejecutivos']->value)&&count($_smarty_tpl->tpl_vars['ejecutivos']->value)) {?>

	<?php } else { ?>
		<strong>No hay ejecutivos asociados</strong>
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
criteriosusuarios/addEjecutivoCriterio/<?php echo $_smarty_tpl->tpl_vars['criterio']->value['id'];?>
" class="btn btn-link">Asociar Ejecutivos</a></p>

	<hr>
	<!--lista de cargas asociadas-->
	<h4>Listas de Contacto Asociadas</h4>
	<?php if (isset($_smarty_tpl->tpl_vars['listas']->value)&&count($_smarty_tpl->tpl_vars['listas']->value)) {?>

	<?php } else { ?>
		<strong>No hay listas asociadas</strong>
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/addCargaCriterio/<?php echo $_smarty_tpl->tpl_vars['criterio']->value['id'];?>
" class="btn btn-link">Cargar Contactos</a></p>
</div><?php }} ?>
