<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-28 15:48:24
         compiled from "/var/www/html/prueba-lime/views/usuarios/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1598868275a269004d87667-47975696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46ec8b2c75512a5734e6d07c64b8b6ca7cd206d0' => 
    array (
      0 => '/var/www/html/prueba-lime/views/usuarios/view.tpl',
      1 => 1519847299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1598868275a269004d87667-47975696',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a26900502ece7_74494047',
  'variables' => 
  array (
    'usuario' => 0,
    '_layoutParams' => 0,
    'u' => 0,
    'usuarioEncuesta' => 0,
    'ue' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a26900502ece7_74494047')) {function content_5a26900502ece7_74494047($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/prueba-lime/libs/smarty/libs/plugins/modifier.date_format.php';
?><div class="col-md-12">
	<h2>Ver Usuario</h2>
	<p><strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</p>
	<p><strong>Email:</strong> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</p>
	<p><strong>Creado:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['usuario']->value['creado'],"%d-%m-%Y %H:%M");?>
</p>
	<p><strong>Actualizado:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['usuario']->value['actualizado'],"%d-%m-%Y %H:%M");?>
</p>
	<p><strong>Rol:</strong> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['role'];?>
</p>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/edit/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" class="btn btn-link btn-sm">Editar</a>
		<?php if (Session::get('role_id')==1) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/delete/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
" class="btn btn-link btn-sm" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/delete/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['u']->value['nombre'];?>
')">Eliminar</a>

		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios" class="btn btn-link btn-sm">Usuarios</a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/ejecutivos" class="btn btn-link btn-sm">Ejecutivos</a>
	</p>
	<hr>
	<?php if (isset($_smarty_tpl->tpl_vars['usuarioEncuesta']->value)&&count($_smarty_tpl->tpl_vars['usuarioEncuesta']->value)) {?>
		<h4>Encuestas Asociadas</h4>
		<ul type="square">
			<?php  $_smarty_tpl->tpl_vars['ue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarioEncuesta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ue']->key => $_smarty_tpl->tpl_vars['ue']->value) {
$_smarty_tpl->tpl_vars['ue']->_loop = true;
?>
				<li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestasusuarios/view/<?php echo $_smarty_tpl->tpl_vars['ue']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ue']->value['nombre'];?>
</a>
				</li>
			<?php } ?>
		</ul>
	<?php } else { ?>
		<strong>No hay encuestas asociadas</strong>
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestasusuarios/add" class="btn btn-link">Nueva Asociación</a>
	</p>
</div><?php }} ?>
