<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-08 11:24:29
         compiled from "/var/www/html/prueba-lime/views/contactos/contactoEncuesta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1477320425a7a1397d01b50-05189215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86d053ce0c677063ab517c68ff761b57f041155c' => 
    array (
      0 => '/var/www/html/prueba-lime/views/contactos/contactoEncuesta.tpl',
      1 => 1520522665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1477320425a7a1397d01b50-05189215',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a7a1397d3d403_06003999',
  'variables' => 
  array (
    'contacto' => 0,
    'campos' => 0,
    'estado_llamadas' => 0,
    'ell' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
    'encuesta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7a1397d3d403_06003999')) {function content_5a7a1397d3d403_06003999($_smarty_tpl) {?><style type="text/css">
	th{
		text-align: right;
	}
	#contactos{
		background-color: #c6ebed;
		padding: 10px;
		border-radius: 10px 10px 10px 10px;
		-moz-border-radius: 10px 10px 10px 10px;
		-webkit-border-radius: 10px 10px 10px 10px;
		border: 0px solid #000000;
		font-size: 14px;
	}
</style>
<div class="container">
	<!--fila para mostrar datos de contacto-->
	<div class="row" id="contactos">
		<div class="col-md-12 justify-content-md-center">
			<h4 style="text-align: center">Datos de contacto</h4>
		</div>
		<!--columna 1 para mostrar datos telefonicos-->
		<div class="col-md-4 offset-md-2">
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value)&&count($_smarty_tpl->tpl_vars['contacto']->value)) {?>
			<table class="table table-hover" id="contacto">
				<tr>
					<th>Nombre:</th>
					<td><?php echo ucwords($_smarty_tpl->tpl_vars['contacto']->value['nombre']);?>
</td>
				</tr>
				<tr>
					<th>Teléfono 1:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['telefono'];?>
</td>
				</tr>
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
			</table>
			<?php }?>
		</div>
		<!--columna 2 para mostrar otros datos del contacto-->
		<div class="col-md-4">
			<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value)&&count($_smarty_tpl->tpl_vars['contacto']->value)) {?>
			<table class="table table-hover">
				<!--mostrar rut-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['rut'])) {?>
				<tr>
					<th>RUT:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['rut'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar comuna-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['comuna'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['comuna']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['comuna'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar region-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['region'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['region']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['region'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar codigo-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['codigo'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['codigo']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['codigo'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar dato1-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato1'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['dato1']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato1'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar dato2-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato2'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['dato2']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato2'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar dato3-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato3'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['dato3']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato3'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar dato4-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato4'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['dato4']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato4'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar dato5-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato5'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['dato5']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato5'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar dato6-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato6'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['dato6']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato6'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar dato7-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato7'])) {?>
				<tr>
					<th>D<?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['dato7']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato7'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar dato8-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato8'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['dato8']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato8'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar dato9-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato9'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['dato9']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato9'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar dato10-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato10'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['dato10']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato10'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar dato11-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['dato11'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['dato11']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['dato11'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar fecha1-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['fecha1'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['fecha1']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['fecha1'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar fecha2-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['fecha2'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['fecha2']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['fecha2'];?>
</td>
				</tr>
				<?php }?>
				<!--mostrar fecha3-->
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['fecha3'])) {?>
				<tr>
					<th><?php echo ucwords($_smarty_tpl->tpl_vars['campos']->value['fecha3']);?>
:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['fecha3'];?>
</td>
				</tr>
				<?php }?>
			</table>
			<?php }?>
		</div>
	</div>
	<!--Formulario de cambio de estado de llamada-->
	<div class="row justify-content-md-center">

		<div class="col-md-6">
			<hr>
			.<form action="" method="post">
				<div class="form-group">
					<label>Estado de Llamada</label>
					<select name="llamada" class="form-control">
						<option value="">Selecione</option>
						<?php if (isset($_smarty_tpl->tpl_vars['estado_llamadas']->value)&&count($_smarty_tpl->tpl_vars['estado_llamadas']->value)) {?>
							<?php  $_smarty_tpl->tpl_vars['ell'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ell']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estado_llamadas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ell']->key => $_smarty_tpl->tpl_vars['ell']->value) {
$_smarty_tpl->tpl_vars['ell']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['ell']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ell']->value['nombre'];?>
</option>
							<?php } ?>
						<?php }?>
					</select>
				</div>
				<div class="form-group">
					<input type="hidden" name="contacto" value="<?php echo $_smarty_tpl->tpl_vars['contacto']->value['id'];?>
">
					<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
					<input type="submit" value="Guardar" class="btn btn-success">
					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
index" class="btn btn-primary">Volver</a>
				</div>
			</form>
		</div>
	</div>
	
	<div class="row justify-content-md-center">
		<div class="col-md-8">
			<?php if (isset($_smarty_tpl->tpl_vars['encuesta']->value)&&count($_smarty_tpl->tpl_vars['encuesta']->value)) {?>
				<iframe src="<?php echo $_smarty_tpl->tpl_vars['encuesta']->value['link'];?>
" marginwidth="0" marginheight="0" name="ventana_iframe" scrolling="no" border="0" 
			frameborder="0" width="750" height="4800"></iframe>							
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
