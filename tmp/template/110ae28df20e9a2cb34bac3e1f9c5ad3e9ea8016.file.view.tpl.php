<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-06 16:52:32
         compiled from "/var/www/html/prueba-lime/views/encuestas/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9185742495a257f02d3df57-44357234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110ae28df20e9a2cb34bac3e1f9c5ad3e9ea8016' => 
    array (
      0 => '/var/www/html/prueba-lime/views/encuestas/view.tpl',
      1 => 1512593546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9185742495a257f02d3df57-44357234',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a257f02d85481_54982699',
  'variables' => 
  array (
    'encuesta' => 0,
    '_layoutParams' => 0,
    'usuarios' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a257f02d85481_54982699')) {function content_5a257f02d85481_54982699($_smarty_tpl) {?><div class="col-md-12">
	<h2>Ver encuesta: <?php echo $_smarty_tpl->tpl_vars['encuesta']->value['nombre'];?>
</h2>
	<p><strong>Link:</strong> <?php echo $_smarty_tpl->tpl_vars['encuesta']->value['link'];?>
</p>
	<p><strong>Status:</strong> <?php if ($_smarty_tpl->tpl_vars['encuesta']->value['status']==1) {?>Activa<?php } else { ?>No activa<?php }?></p>
	
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/edit/<?php echo $_smarty_tpl->tpl_vars['encuesta']->value['id'];?>
" class="btn btn-link btn-sm">Editar</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas" class="btn btn-link btn-sm">Encuestas</a>
	</p>
	<hr>
	<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
		<h4>Usuarios asociados</h4>
		<ul type="square"></ul>
			<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/view/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->tpl_vars['u']->value['nombre'];?>
</a></li>
			<?php } ?>
	<?php } else { ?>
		<strong>No hay usuarios asociados</strong>
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestasusuarios/add" class="btn btn-link">Asociar Usuarios</a></p>
</div><?php }} ?>
