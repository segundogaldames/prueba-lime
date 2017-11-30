<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-16 14:16:11
         compiled from "/var/www/html/qepd/views/sedes/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2053217645a0dd5ebab92b5-91688971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29437d0a2a4e9962cbaef997d1c39e8505cb7343' => 
    array (
      0 => '/var/www/html/qepd/views/sedes/view.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2053217645a0dd5ebab92b5-91688971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'sede' => 0,
    'telefonos' => 0,
    'tel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0dd5ebb4aa14_31688233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0dd5ebb4aa14_31688233')) {function content_5a0dd5ebb4aa14_31688233($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/add">Agregar Teléfono</a></p>
</div>
<div class="col-md-4">
	
	<h3>Ver Sede</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['sede']->value)&&count($_smarty_tpl->tpl_vars['sede']->value)) {?>
		<p style="font-size: 18px"><strong>Sede:</strong> <?php echo $_smarty_tpl->tpl_vars['sede']->value['sede'];?>
</p>
		<p style="font-size: 18px"><strong>Direccion:</strong> <?php echo $_smarty_tpl->tpl_vars['sede']->value['calle'];?>
 <?php echo $_smarty_tpl->tpl_vars['sede']->value['numero'];?>
 <?php echo $_smarty_tpl->tpl_vars['sede']->value['sector'];?>
</p>	
		<p style="font-size: 18px"><strong>Comuna:</strong> <?php echo $_smarty_tpl->tpl_vars['sede']->value['comuna'];?>
</p>	
		
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/edit/<?php echo $_smarty_tpl->tpl_vars['sede']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes">Volver</a>
	</p>
	<hr>
	<h4>Teléfonos</h4>
		<?php if (isset($_smarty_tpl->tpl_vars['telefonos']->value)&&count($_smarty_tpl->tpl_vars['telefonos']->value)) {?>
			<table class="table table-hover">
				<tr>
					<th>Números</th>
				</tr>
				
					<?php  $_smarty_tpl->tpl_vars['tel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['telefonos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tel']->key => $_smarty_tpl->tpl_vars['tel']->value) {
$_smarty_tpl->tpl_vars['tel']->_loop = true;
?>
						<tr>
							<td><img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
phone.jpeg" alt="" width="20"><?php echo $_smarty_tpl->tpl_vars['tel']->value['numero'];?>
</td>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/edit/<?php echo $_smarty_tpl->tpl_vars['tel']->value['id'];?>
" class="btn btn-link">Editar</a></td>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/delete/<?php echo $_smarty_tpl->tpl_vars['tel']->value['id'];?>
" onclick="return eliminar('$_layoutParams.root}telefonos/delete/<?php echo $_smarty_tpl->tpl_vars['tel']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['tel']->value['numero'];?>
');" class="btn btn-link">Eliminar</a></td>
						</tr>

					<?php } ?>
				
			</table>
		<?php } else { ?>
			<strong>No hay teléfonos asociados</strong>
			<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/add">Agregar Teléfono</a></p>
		<?php }?>
</div>
<div class="col-md-4">
	
</div>	
<?php }} ?>
