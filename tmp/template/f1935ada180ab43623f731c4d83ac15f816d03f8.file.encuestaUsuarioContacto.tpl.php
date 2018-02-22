<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-21 13:31:23
         compiled from "/var/www/html/prueba-lime/views/encuestasusuarios/encuestaUsuarioContacto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20067816475a7afc579db465-19860714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1935ada180ab43623f731c4d83ac15f816d03f8' => 
    array (
      0 => '/var/www/html/prueba-lime/views/encuestasusuarios/encuestaUsuarioContacto.tpl',
      1 => 1519234280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20067816475a7afc579db465-19860714',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a7afc57a077a1_38409980',
  'variables' => 
  array (
    'contacto' => 0,
    '_layoutParams' => 0,
    'estado_llamadas' => 0,
    'ell' => 0,
    'enviar' => 0,
    'encuesta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7afc57a077a1_38409980')) {function content_5a7afc57a077a1_38409980($_smarty_tpl) {?><style type="text/css">
	th{
		text-align: right;
	}
</style>
<div class="col-md-12">
	<div class="col-md-6">
		<h3>Contactar</h3>
		<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value)&&count($_smarty_tpl->tpl_vars['contacto']->value)) {?>
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
				<tr>
					<th>Teléfono 2:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['telefono2'];?>
</td>
				</tr>
				<?php if (isset($_smarty_tpl->tpl_vars['contacto']->value['telefono3'])) {?>
				<tr>
					<th>Teléfono 3:</th>
					<td><?php echo $_smarty_tpl->tpl_vars['contacto']->value['telefono3'];?>
</td>
				</tr>
				<?php }?>
			</table>
			<hr>
			<form action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestasusuarios/editEstadoContacto" method="post">
				<div class=	"form-group">
					<label>Estado de Contacto<span class="text-danger">*</span></label>
					<select name="contacto" class="form-control">
						<option value="">Seleccione</option>
						<option value="1">Disponible</option>
						<option value="2">No disponible</option>
					</select>
				</div>
				<div class="form-group">
					<label>Estado de la Llamada<span class="text-danger">*</span></label>
					<select name="llamada" class="form-control">
						<option value="">Seleccione</option>
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
					<input type="hidden" name="contacto_id" value="<?php echo $_smarty_tpl->tpl_vars['contacto']->value['id'];?>
">
					<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
					<input type="submit" value="Cambiar">
				</div>
			</form>
		<?php } else { ?>
			<p class="text-info">No hay contactos asociados a esta encuesta</p>
		<?php }?>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
index">Volver</a></p>
	</div>
	<div class="col-md-8">
		<?php if (isset($_smarty_tpl->tpl_vars['encuesta']->value)&&count($_smarty_tpl->tpl_vars['encuesta']->value)) {?>
			<iframe src="<?php echo $_smarty_tpl->tpl_vars['encuesta']->value['link'];?>
" marginwidth="0" marginheight="0" name="ventana_iframe" scrolling="no" border="0" 
			frameborder="0" width="800" height="4800"></iframe>
		<?php }?>
	</div>
	
</div><?php }} ?>
