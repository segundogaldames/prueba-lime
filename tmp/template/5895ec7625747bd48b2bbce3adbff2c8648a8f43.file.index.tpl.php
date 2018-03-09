<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-09 11:39:15
         compiled from "/var/www/html/prueba-lime/views/camposcontactos/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13250051505aa2aa3bd1e8f8-28580548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5895ec7625747bd48b2bbce3adbff2c8648a8f43' => 
    array (
      0 => '/var/www/html/prueba-lime/views/camposcontactos/index.tpl',
      1 => 1520609952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13250051505aa2aa3bd1e8f8-28580548',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5aa2aa3bd79cd5_93429634',
  'variables' => 
  array (
    'campos' => 0,
    '_layoutParams' => 0,
    'cc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa2aa3bd79cd5_93429634')) {function content_5aa2aa3bd79cd5_93429634($_smarty_tpl) {?><div class="col-md-12">
	<h2>Campos Contactos</h2>
	<?php if (isset($_smarty_tpl->tpl_vars['campos']->value)&&count($_smarty_tpl->tpl_vars['campos']->value)) {?>
	<table class="table table-hover table-responsive">
		<tr>
			<th>Encuesta</th>
			<th>Nombre</th>
			<th>Teléfono</th>
			<th>Rut</th>
			<th>Comuna</th>
			<th>Región</th>
			<th>Código</th>
			<th>Dato 1</th>
			<th>Dato 2</th>
			<th>Dato 3</th>
			<th>Dato 4</th>
			<th>Dato 5</th>
			<th>Dato 6</th>
			<th>Dato 7</th>
			<th>Dato 8</th>
			<th>Dato 9</th>
			<th>Dato 10</th>
			<th>Dato 11</th>
			<th>Fecha 1</th>
			<th>Fecha 2</th>
			<th>Fecha 3</th>
			<th>Teléfono 2</th>
			<th>Teléfono 3</th>
			<th>Teléfono 4</th>
			<th>Teléfono 5</th>
			<th>Teléfono 6</th>
			<th>Teléfono 7</th>
			<th>Teléfono 8</th>
			<th>Teléfono 9</th>
			<th>Teléfono 10</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['cc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['campos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cc']->key => $_smarty_tpl->tpl_vars['cc']->value) {
$_smarty_tpl->tpl_vars['cc']->_loop = true;
?>
			<tr>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
camposcontactos/edit/<?php echo $_smarty_tpl->tpl_vars['cc']->value['id'];?>
" title="Editar Campo"><?php echo $_smarty_tpl->tpl_vars['cc']->value['encuesta'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['telefono'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['rut'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['comuna'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['region'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['codigo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['dato1'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['dato2'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['dato3'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['dato4'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['dato5'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['dato6'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['dato7'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['dato8'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['dato9'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['dato10'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['dato11'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['fecha1'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['fecha2'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['fecha3'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['telefono2'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['telefono3'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['telefono4'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['telefono5'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['telefono6'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['telefono7'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['telefono8'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['telefono9'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cc']->value['telefono10'];?>
</td>
			</tr>
		<?php } ?>
	</table>
	<?php } else { ?>
		<p class="text-info">No hay campos registrados</p>
	<?php }?>
</div><?php }} ?>
