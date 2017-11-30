<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-16 16:35:46
         compiled from "/var/www/html/qepd/views/velatorios/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13145255545a0de2a8597e65-01829641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5b087dd4468225da9a224f98a74d0e180753b7b' => 
    array (
      0 => '/var/www/html/qepd/views/velatorios/view.tpl',
      1 => 1510864534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13145255545a0de2a8597e65-01829641',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0de2a8613509_66906979',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'velatorio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0de2a8613509_66906979')) {function content_5a0de2a8613509_66906979($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
velatorios/add">Agregar Velatorio</a></p>
</div>
<div class="col-md-4">
	
	<h3>Ver Velatorio</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['velatorio']->value)&&count($_smarty_tpl->tpl_vars['velatorio']->value)) {?>
		<p><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/componentes/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['velatorio']->value['imagen'];?>
" alt="Imagen Velatorio"></p>
		<p style="font-size: 18px"><strong>Trámites:</strong> <?php echo ucfirst($_smarty_tpl->tpl_vars['velatorio']->value['tramites']);?>
</p>
		<p style="font-size: 18px"><strong>Asesor a domicilio:</strong> <?php if ($_smarty_tpl->tpl_vars['velatorio']->value['asesor']==1) {?> Si <?php } else { ?>No <?php }?></p>
		<p style="font-size: 18px"><strong>Sala velatorio:</strong> <?php if ($_smarty_tpl->tpl_vars['velatorio']->value['sala']==1) {?> Si <?php } else { ?>No <?php }?></p>
		<p style="font-size: 18px"><strong>Capilla ecuménica:</strong> <?php if ($_smarty_tpl->tpl_vars['velatorio']->value['capilla']==1) {?> Si <?php } else { ?>No <?php }?></p>
		<p style="font-size: 18px"><strong>N° de Cirios:</strong> <?php echo $_smarty_tpl->tpl_vars['velatorio']->value['cirios'];?>
</p>
		<p style="font-size: 18px"><strong>N° de Portacirios:</strong> <?php echo $_smarty_tpl->tpl_vars['velatorio']->value['portacirios'];?>
</p>
		<p style="font-size: 18px"><strong>N° de Cruces:</strong> <?php echo $_smarty_tpl->tpl_vars['velatorio']->value['cruces'];?>
</p>
		<p style="font-size: 18px"><strong>N° de Flores en canasto:</strong> <?php echo $_smarty_tpl->tpl_vars['velatorio']->value['florescanastos'];?>
</p>
		<p style="font-size: 18px"><strong>N° de Flores cubreurna:</strong> <?php echo $_smarty_tpl->tpl_vars['velatorio']->value['florescubreurnas'];?>
</p>
		<p style="font-size: 18px"><strong>N° de Libros de Condolencias:</strong> <?php echo $_smarty_tpl->tpl_vars['velatorio']->value['condolencias'];?>
</p>
		<p style="font-size: 18px"><strong>Parroco:</strong> <?php if ($_smarty_tpl->tpl_vars['velatorio']->value['parroco']==1) {?> Si<?php } else { ?> No<?php }?></p>
		<p style="font-size: 18px"><strong>N° de Integrantes del coro:</strong> <?php echo $_smarty_tpl->tpl_vars['velatorio']->value['coro'];?>
</p>
		<p style="font-size: 18px"><strong>N° de Avisos de prensa:</strong> <?php echo $_smarty_tpl->tpl_vars['velatorio']->value['avisosprensa'];?>
</p>
		<p style="font-size: 18px"><strong>N° de Tarjetas de agradecimiento:</strong> <?php echo $_smarty_tpl->tpl_vars['velatorio']->value['tarjetas'];?>
</p>
		<p style="font-size: 18px"><strong>Cafetería:</strong> <?php if ($_smarty_tpl->tpl_vars['velatorio']->value['cafeteria']==1) {?> Básica<?php } elseif ($_smarty_tpl->tpl_vars['velatorio']->value['cafeteria']==2) {?> Superior<?php } else { ?> Ninguna<?php }?></p>
		<p style="font-size: 18px"><strong>Plan:</strong> <?php echo ucfirst($_smarty_tpl->tpl_vars['velatorio']->value['plan']);?>
</p>			
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
velatorios/edit/<?php echo $_smarty_tpl->tpl_vars['velatorio']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
velatorios">Volver</a>
	</p>
	<hr>
</div>
<div class="col-md-4">
	
</div>	
<?php }} ?>
