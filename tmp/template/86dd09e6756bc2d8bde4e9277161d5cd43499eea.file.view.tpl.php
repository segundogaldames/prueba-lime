<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-16 14:20:17
         compiled from "/var/www/html/qepd/views/servicios/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17212120625a0dd6e1c91284-31010234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86dd09e6756bc2d8bde4e9277161d5cd43499eea' => 
    array (
      0 => '/var/www/html/qepd/views/servicios/view.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17212120625a0dd6e1c91284-31010234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'servicio' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0dd6e1cdcf91_29735355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0dd6e1cdcf91_29735355')) {function content_5a0dd6e1cdcf91_29735355($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Ver Servicio</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['servicio']->value)&&count($_smarty_tpl->tpl_vars['servicio']->value)) {?>
		<p style="font-size: 18px"><strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['servicio']->value['nombre'];?>
</p>
		<p style="font-size: 18px"><strong>Proveedor:</strong> <?php echo $_smarty_tpl->tpl_vars['servicio']->value['tipo'];?>
</p>	
		
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/edit/<?php echo $_smarty_tpl->tpl_vars['servicio']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios">Volver</a>
	</p>
	
</div>
<div class="col-md-4">
	
</div><?php }} ?>
