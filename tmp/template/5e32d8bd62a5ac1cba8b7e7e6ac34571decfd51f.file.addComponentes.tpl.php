<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-17 10:29:49
         compiled from "/var/www/html/qepd/views/componentes/addComponentes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10347380935a0ef25de0cca7-36488930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e32d8bd62a5ac1cba8b7e7e6ac34571decfd51f' => 
    array (
      0 => '/var/www/html/qepd/views/componentes/addComponentes.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10347380935a0ef25de0cca7-36488930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'componentesServicios' => 0,
    'cs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0ef25de6b881_24419836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ef25de6b881_24419836')) {function content_5a0ef25de6b881_24419836($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes">Ver Planes</a></p>
</div>
<div class="col-md-8">
	<h3>Componentes Por Servicios</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['componentesServicios']->value)&&count($_smarty_tpl->tpl_vars['componentesServicios']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['cs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentesServicios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->key => $_smarty_tpl->tpl_vars['cs']->value) {
$_smarty_tpl->tpl_vars['cs']->_loop = true;
?>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];
echo $_smarty_tpl->tpl_vars['cs']->value['url'];?>
">Agregar <?php echo $_smarty_tpl->tpl_vars['cs']->value['nombre'];?>
</a></p>
		<?php } ?>
	<?php }?>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
