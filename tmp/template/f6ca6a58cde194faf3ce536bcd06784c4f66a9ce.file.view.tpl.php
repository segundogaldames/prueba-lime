<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 12:13:06
         compiled from "/var/www/html/qepd/views/telefonos/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13022276395a1c3992e62c01-57339399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6ca6a58cde194faf3ce536bcd06784c4f66a9ce' => 
    array (
      0 => '/var/www/html/qepd/views/telefonos/view.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13022276395a1c3992e62c01-57339399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'telefono' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1c3992ef1613_58119756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1c3992ef1613_58119756')) {function content_5a1c3992ef1613_58119756($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/add">Agregar Teléfono</a></p>
</div>
<div class="col-md-4">
	
	<h3>Ver Teléfono</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['telefono']->value)&&count($_smarty_tpl->tpl_vars['telefono']->value)) {?>
		<p style="font-size: 18px"><strong>Número:</strong> <?php echo $_smarty_tpl->tpl_vars['telefono']->value['numero'];?>
</p>
		<p style="font-size: 18px"><strong>Sede:</strong> <?php echo $_smarty_tpl->tpl_vars['telefono']->value['sede'];?>
</p>			
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/edit/<?php echo $_smarty_tpl->tpl_vars['telefono']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	
<?php }} ?>
