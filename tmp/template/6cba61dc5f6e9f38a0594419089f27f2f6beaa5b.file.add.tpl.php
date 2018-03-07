<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 15:07:32
         compiled from "/var/www/html/prueba-lime/views/cuotas/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2058756555aa037812d8a20-20627153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cba61dc5f6e9f38a0594419089f27f2f6beaa5b' => 
    array (
      0 => '/var/www/html/prueba-lime/views/cuotas/add.tpl',
      1 => 1520449548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2058756555aa037812d8a20-20627153',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5aa037812e27d0_02269014',
  'variables' => 
  array (
    'enviar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa037812e27d0_02269014')) {function content_5aa037812e27d0_02269014($_smarty_tpl) {?><div class="col-md-6">
	<h2>Agregar Cuota</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Desde</label>
			<input type="date" name="desde" class="form-control">
		</div>
		<div class="form-group">
			<label>Hasta</label>
			<input type="date" name="hasta" class="form-control">
		</div>
		<div class="form-group">
			<label>Valor</label>
			<input type="number" name="valor" class="form-control">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
			<input type="submit" value="Guardar" class="btn btn-success">
		</div>
	</form>
</div><?php }} ?>
