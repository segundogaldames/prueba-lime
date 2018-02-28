<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-28 13:27:25
         compiled from "/var/www/html/prueba-lime/views/cargas/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4763856785a96df090bbeb2-70144998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2664fc6644da407e62752843a65213b890aba504' => 
    array (
      0 => '/var/www/html/prueba-lime/views/cargas/view.tpl',
      1 => 1519838842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4763856785a96df090bbeb2-70144998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a96df090e30e5_00012523',
  'variables' => 
  array (
    'carga' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a96df090e30e5_00012523')) {function content_5a96df090e30e5_00012523($_smarty_tpl) {?><div class="col-md-6">
	<h2>Ver Lista</h2>
	<p><strong>Carga:</strong> <?php echo $_smarty_tpl->tpl_vars['carga']->value['id'];?>
</p>
	<p><strong>Encuesta:</strong> <?php echo $_smarty_tpl->tpl_vars['carga']->value['nombre'];?>
</p>
	<p><strong>Cargado Por:</strong> <?php echo $_smarty_tpl->tpl_vars['carga']->value['usuario'];?>
</p>
	<p><strong>Fecha:</strong> <?php echo $_smarty_tpl->tpl_vars['carga']->value['fecha'];?>
</p>
	<p><strong>Estado:</strong> <?php if ($_smarty_tpl->tpl_vars['carga']->value['estado']==1) {?>Activa<?php } else { ?>No Activa<?php }?></p>
	
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/contactosCarga/<?php echo $_smarty_tpl->tpl_vars['carga']->value['id'];?>
" class="btn btn-link btn-sm">Ver Contactos</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cargas/edit/<?php echo $_smarty_tpl->tpl_vars['carga']->value['id'];?>
" class="btn btn-link">Editar</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cargas/delete/<?php echo $_smarty_tpl->tpl_vars['carga']->value['id'];?>
" class="btn btn-link" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cargas/delete/<?php echo $_smarty_tpl->tpl_vars['carga']->value['id'];?>
','la lista <?php echo $_smarty_tpl->tpl_vars['carga']->value['id'];?>
 y eliminar sus contactos')">Eliminar</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cargas" class="btn btn-link">Cargas</a>
	</p>
</div><?php }} ?>
