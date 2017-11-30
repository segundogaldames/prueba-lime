<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 10:52:10
         compiled from "/var/www/html/qepd/views/usuario/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12049093965a1c1c234d66f2-91654047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bebdfe0fe000ad9e1d3ed012433e7b583b629e19' => 
    array (
      0 => '/var/www/html/qepd/views/usuario/view.tpl',
      1 => 1511794311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12049093965a1c1c234d66f2-91654047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1c1c234f7d74_09015770',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1c1c234f7d74_09015770')) {function content_5a1c1c234f7d74_09015770($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/add">Agregar Usuario</a></p>
</div>
<div class="col-md-4">
	
	<h3>Ver Usuario</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)&&count($_smarty_tpl->tpl_vars['usuario']->value)) {?>
		<p style="font-size: 18px"><strong>Nombre:</strong> <?php echo ucfirst($_smarty_tpl->tpl_vars['usuario']->value['nombre']);?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['usuario']->value['apellido']);?>
</p>
		<p style="font-size: 18px"><strong>Email:</strong> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</p>
		<p style="font-size: 18px"><strong>Rol:</strong> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['rol'];?>
</p>
		<p style="font-size: 18px"><strong>Fecha de creación:</strong> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['created'];?>
</p>
		<p style="font-size: 18px"><strong>Fecha de actualización:</strong> <?php echo $_smarty_tpl->tpl_vars['usuario']->value['updated'];?>
</p>
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario/edit/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuario">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>

<?php }} ?>
