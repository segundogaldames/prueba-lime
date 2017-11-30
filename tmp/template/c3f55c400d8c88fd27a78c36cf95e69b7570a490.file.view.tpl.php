<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-15 12:33:34
         compiled from "/var/www/html/qepd/views/urnas/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3014160745a0c6c5e670062-16270902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3f55c400d8c88fd27a78c36cf95e69b7570a490' => 
    array (
      0 => '/var/www/html/qepd/views/urnas/view.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3014160745a0c6c5e670062-16270902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'urna' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0c6c5e6ceba7_93685375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0c6c5e6ceba7_93685375')) {function content_5a0c6c5e6ceba7_93685375($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
urnas/add">Agregar Urna</a></p>
</div>
<div class="col-md-4">
	
	<h3>Ver Urna</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['urna']->value)&&count($_smarty_tpl->tpl_vars['urna']->value)) {?>
		<p><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/componentes/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['urna']->value['imagen'];?>
"></p>
		<p style="font-size: 18px"><strong>Modelo:</strong> <?php echo ucfirst($_smarty_tpl->tpl_vars['urna']->value['modelo']);?>
</p>
		<p style="font-size: 18px"><strong>Medidas:</strong> <?php echo ucfirst($_smarty_tpl->tpl_vars['urna']->value['medidas']);?>
</p>
		<p style="font-size: 18px"><strong>Material:</strong> <?php echo ucfirst($_smarty_tpl->tpl_vars['urna']->value['material']);?>
</p>
		<p style="font-size: 18px"><strong>Terminaciones:</strong> <?php echo ucfirst($_smarty_tpl->tpl_vars['urna']->value['terminaciones']);?>
</p>
		<p style="font-size: 18px"><strong>Color:</strong> <?php echo ucfirst($_smarty_tpl->tpl_vars['urna']->value['color']);?>
</p>
		<p style="font-size: 18px"><strong>Plan:</strong> <?php echo ucfirst($_smarty_tpl->tpl_vars['urna']->value['plan']);?>
</p>			
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
urnas/edit/<?php echo $_smarty_tpl->tpl_vars['urna']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
urnas">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	
<?php }} ?>
