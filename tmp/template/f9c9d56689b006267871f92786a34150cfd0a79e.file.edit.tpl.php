<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-23 11:06:31
         compiled from "/var/www/html/prueba-lime/views/cargas/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7342653665a902a667d5041-89737631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9c9d56689b006267871f92786a34150cfd0a79e' => 
    array (
      0 => '/var/www/html/prueba-lime/views/cargas/edit.tpl',
      1 => 1519398370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7342653665a902a667d5041-89737631',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a902a667edcd7_29358071',
  'variables' => 
  array (
    'dato' => 0,
    'enviar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a902a667edcd7_29358071')) {function content_5a902a667edcd7_29358071($_smarty_tpl) {?><div class="col-md-6">
	<h2>Editar Lista</h2>
	<p class="text-warning">Recuerda que al editar esta lista, cambiarás el estado de los contactos asociados</p>
	<form action="" method="post">
		<div class="form-group">
			<label>Lista N° <?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
</label>
		</div>
		<div class="form-group">
			<label>Estado:</label>
			<select name="estado" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['estado'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['estado']==1) {?>Activa<?php } else { ?>No Activa<?php }?></option>
				<option value="1">Activar</option>
				<option value="2">Desactivar</option>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">
		</div>
	</form>
</div><?php }} ?>
