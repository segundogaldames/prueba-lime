<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-26 17:06:07
         compiled from "/var/www/html/prueba-lime/views/contactos/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20178928695aa188b4f31959-81642111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5df2bbc921bcf71fbf13a9bbbf34398f42d12480' => 
    array (
      0 => '/var/www/html/prueba-lime/views/contactos/view.tpl',
      1 => 1522094762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20178928695aa188b4f31959-81642111',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5aa188b4f3a6f9_75286058',
  'variables' => 
  array (
    'contacto' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa188b4f3a6f9_75286058')) {function content_5aa188b4f3a6f9_75286058($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/prueba-lime/libs/smarty/libs/plugins/modifier.date_format.php';
?><div class="row">
	<div class="col-md-6">
		<h2>Ver Contacto</h2>
		<table class="table table-hover">
			<tr>
				<th>Nombre:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['nombre'];?>
</td>
			</tr>
			<tr>
				<th>Teléfono:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['telefono'];?>
</td>
			</tr>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['rut'])) {?>
			<tr>
				<th>RUT:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['rut'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['comuna'])) {?>
			<tr>
				<th>Comuna:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['comuna'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['region'])) {?>
			<tr>
				<th>Región:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['region'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['codigo'])) {?>
			<tr>
				<th>Código:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['codigo'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato1'])) {?>
			<tr>
				<th>Dato 1:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato1'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato2'])) {?>
			<tr>
				<th>Dato 2:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato2'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato3'])) {?>
			<tr>
				<th>Dato 3:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato3'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato4'])) {?>
			<tr>
				<th>Dato 4:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato4'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato5'])) {?>
			<tr>
				<th>Dato 5:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato5'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato6'])) {?>
			<tr>
				<th>Dato 6:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato6'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato7'])) {?>
			<tr>
				<th>Dato 7:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato7'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato8'])) {?>
			<tr>
				<th>Dato 8:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato8'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato9'])) {?>
			<tr>
				<th>Dato 9:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato9'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato10'])) {?>
			<tr>
				<th>Dato 10:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato10'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato11'])) {?>
			<tr>
				<th>Dato 11:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato11'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['telefono2'])) {?>
			<tr>
				<th>Teléfono 2:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['telefono2'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['telefono3'])) {?>
			<tr>
				<th>Teléfono 3:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['telefono3'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['telefono4'])) {?>
			<tr>
				<th>Teléfono 4:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['telefono4'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['telefono5'])) {?>
			<tr>
				<th>Teléfono 5:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['telefono5'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['telefono6'])) {?>
			<tr>
				<th>Teléfono 6:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['telefono6'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['telefono7'])) {?>
			<tr>
				<th>Teléfono 7:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['telefono7'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['telefono8'])) {?>
			<tr>
				<th>Teléfono 8:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['telefono8'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['telefono9'])) {?>
			<tr>
				<th>Teléfono 9:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['telefono9'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['telefono10'])) {?>
			<tr>
				<th>Teléfono 10:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['telefono10'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['fecha1'])) {?>
			<tr>
				<th>Fecha 1:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['fecha1'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['fecha2'])) {?>
			<tr>
				<th>Fecha 2:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['fecha2'];?>
</td>
			</tr>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['fecha3'])) {?>
			<tr>
				<th>Fecha 3:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['fecha3'];?>
</td>
			</tr>
			<?php }?>
		</table>
	</div>
	<div class="col-md-6">
		<table class="table table-hover" style="margin-top: 40px">
			<tr>
				<th>Estado de Contacto:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['e_contacto'];?>
</td>
			</tr>
			<tr>
				<th>Estado de Llamada:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['llamada'];?>
</td>
			</tr>
			<tr>
				<th>Encuesta:</th>
				<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['nom_encuesta'];?>
</td>
			</tr>
			<tr>
				<th>Fecha Creación:</th>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['contacto']->value['creado'],"%d-%m-%Y %H:%M");?>
</td>
			</tr>
			<tr>
				<th>Fecha Modificación:</th>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['contacto']->value['modificado'],"%d-%m-%Y %H:%M");?>
</td>
			</tr>
		</table>
		<p>
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/edit/<?php echo $_smarty_tpl->tpl_vars['contacto']->value['id'];?>
" class="btn btn-link">Editar</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cargas" class="btn btn-link">Listas</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos" class="btn btn-link">Contactos</a>
		</p>
	</div>
</div><?php }} ?>
