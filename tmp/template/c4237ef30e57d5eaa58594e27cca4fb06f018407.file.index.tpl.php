<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-21 17:47:36
         compiled from "/var/www/html/prueba-lime/views/contactos/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3970229955a8de1af072328-52330010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4237ef30e57d5eaa58594e27cca4fb06f018407' => 
    array (
      0 => '/var/www/html/prueba-lime/views/contactos/index.tpl',
      1 => 1519249651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3970229955a8de1af072328-52330010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a8de1af093643_48748681',
  'variables' => 
  array (
    'contactos' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8de1af093643_48748681')) {function content_5a8de1af093643_48748681($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/prueba-lime/libs/smarty/libs/plugins/modifier.date_format.php';
?><style type="text/css">
	table{
		font-size: 14px;
	}
	th{
		text-align: center;
	}
</style>
<div class="col-md-12">
	<?php if (isset($_smarty_tpl->tpl_vars['contactos']->value)&&count($_smarty_tpl->tpl_vars['contactos']->value)) {?>
	<table class="table table-hover table-responsive">
		<tr style="background-color: #C2BBB9">
			<th>Nombre</th>
			<th>Rut</th>
			<th>Email</th>
			<th>Comuna</th>
			<th>Región</th>
			<th>Teléfono</th>
			<th>Teléfono 2</th>
			<th>Teléfono 3</th>
			<th>Teléfono 4</th>
			<th>Teléfono 5</th>
			<th>Teléfono 6</th>
			<th>Teléfono 7</th>
			<th>Teléfono 8</th>
			<th>Teléfono 9</th>
			<th>Teléfono 10</th>
			<th>Empresa</th>
			<th>Profesión</th>
			<th>Edad</th>
			<th>Código</th>
			<th>Tienda</th>
			<th>Dato 1</th>
			<th>Dato 2</th>
			<th>Dato 3</th>
			<th>Fecha 1</th>
			<th>Fecha 2</th>
			<th>Fecha 3</th>
			<th>Criterio 1</th>
			<th>Criterio 2</th>
			<th>Encuesta</th>
			<th>Lista</th>
			<th>Usuario</th>
			<th>Estado de Contacto</th>
			<th>Estado de Llamada</th>
			<th>Fecha de Carga</th>
			<th>Fecha de Modificación</th>
			<th>Acciones</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contactos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['rut'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['email'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['comuna'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['region'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['telefono'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['telefono2'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['telefono3'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['telefono4'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['telefono5'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['telefono6'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['telefono7'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['telefono8'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['telefono9'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['telefono10'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['empresa'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['profesion'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['edad'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['codigo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['tienda'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['dato1'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['dato2'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['dato3'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['fecha1'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['fecha2'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['fecha3'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['criterio1'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['criterio2'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['nom_encuesta'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['num_carga'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['usuario'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['c']->value['estado_contacto']==1) {?>Disponible<?php } else { ?>No Disponible<?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['c']->value['llamada'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['creado'],"%d-%m-%Y %H:%I");?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['modificado'],"%d-%m-%Y %H:%I");?>
</td>
				<td>Acciones</td>
			</tr>
		<?php } ?>
	</table>
	<?php } else { ?>
		<p class="text-alert">No hay contactos registrados</p>
	<?php }?>
</div><?php }} ?>