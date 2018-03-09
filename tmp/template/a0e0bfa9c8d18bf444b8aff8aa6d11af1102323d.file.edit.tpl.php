<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-08 16:27:25
         compiled from "/var/www/html/prueba-lime/views/contactos/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10524940525aa1985733f643-25633428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0e0bfa9c8d18bf444b8aff8aa6d11af1102323d' => 
    array (
      0 => '/var/www/html/prueba-lime/views/contactos/edit.tpl',
      1 => 1520540832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10524940525aa1985733f643-25633428',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5aa1985736b891_49417166',
  'variables' => 
  array (
    'dato' => 0,
    'e_llamada' => 0,
    'ell' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa1985736b891_49417166')) {function content_5aa1985736b891_49417166($_smarty_tpl) {?><div class="col-md-6">
	<h2>Editar Contacto</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Nombre: <?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</label>
		</div>
		<div class="form-group">
			<label>Teléfono: <?php echo $_smarty_tpl->tpl_vars['dato']->value['telefono'];?>
</label>
		</div>
		<div class="form-group">
			<label>Encuesta: <?php echo $_smarty_tpl->tpl_vars['dato']->value['nom_encuesta'];?>
</label>
		</div>
		<div class="form-group">
			<label>Estado de Llamada</label>
			<select name="llamada" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['estado_llamada'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['llamada'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['e_llamada']->value)&&count($_smarty_tpl->tpl_vars['e_llamada']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['ell'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ell']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['e_llamada']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
			<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos" class="btn btn-link">Volver</a>
		</div>
	</form>
</div><?php }} ?>
