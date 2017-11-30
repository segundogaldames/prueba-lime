<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 12:47:30
         compiled from "/var/www/html/qepd/views/sedes/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14021907365a0dd5d344c216-65023525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6b9c6551b5acd7050c5e139f9a7de5942355709' => 
    array (
      0 => '/var/www/html/qepd/views/sedes/index.tpl',
      1 => 1511801240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14021907365a0dd5d344c216-65023525',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0dd5d347b838_32335370',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'sedes' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0dd5d347b838_32335370')) {function content_5a0dd5d347b838_32335370($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/add">Agregar Sede</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/add">Agregar Teléfono</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas">Ver Empresas</a></p>
</div>
<div class="col-md-8">
<?php if (isset($_smarty_tpl->tpl_vars['sedes']->value)&&count($_smarty_tpl->tpl_vars['sedes']->value)) {?>
		<h3>Lista de Sedes</h3>
		<table class="table table-hover">
			<th>
				Nombre
			</th>
			<th>
				Empresa
			</th>
			<th>
				Comuna
			</th>
			<th>
				Acciones
			</th>
			
				
					<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sedes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['s']->value['sede'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['s']->value['empresa'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['s']->value['comuna'];?>
</td>
							<td>
								<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/view/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
								<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/delete/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/delete/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['s']->value['nombre'];?>
')">Eliminar</a>
							</td>
						</tr>

					<?php } ?>
				
			
		</table>
	<?php } else { ?>
		<h2>No hay sedes asociadas</h2>
		<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/add">Agregar Sede</a></p>
	<?php }?>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
