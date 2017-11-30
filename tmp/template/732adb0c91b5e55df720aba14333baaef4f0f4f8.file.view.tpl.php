<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-17 12:02:50
         compiled from "/var/www/html/qepd/views/traslados/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6796433855a0f0285a05617-17403269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '732adb0c91b5e55df720aba14333baaef4f0f4f8' => 
    array (
      0 => '/var/www/html/qepd/views/traslados/view.tpl',
      1 => 1510934566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6796433855a0f0285a05617-17403269',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0f0285a5ede4_21122324',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'traslado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0f0285a5ede4_21122324')) {function content_5a0f0285a5ede4_21122324($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
urnas/add">Agregar Traslado</a></p>
</div>
<div class="col-md-4">
	
	<h3>Ver Traslado</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['traslado']->value)&&count($_smarty_tpl->tpl_vars['traslado']->value)) {?>
		<p><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/componentes/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['traslado']->value['imagen'];?>
" alt="Imagen traslado"></p>
		<p style="font-size: 18px"><strong>Carroza de Instalación:</strong> <?php if ($_smarty_tpl->tpl_vars['traslado']->value['instalacion']==1) {?> Si<?php } else { ?> No<?php }?></p>
		<p style="font-size: 18px"><strong>Carroza de Funeral:</strong> <?php if ($_smarty_tpl->tpl_vars['traslado']->value['funeral']==1) {?> Si<?php } else { ?> No<?php }?></p>
		<p style="font-size: 18px"><strong>Carroza con Flores:</strong> <?php if ($_smarty_tpl->tpl_vars['traslado']->value['conflores']==1) {?> Si<?php } else { ?> No<?php }?></p>
		<p style="font-size: 18px"><strong>Vehículo de Acompañamiento:</strong> <?php if ($_smarty_tpl->tpl_vars['traslado']->value['acompanamiento']==1) {?> Si<?php } else { ?> No<?php }?></p>
		<p style="font-size: 18px"><strong>N° de Pasajeros:</strong> <?php echo $_smarty_tpl->tpl_vars['traslado']->value['pasajeros'];?>
</p>
		<p style="font-size: 18px"><strong>Plan:</strong> <?php echo ucfirst($_smarty_tpl->tpl_vars['traslado']->value['plan']);?>
</p>			
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
traslados/edit/<?php echo $_smarty_tpl->tpl_vars['traslado']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
traslados">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	
<?php }} ?>
