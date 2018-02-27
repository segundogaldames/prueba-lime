<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-26 14:52:58
         compiled from "/var/www/html/prueba-lime/views/contactos/ajax/prueba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19981639495a94578aac2611-31991307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0784780c83370285438e29aa7c033389336d179' => 
    array (
      0 => '/var/www/html/prueba-lime/views/contactos/ajax/prueba.tpl',
      1 => 1519665796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19981639495a94578aac2611-31991307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contactos' => 0,
    '_layoutParams' => 0,
    'c' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a94578aae0bc4_74077759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a94578aae0bc4_74077759')) {function content_5a94578aae0bc4_74077759($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/prueba-lime/libs/smarty/libs/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['contactos']->value)&&count($_smarty_tpl->tpl_vars['contactos']->value)) {?>
	
		<table class="table table-hover table-condensed">
			<tr style="background-color: #eeebeb">
				<th>Nombre</th>
				<th>Teléfono</th>
				<th>Teléfono 2</th>
				<th>Teléfono 3</th>
				<th>Encuesta</th>
				<th>Lista</th>
				<th>Usuario</th>
				<th>Estado de Contacto</th>
				<th>Estado de Llamada</th>
				<th>Fecha de Carga</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contactos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
				<tr>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/view/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"><?php echo ucwords($_smarty_tpl->tpl_vars['c']->value['nombre']);?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['c']->value['telefono'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['c']->value['telefono2'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['c']->value['telefono3'];?>
</td>
					<td><?php echo ucwords($_smarty_tpl->tpl_vars['c']->value['nom_encuesta']);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['c']->value['num_carga'];?>
</td>
					<td><?php echo ucwords($_smarty_tpl->tpl_vars['c']->value['usuario']);?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['c']->value['estado_contacto']==1) {?>Disponible<?php } else { ?>No Disponible<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['c']->value['llamada'];?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['creado'],"%d-%m-%Y %H:%I");?>
</td>
				</tr>

			<?php } ?>
		</table>
			<?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)) {
echo $_smarty_tpl->tpl_vars['paginacion']->value;
}?>
		<?php } else { ?>
			<p class="text-alert">No hay contactos registrados</p>
		<?php }?><?php }} ?>
