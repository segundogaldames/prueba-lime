<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-17 12:33:51
         compiled from "/var/www/html/qepd/views/planes/planesComuna.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16319144795a0f0f6f5b00d3-87215009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c269a6f4139f794cf1cd762de453ae89e9e0729' => 
    array (
      0 => '/var/www/html/qepd/views/planes/planesComuna.tpl',
      1 => 1510936409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16319144795a0f0f6f5b00d3-87215009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comunas' => 0,
    '_layoutParams' => 0,
    'c' => 0,
    'planes' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0f0f6f615345_22752624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0f0f6f615345_22752624')) {function content_5a0f0f6f615345_22752624($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2" style="padding-left: 30px">
	<div style="padding-top: 50px"></div>
	<h4>Buscar por comunas o ciudades</h4>
	<ul class="list-unstyled">
		<?php if (isset($_smarty_tpl->tpl_vars['comunas']->value)&&count($_smarty_tpl->tpl_vars['comunas']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comunas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesComuna/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['comuna'];?>
</a></li>
			<?php } ?>
		<?php }?>
	</ul>
</div>
<div class="col-md-8">
	<h3>Ver Planes</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['planes']->value)&&count($_smarty_tpl->tpl_vars['planes']->value)) {?>
	<table class="table table-hover">
		<th>
			Precio
		</th>
		<th>
			Funeraria o Empresa
		</th>
		<th>
			Nombre del Plan
		</th>
		<th>
			Tipo de Plan
		</th>
		<th>
			Destinatario
		</th>
		<th>
			Comuna o Ciudad
		</th>
		<th>
			Acciones
		</th>
		
			
				<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
					<tr>
						<td>$ <?php echo number_format($_smarty_tpl->tpl_vars['p']->value['precio'],0,",",".");?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['p']->value['empresa'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['p']->value['tipo_plan'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['p']->value['destinatario'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['p']->value['comuna'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
imagenes/imagenesplan/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">Ver Detalles</a>&nbsp;&nbsp;
						</td>
					</tr>

				<?php } ?>
			
		
	</table>
	<?php } else { ?>
		<strong>No hay planes asociados</strong>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/9" class="btn btn-link">Planes Funerarios</a></p>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/10" class="btn btn-link">Planes Cinerarios</a></p>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/11" class="btn btn-link">Planes Sepulturas</a></p>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/12" class="btn btn-link">Planes Sepultación</a></p>
	<?php }?>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
