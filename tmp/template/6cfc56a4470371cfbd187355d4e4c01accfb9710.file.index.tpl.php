<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 12:16:39
         compiled from "/var/www/html/qepd/views/empresas/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15804069545a18798d12c043-99899230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cfc56a4470371cfbd187355d4e4c01accfb9710' => 
    array (
      0 => '/var/www/html/qepd/views/empresas/index.tpl',
      1 => 1511799351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15804069545a18798d12c043-99899230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a18798d19e606_05011170',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'empresas' => 0,
    'emp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a18798d19e606_05011170')) {function content_5a18798d19e606_05011170($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="menu-top">Empresa</p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas/add">Agregar Empresa</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
tipoempresas/">Ver Tipo Empresas</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/">Ver Sedes</a></p>
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
telefonos/">Ver Teléfonos</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Empresas</h3>
	<?php if (isset($_smarty_tpl->tpl_vars['empresas']->value)&&count($_smarty_tpl->tpl_vars['empresas']->value)) {?>
	<table class="table table-hover">
		<th>
			Nombre
		</th>
		<th>
			Email
		</th>
		<th>
			Usuario
		</th>
		<th>
			Tipo Empresa
		</th>
		<th>
			Acciones
		</th>
		
			
				<?php  $_smarty_tpl->tpl_vars['emp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['emp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['empresas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['emp']->key => $_smarty_tpl->tpl_vars['emp']->value) {
$_smarty_tpl->tpl_vars['emp']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['emp']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['emp']->value['email'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['emp']->value['nom_usuario'];?>
 <?php echo $_smarty_tpl->tpl_vars['emp']->value['apellido'];?>
 </td>
						<td><?php echo $_smarty_tpl->tpl_vars['emp']->value['tipo'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas/view/<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas/delete/<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas/delete/<?php echo $_smarty_tpl->tpl_vars['emp']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['emp']->value['nombre'];?>
')">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
				
		
	</table>
	<?php } else { ?>
				<strong>No hay empresas registradas</strong>
	<?php }?>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
