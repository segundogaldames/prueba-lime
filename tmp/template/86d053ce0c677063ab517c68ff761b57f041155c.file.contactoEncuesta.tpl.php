<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-06 17:21:30
         compiled from "/var/www/html/prueba-lime/views/contactos/contactoEncuesta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1477320425a7a1397d01b50-05189215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86d053ce0c677063ab517c68ff761b57f041155c' => 
    array (
      0 => '/var/www/html/prueba-lime/views/contactos/contactoEncuesta.tpl',
      1 => 1517952049,
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
    'estado_llamada' => 0,
    'ell' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7a1397d3d403_06003999')) {function content_5a7a1397d3d403_06003999($_smarty_tpl) {?><div class="col-md-6">
	<h2>Contactar</h2>
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
		</table>
		<hr>
		<form action="" method="post">
			<div class=	"form-group">
				<label>Estado de Contacto<span class="text-danger">*</span></label>
				<select name="contacto" class="form-control">
					<option value="">Seleccione</option>
					<option value="1">Disponible</option>
					<option value="2">Contactado</option>
				</select>
			</div>
			<div class="form-group">
				<label>Estado de la Llamada<span class="text-danger">*</span></label>
				<select name="llamada" class="form-control">
					<option value="">Seleccione</option>
					<?php if (isset($_smarty_tpl->tpl_vars['estado_llamada']->value)&&count($_smarty_tpl->tpl_vars['estado_llamada']->value)) {?>
						<?php  $_smarty_tpl->tpl_vars['ell'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ell']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estado_llamada']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
				<input type="hidden" name="enviar" value="1">
				<input type="submit" value="Cambiar">
			</div>
		</form>
	<?php } else { ?>
		<p class="alert alert-info">No hay contactos disponibles</p>
	<?php }?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/cerrar">Cerrar</a>
</div><?php }} ?>
