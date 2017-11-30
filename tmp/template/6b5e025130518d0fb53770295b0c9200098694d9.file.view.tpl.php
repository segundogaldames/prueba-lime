<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 12:53:28
         compiled from "/var/www/html/qepd/views/tipoempresas/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5913190175a1c400acb6226-23016740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b5e025130518d0fb53770295b0c9200098694d9' => 
    array (
      0 => '/var/www/html/qepd/views/tipoempresas/view.tpl',
      1 => 1511801432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5913190175a1c400acb6226-23016740',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1c400ae6c778_22838097',
  'variables' => 
  array (
    'tipo' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1c400ae6c778_22838097')) {function content_5a1c400ae6c778_22838097($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Ver Tipo Empresa</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['tipo']->value)&&count($_smarty_tpl->tpl_vars['tipo']->value)) {?>
		<p style="font-size: 18px"><strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['tipo']->value['nombre'];?>
</p>
		
	
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoempresas/edit/<?php echo $_smarty_tpl->tpl_vars['tipo']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoempresas">Volver</a>
	</p>

	<?php }?>
</div>
<div class="col-md-4">
	
</div>	
<?php }} ?>
