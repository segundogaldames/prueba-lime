<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-06 14:11:49
         compiled from "/var/www/html/prueba-lime/views/encuestasusuarios/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8069861855a2687b6034c96-34231746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b3f70f16d43e2de0c3cdcab7c69f8d4470135d9' => 
    array (
      0 => '/var/www/html/prueba-lime/views/encuestasusuarios/index.tpl',
      1 => 1520359907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8069861855a2687b6034c96-34231746',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a2687b60889c1_72816835',
  'variables' => 
  array (
    'encuestasUsuarios' => 0,
    '_layoutParams' => 0,
    'eu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2687b60889c1_72816835')) {function content_5a2687b60889c1_72816835($_smarty_tpl) {?><div class="col-md-12">
	<?php if (isset($_smarty_tpl->tpl_vars['encuestasUsuarios']->value)&&count('encuestasUsuarios')) {?>
		<h2>Encuestas y Usuarios</h2>
		<table class="table table-hover">
			<tr>
				<th>Encuesta</th>
				<th>Usuario</th>
				<th>Acciones</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['eu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['eu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['encuestasUsuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['eu']->key => $_smarty_tpl->tpl_vars['eu']->value) {
$_smarty_tpl->tpl_vars['eu']->_loop = true;
?>
				<tr>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/view/<?php echo $_smarty_tpl->tpl_vars['eu']->value['encuesta_id'];?>
" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->tpl_vars['eu']->value['encuesta'];?>
</a>
					</td>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/view/<?php echo $_smarty_tpl->tpl_vars['eu']->value['usuario_id'];?>
" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->tpl_vars['eu']->value['usuario'];?>
</a>
					</td>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestasusuarios/edit/<?php echo $_smarty_tpl->tpl_vars['eu']->value['id'];?>
" class="btn btn-link btn-sm">Editar</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestasusuarios/delete/<?php echo $_smarty_tpl->tpl_vars['eu']->value['id'];?>
" class="btn btn-link btn-sm" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestasusuarios/delete/<?php echo $_smarty_tpl->tpl_vars['eu']->value['id'];?>
', 'la asociación <?php echo $_smarty_tpl->tpl_vars['eu']->value['encuesta'];?>
 - <?php echo $_smarty_tpl->tpl_vars['eu']->value['usuario'];?>
')">Eliminar</a>
					</td>
				</tr>
			<?php } ?>		
		</table>
	<?php } else { ?>
		<strong>No hay asociaciones generadas</strong>
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestasusuarios/add" class="btn btn-link">Nueva Asociación</a></p>
</div><?php }} ?>
