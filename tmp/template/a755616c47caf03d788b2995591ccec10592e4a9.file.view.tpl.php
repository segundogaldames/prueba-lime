<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-23 16:08:10
         compiled from "/var/www/html/qepd/views/sepultaciones/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7651918345a172aaa1ed497-76254065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a755616c47caf03d788b2995591ccec10592e4a9' => 
    array (
      0 => '/var/www/html/qepd/views/sepultaciones/view.tpl',
      1 => 1511467507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7651918345a172aaa1ed497-76254065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sepultacion' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a172aaa25d0d5_17827576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a172aaa25d0d5_17827576')) {function content_5a172aaa25d0d5_17827576($_smarty_tpl) {?><div class="col-md-2"></div>
<div class="col-md-4">
	<div style="padding-top: 50px"></div>
	<h3>Ver Sepultación</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['sepultacion']->value)&&count($_smarty_tpl->tpl_vars['sepultacion']->value)) {?>
		<p style="font-size: 18px"><strong>Sala velatorio:</strong> <?php if ($_smarty_tpl->tpl_vars['sepultacion']->value['sala']==1) {?>Si<?php } else { ?>No<?php }?></p>
		<p style="font-size: 18px"><strong>Capilla ecuménica:</strong> <?php if ($_smarty_tpl->tpl_vars['sepultacion']->value['capilla']) {?>Si<?php } else { ?>No<?php }?></p>
		<p style="font-size: 18px"><strong>Liturgia o responso:</strong> <?php if ($_smarty_tpl->tpl_vars['sepultacion']->value['liturgia']) {?>Si<?php } else { ?>No<?php }?></p>
		<p style="font-size: 18px"><strong>N° de toldos:</strong> <?php echo $_smarty_tpl->tpl_vars['sepultacion']->value['toldos'];?>
</p>
		<p style="font-size: 18px"><strong>N° de sillas:</strong> <?php echo $_smarty_tpl->tpl_vars['sepultacion']->value['sillas'];?>
</p>
		<p style="font-size: 18px"><strong>Amplificación:</strong> <?php if ($_smarty_tpl->tpl_vars['sepultacion']->value['amplificacion']==1) {?>Si<?php } else { ?>No<?php }?></p>
		<p style="font-size: 18px"><strong>Diácono:</strong> <?php if ($_smarty_tpl->tpl_vars['sepultacion']->value['diacono']==1) {?>Si<?php } else { ?>No<?php }?></p>
		<p style="font-size: 18px"><strong>Coro:</strong> <?php echo $_smarty_tpl->tpl_vars['sepultacion']->value['coro'];?>
 integrantes</p>
		<p style="font-size: 18px"><strong>Cafetería:</strong> <?php if ($_smarty_tpl->tpl_vars['sepultacion']->value['cafeteria']==1) {?> Básica<?php } elseif ($_smarty_tpl->tpl_vars['sepultacion']->value['cafeteria']==2) {?>Superior<?php } else { ?> No disponible<?php }?></p>
		<p style="font-size: 18px"><strong>Plan:</strong> <?php echo $_smarty_tpl->tpl_vars['sepultacion']->value['plan'];?>
</p>
					
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sepultaciones/edit/<?php echo $_smarty_tpl->tpl_vars['sepultacion']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sepultaciones">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div><?php }} ?>
