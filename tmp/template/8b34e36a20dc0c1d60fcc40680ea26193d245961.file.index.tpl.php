<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-28 13:37:49
         compiled from "/var/www/html/prueba-lime/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19951221665a1f0f02cd89d7-86182541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b34e36a20dc0c1d60fcc40680ea26193d245961' => 
    array (
      0 => '/var/www/html/prueba-lime/views/index/index.tpl',
      1 => 1522254763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19951221665a1f0f02cd89d7-86182541',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1f0f02ce1420_54544407',
  'variables' => 
  array (
    'saludo' => 0,
    '_layoutParams' => 0,
    'datos' => 0,
    'enc_estadistica' => 0,
    'enc' => 0,
    'enviar' => 0,
    'agendamientos' => 0,
    'ag' => 0,
    'enc_nombre' => 0,
    'recorridos' => 0,
    'r' => 0,
    'encuestados' => 0,
    'en' => 0,
    'criterios_enc' => 0,
    'cen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1f0f02ce1420_54544407')) {function content_5a1f0f02ce1420_54544407($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/prueba-lime/libs/smarty/libs/plugins/modifier.date_format.php';
?><div class="row">
	<!--columna de la izquierda para mostrar menu #####################################################################################-->
	<div class="col-md-3" style="padding-top: 10px">
		<h6>Bienvenido(a) <?php echo $_smarty_tpl->tpl_vars['saludo']->value['nombre'];?>
</h6>
		<hr>
		<!--Mostrar menu para administrador y supervisor-->
		<?php if (Session::get('role_id')!=2) {?>
		<ul class="nav flex-column">
			<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes" >Clientes</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign" >Campañas</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/encuestasSupervisores">Encuestas</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cargas">Listas</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/ejecutivos" >Ejecutivos</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
agendamientoscontactos">Contactos Agendados</a></li>
		</ul>

		<!--Lista los resultados-->
		<?php }?>
	
	</div>
	<!--columna del medio para mostrar estadistica ##############################################################-->
	<div class="col-md-4" style="padding-top: 60px; margin-right: 30px">
		<!--Estadistica para administradores y supervisores-->
		<?php if (Session::get('role_id')!=2) {?>
		<h4>Estadísticas</h4>
		<form action="" method="post">
			<div class="form-group">
				<label>Desde:</label>
				<input type="date" name="desde" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['desde'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control">
			</div>
			<div class="form-group">
				<label>Hasta:</label>
				<input type="date" name="hasta" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['desde'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control">
			</div>
			<div class="form-group">
				<label>Encuesta:</label>
				<select name="encuesta" class="form-control">
					<option value="">Seleccione...</option>
					<?php if (isset($_smarty_tpl->tpl_vars['enc_estadistica']->value)&&count($_smarty_tpl->tpl_vars['enc_estadistica']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['enc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['enc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['enc_estadistica']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['enc']->key => $_smarty_tpl->tpl_vars['enc']->value) {
$_smarty_tpl->tpl_vars['enc']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['enc']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['enc']->value['nombre'];?>
</option>
						<?php } ?>
					<?php }?>
				</select>
			</div>
			<div class="form-group">
				<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
				<input type="submit" value="Consultar" class="btn btn-success">
			</div>
		</form>
		<?php }?>

		<!--lista de agendamientos por ejecutivo-->
		<?php if (Session::get('role_id')==2) {?>
			<h4>Agendamientos</h4>
			<?php if (isset($_smarty_tpl->tpl_vars['agendamientos']->value)&&count($_smarty_tpl->tpl_vars['agendamientos']->value)) {?>
				<table class="table table-hover table-responsive">
					<tr>
						<th>Fecha Agenda</th>
						<th>Hora Agenda</th>
						<th>Contacto</th>
						<th>Status</th>
						<th></th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['ag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['agendamientos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ag']->key => $_smarty_tpl->tpl_vars['ag']->value) {
$_smarty_tpl->tpl_vars['ag']->_loop = true;
?>
						<tr>
							<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ag']->value['fecha_agenda'],"%d-%m-%Y");?>
</td>
							<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ag']->value['hora_agenda'],"%d-%m-%Y");?>
</td>
							<td><?php echo ucwords($_smarty_tpl->tpl_vars['ag']->value['contacto']);?>
</td>
							<td><?php echo ucwords($_smarty_tpl->tpl_vars['ag']->value['encuesta']);?>
</td>
							<td><?php if ($_smarty_tpl->tpl_vars['ag']->value['status']==1) {?>Pendiente<?php } else { ?>Contactado<?php }?></td>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/contactar/<?php echo $_smarty_tpl->tpl_vars['ag']->value['encuesta_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['ag']->value['contacto_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['ag']->value['id'];?>
" class="btn btn-primary">Contactar</a></td>
						</tr>
					<?php } ?>
				</table>
			<?php } else { ?>
				<p class="text-info">No tienes agendamientos pendientes</p>
			<?php }?>
		<?php }?>
	</div>


		
	<!--columna derecha para Lista los resultados #################################################################################-->
	
	<div class="col-md-4" style="padding-top: 60px">
		<?php if (Session::get('role_id')!=2) {?>
			<h4>Recorrido <?php if (isset($_smarty_tpl->tpl_vars['enc_nombre']->value)) {
echo $_smarty_tpl->tpl_vars['enc_nombre']->value['nombre'];
}?></h4>
			<?php if (isset($_smarty_tpl->tpl_vars['recorridos']->value)&&count($_smarty_tpl->tpl_vars['recorridos']->value)) {?>
				<table class="table table-hover table-bordered">
					<tr style="background-color: #eeebeb">
						<th>Estado</th>
						<th>Valor</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recorridos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['r']->value['llamada'];?>
:</td>
						<td><?php echo $_smarty_tpl->tpl_vars['r']->value['filas'];?>
</td>
						</tr>
					<?php } ?>
				</table>
			<?php } else { ?>
				<strong>0</strong>
			<?php }?>
			<div class="col-md-12" style="height: 20px"></div>

			<!--lista de encuestados por ejecutivos-->
			<h4>Encuestados</h4>
			<?php if (isset($_smarty_tpl->tpl_vars['encuestados']->value)&&count($_smarty_tpl->tpl_vars['encuestados']->value)) {?>
				<table class="table table-hover table-bordered">
					<tr style="background-color: #eeebeb">
						<th>Ejecutivo</th>
						<th>Valor</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['en'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['en']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['encuestados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['en']->key => $_smarty_tpl->tpl_vars['en']->value) {
$_smarty_tpl->tpl_vars['en']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['en']->value['ejecutivo'];?>
:</td>
						<td><?php echo $_smarty_tpl->tpl_vars['en']->value['filas'];?>
</td>
						</tr>
					<?php } ?>
				</table>
			<?php } else { ?>
				<strong>0</strong>
			<?php }?>

			<!--lista de encuestados por criterios-->
			<h4>Encuestados Por Criterio</h4>
			<?php if (isset($_smarty_tpl->tpl_vars['criterios_enc']->value)&&count($_smarty_tpl->tpl_vars['criterios_enc']->value)) {?>
				<table class="table table-hover table-bordered">
					<tr style="background-color: #eeebeb">
						<th>Criterio</th>
						<th>Valor</th>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['cen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['criterios_enc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cen']->key => $_smarty_tpl->tpl_vars['cen']->value) {
$_smarty_tpl->tpl_vars['cen']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['cen']->value['criterio'];?>
:</td>
						<td><?php echo $_smarty_tpl->tpl_vars['cen']->value['filas'];?>
</td>
						</tr>
					<?php } ?>
				</table>
			<?php } else { ?>
				<strong>0</strong>
			<?php }?>
		<?php }?>
	</div>	
			
</div><?php }} ?>
