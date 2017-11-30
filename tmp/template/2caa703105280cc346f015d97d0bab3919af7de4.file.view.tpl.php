<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 11:15:17
         compiled from "/var/www/html/qepd/views/roles/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18425136605a1c2c05dd9126-64069931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2caa703105280cc346f015d97d0bab3919af7de4' => 
    array (
      0 => '/var/www/html/qepd/views/roles/view.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18425136605a1c2c05dd9126-64069931',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1c2c05e80d16_59113286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1c2c05e80d16_59113286')) {function content_5a1c2c05e80d16_59113286($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Ver Roles</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['role']->value)&&count($_smarty_tpl->tpl_vars['role']->value)) {?>
		<p style="font-size: 18px"><strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['role']->value['nombre'];?>
</p>		
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles/edit/<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles">Volver</a>
	</p>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
<?php }} ?>
