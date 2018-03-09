<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-09 16:20:17
         compiled from "/var/www/html/prueba-lime/views/contactos/resultados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15023481305aa2bd52d834c1-40993375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e263332fe2fa2527d8b6ce38d4c43eb969eaf1cb' => 
    array (
      0 => '/var/www/html/prueba-lime/views/contactos/resultados.tpl',
      1 => 1520626813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15023481305aa2bd52d834c1-40993375',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5aa2bd52d83cc7_98124975',
  'variables' => 
  array (
    'contacto' => 0,
    '_layoutParams' => 0,
    'c' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa2bd52d83cc7_98124975')) {function content_5aa2bd52d83cc7_98124975($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/prueba-lime/libs/smarty/libs/plugins/modifier.date_format.php';
?><style type="text/css">
	table{
		font-size: 14px;
	}
	th{
		text-align: center;
	}
</style>
<div class="col-md-12">		
	
		<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value)&&count($_smarty_tpl->tpl_vars['contacto']->value)) {?>
	
		<table class="table table-hover table-condensed table-responsive">
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
				<th>Fecha Gestión</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contacto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
					<td><?php echo $_smarty_tpl->tpl_vars['c']->value['e_contacto'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['c']->value['llamada'];?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['creado'],"%d-%m-%Y %H:%I");?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['modificado'],"%d-%m-%Y %H:%I");?>
</td>
				</tr>

			<?php } ?>
		</table>
			<?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)) {
echo $_smarty_tpl->tpl_vars['paginacion']->value;
}?>
		<?php } else { ?>
			<p class="text-alert">No hay contactos registrados con este número</p>
		<?php }?>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos" class="btn btn-link">Volver</a></p>
	
</div><?php }} ?>
