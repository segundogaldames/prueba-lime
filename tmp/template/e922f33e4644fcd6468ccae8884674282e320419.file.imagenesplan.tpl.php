<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-17 12:12:46
         compiled from "/var/www/html/qepd/views/imagenes/imagenesplan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14260299265a0f0a7e2ded52-07028632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e922f33e4644fcd6468ccae8884674282e320419' => 
    array (
      0 => '/var/www/html/qepd/views/imagenes/imagenesplan.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14260299265a0f0a7e2ded52-07028632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imagenes' => 0,
    'img' => 0,
    '_layoutParams' => 0,
    'condiciones' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0f0a7e371a43_60826292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0f0a7e371a43_60826292')) {function content_5a0f0a7e371a43_60826292($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	
</div>
<div class="col-md-8">
	<h3>Planes Consulta</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['imagenes']->value)&&count($_smarty_tpl->tpl_vars['imagenes']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
			<div class="col-md-4">
				<figure>
					<h3><?php echo $_smarty_tpl->tpl_vars['img']->value['titulo'];?>
</h3>
					<a href="#" ><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/componentes/<?php echo $_smarty_tpl->tpl_vars['img']->value['nombre'];?>
" alt="" class="img-responsive"></a>
					
				</figure>
			</div>
			
		<?php } ?>
		<div class="col-md-12">
			<h2>Condiciones</h2>
			<?php if (isset($_smarty_tpl->tpl_vars['condiciones']->value)&&count($_smarty_tpl->tpl_vars['condiciones']->value)) {?>
				<table class="table table-hover table-striped">
					<tr>
						<th>Precio Plan</th>
						<td>: $ <?php echo $_smarty_tpl->tpl_vars['condiciones']->value['precio'];?>
</td>
					</tr>
					<tr>
						<th>Forma de Pago</th>
						<td>: <?php echo $_smarty_tpl->tpl_vars['condiciones']->value['formapago'];?>
</td>
					</tr>
					<tr>
						<th>Pago a Plazo</th>
						<td>: <?php if ($_smarty_tpl->tpl_vars['condiciones']->value['plazopago']==1) {?>Si <?php } else { ?> No<?php }?></td>
					</tr>
					<tr>
						<th>Compra Anticipada</th>
						<td>: <?php if ($_smarty_tpl->tpl_vars['condiciones']->value['compraanticipada']==1) {?>Si <?php } else { ?> No<?php }?></td>
					</tr>
					<tr>
						<th>Seguro Deceso</th>
						<td>: <?php if ($_smarty_tpl->tpl_vars['condiciones']->value['segurodeceso']==1) {?>Si <?php } else { ?> No<?php }?></td>
					</tr>
					<tr>
						<th>Convenios</th>
						<td>: <?php echo $_smarty_tpl->tpl_vars['condiciones']->value['convenios'];?>
</td>
					</tr>
					<tr>
						<th>Descuento en Columbario</th>
						<td>: <?php if ($_smarty_tpl->tpl_vars['condiciones']->value['descuentocol']==0) {?>No <?php } else {
echo $_smarty_tpl->tpl_vars['condiciones']->value['descuentocol'];?>
%<?php }?></td>
					</tr>
					<tr>
						<th>Descuento Nicho</th>
						<td>: <?php if ($_smarty_tpl->tpl_vars['condiciones']->value['descuentonicho']==0) {?>No <?php } else {
echo $_smarty_tpl->tpl_vars['condiciones']->value['descuentonicho'];?>
%<?php }?></td>
					</tr>
					<tr>
						<th>Pensiones</th>
						<td>: <?php if ($_smarty_tpl->tpl_vars['condiciones']->value['pensiones']==1) {?>Si <?php } else { ?> No<?php }?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>

				</table>
			<?php }?>
			<br><br>
			<a href="" class="btn btn-primary">Cotizar</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios" class="btn btn-link">Volver</a>
		</div>
		
		<?php } else { ?>
			<strong>No hay imágenes asociadas</strong>

	<?php }?>
2
</div>

<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
