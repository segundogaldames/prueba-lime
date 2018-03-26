<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-26 14:31:17
         compiled from "/var/www/html/prueba-lime/views/contactos/contactosCarga.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20651652335a8d82a9ee8961-77050485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '494949f02127368863ca8e87cf5c26ce4df5fc03' => 
    array (
      0 => '/var/www/html/prueba-lime/views/contactos/contactosCarga.tpl',
      1 => 1522085470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20651652335a8d82a9ee8961-77050485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a8d82aa0093f6_66418201',
  'variables' => 
  array (
    'contactos' => 0,
    'carga' => 0,
    'num_contactos' => 0,
    'num_encuestados' => 0,
    'num_estados' => 0,
    '_layoutParams' => 0,
    'ne' => 0,
    'enviar' => 0,
    'c' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8d82aa0093f6_66418201')) {function content_5a8d82aa0093f6_66418201($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/prueba-lime/libs/smarty/libs/plugins/modifier.date_format.php';
?><style type="text/css">
	#table-datos{
		text-align: center;
		font-size: 14px;
	}
</style>
<div class="row">
	<div class="container-fluid">
		<div class="col-md-12">
			<div id="lista">
				<?php if (isset($_smarty_tpl->tpl_vars['contactos']->value)&&count($_smarty_tpl->tpl_vars['contactos']->value)) {?>
				<div class="jumbotron">
					<h2>Lista de Contactos</h3>
					<div class="col-md-4">
						<table class="table table-hover table-responsive">
							<tr>
								<th>N° Carga:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['carga']->value['id'];?>
</td>
							</tr>
							<tr>
								<th>Fecha de carga:</th>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['carga']->value['fecha'],"%d-%m-%Y %H:%M");?>
</td>
							</tr>
							<tr>
								<th>Cargados:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['num_contactos']->value;?>
</td>
							</tr>
							<tr>
								<th>Encuestados:</th>
								<td><?php echo $_smarty_tpl->tpl_vars['num_encuestados']->value;?>
</td>
							</tr>
						</table>
						<table class="table table-hover">
							<tr style="background-color:  #d9d9da">
								<th>Estado</th>
								<th>Valor</th>
							</tr>
							<?php if (isset($_smarty_tpl->tpl_vars['num_estados']->value)&&count($_smarty_tpl->tpl_vars['num_estados']->value)) {?>
								<?php  $_smarty_tpl->tpl_vars['ne'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ne']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['num_estados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ne']->key => $_smarty_tpl->tpl_vars['ne']->value) {
$_smarty_tpl->tpl_vars['ne']->_loop = true;
?>
									<tr>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/contactosCargaEstado/<?php echo $_smarty_tpl->tpl_vars['carga']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['ne']->value['estado_contacto'];?>
" class="btn btn-link btn-sm"><?php echo ucwords($_smarty_tpl->tpl_vars['ne']->value['estado']);?>
(s)</a></td>
										<td><?php echo $_smarty_tpl->tpl_vars['ne']->value['filas'];?>
</td>
									</tr>
								<?php } ?>
							<?php }?>
						</table>
					</div>
					<div>
						<form action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/resultados" method="post" class="form-inline">
							<label>Número de Teléfono:&nbsp;</label>
							<input type="text" name="telefono" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Buscar por teléfono">
							<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
							<input type="submit" value="Buscar" class="btn btn-primary">
						</form>
					</div>
					<div style="margin-top: 20px">
						<form action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/estadoLlamada" method="post" class="form-inline">
							<label>Estado de Llamada:&nbsp;</label>
							<input type="text" name="llamada" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Buscar por estado de llamada">
							<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
							<input type="submit" value="Buscar" class="btn btn-primary">
						</form>
					</div>
				</div>
					<table class="table table-hover" id="table-datos">
						<tr style="background-color: #eeebeb">
							<th>Nombre</th>
							<th>Teléfono</th>
							<th>Teléfono 2</th>
							<th>Teléfono 3</th>
							<th>Encuesta</th>
							<<th>Criterio</th>
							<th>Fecha de Carga</th>
							<th>Estado del Contacto</th>
							<th>Estado de Llamada</th>
							<th>Fecha de Gestión</th>
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
								<td><?php echo ucwords($_smarty_tpl->tpl_vars['c']->value['criterio']);?>
</td>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['creado'],"%d-%m-%Y %H:%M");?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['c']->value['e_contacto'];?>
</td>
								<td><?php if ($_smarty_tpl->tpl_vars['c']->value['estado_llamada']!=1) {?><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/contactosCargaLlamada/<?php echo $_smarty_tpl->tpl_vars['carga']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value['estado_llamada'];?>
"><?php echo ucwords($_smarty_tpl->tpl_vars['c']->value['llamada']);?>
</a><?php } else {
echo ucwords($_smarty_tpl->tpl_vars['c']->value['llamada']);
}?></td>
								<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['c']->value['modificado'],"%d-%m-%Y %H:%M");?>
</td>
							</tr>
						<?php } ?>

					</table>
					<?php if (isset($_smarty_tpl->tpl_vars['paginacion']->value)) {
echo $_smarty_tpl->tpl_vars['paginacion']->value;
}?>
				<?php } else { ?>
					<p class="text-alert">No hay contactos asociados a esta carga</p>
				<?php }?>
			</div>
			
		</div>
		
	</div>
</div>
<?php }} ?>
