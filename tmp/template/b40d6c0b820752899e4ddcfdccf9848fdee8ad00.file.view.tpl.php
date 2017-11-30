<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-16 14:20:41
         compiled from "/var/www/html/qepd/views/planes/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74536525a0dd6f9d43759-90231869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b40d6c0b820752899e4ddcfdccf9848fdee8ad00' => 
    array (
      0 => '/var/www/html/qepd/views/planes/view.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74536525a0dd6f9d43759-90231869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plan' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0dd6f9dc6fc0_63742809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0dd6f9dc6fc0_63742809')) {function content_5a0dd6f9dc6fc0_63742809($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/qepd/libs/smarty/libs/plugins/modifier.date_format.php';
?><div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Ver Plan</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['plan']->value)&&count($_smarty_tpl->tpl_vars['plan']->value)) {?>
		<p style="font-size: 18px"><strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['plan']->value['nombre'];?>
</p>
		<p style="font-size: 18px"><strong>Código:</strong> <?php echo $_smarty_tpl->tpl_vars['plan']->value['codigo'];?>
</p>
		<p style="font-size: 18px"><strong>Tipo Plan:</strong> <?php echo $_smarty_tpl->tpl_vars['plan']->value['tipo_plan'];?>
</p>
		<p style="font-size: 18px"><strong>Servicio:</strong> <?php echo $_smarty_tpl->tpl_vars['plan']->value['servicio'];?>
</p>
		<p style="font-size: 18px"><strong>Empresa:</strong> <?php echo $_smarty_tpl->tpl_vars['plan']->value['empresa'];?>
</p>
		<p style="font-size: 18px"><strong>Destinatario:</strong> <?php echo $_smarty_tpl->tpl_vars['plan']->value['destinatario'];?>
</p>
		<p style="font-size: 18px"><strong>Fecha creación:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['plan']->value['dated'],'%D');?>
</p>
		<p style="font-size: 18px"><strong>Fecha modificación:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['plan']->value['updated'],'%D');?>
</p>
		<p style="font-size: 18px"><strong>Status:</strong> <?php if ($_smarty_tpl->tpl_vars['plan']->value['status']==1) {?> Activo<?php } else { ?> Inactivo<?php }?></p>

					
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/edit/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes">Volver</a>
	</p>
	<hr>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
componentes/verComponentes/<?php echo $_smarty_tpl->tpl_vars['plan']->value['servicio_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
">Componentes Asociados</a></p>
	<?php if (Session::get('role_id')==1) {?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
componentes/addComponentes/<?php echo $_smarty_tpl->tpl_vars['plan']->value['servicio_id'];?>
">Agregar Componentes</a></p>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
condiciones/add/<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
">Agregar Condiciones</a></p>
	<?php }?>
</div>
<div class="col-md-4">
	
</div><?php }} ?>
