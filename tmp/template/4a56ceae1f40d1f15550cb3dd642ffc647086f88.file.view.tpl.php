<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-28 11:27:56
         compiled from "/var/www/html/prueba-lime/views/clientes/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14361355235a217496d98fa3-74371008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a56ceae1f40d1f15550cb3dd642ffc647086f88' => 
    array (
      0 => '/var/www/html/prueba-lime/views/clientes/view.tpl',
      1 => 1519831669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14361355235a217496d98fa3-74371008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a217496da1a86_20679720',
  'variables' => 
  array (
    'cliente' => 0,
    '_layoutParams' => 0,
    'campaign' => 0,
    'ca' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a217496da1a86_20679720')) {function content_5a217496da1a86_20679720($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/prueba-lime/libs/smarty/libs/plugins/modifier.date_format.php';
?><div class="col-md-12">
	<h2>Ver Cliente</h2>
	<p><strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['cliente']->value['nombre'];?>
</p>
	<p><strong>Creado:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['cliente']->value['creado'],"%d-%m-%Y %H:%M");?>
</p>
	<p><strong>Modificado:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['cliente']->value['modificado'],"%d-%m-%Y %H:%M");?>
</p>

	<p>
		<?php if (Session::get('role_id')==1) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/edit/<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id'];?>
" class="btn btn-link btn-sm">Editar</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/delete/<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id'];?>
" class="btn btn-link btn-sm" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/delete/<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['cliente']->value['nombre'];?>
')">Eliminar</a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes" class="btn btn-link btn-sm">Clientes</a>
	</p>
	<hr>
	<?php if (isset($_smarty_tpl->tpl_vars['campaign']->value)&&count($_smarty_tpl->tpl_vars['campaign']->value)) {?>
	<h4>Campañas Asociadas</h4>
		<ul type="square">
			<?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['campaign']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value) {
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign/view/<?php echo $_smarty_tpl->tpl_vars['ca']->value['id'];?>
" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->tpl_vars['ca']->value['nombre'];?>
</a></li>
			<?php } ?>
		</ul>
	<?php } else { ?>
		<strong>No hay campañas asociadas</strong>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign/add" class="btn btn-link btn-sm">Nueva Campaña</a></p>
	<?php }?>
	<hr>
	

</div><?php }} ?>
