<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-23 09:12:29
         compiled from "/var/www/html/prueba-lime/views/contactos/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2062633575a79d5b6989dd8-99807444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b520feffad95d8ff56d4d5857f1724c7ea4d420c' => 
    array (
      0 => '/var/www/html/prueba-lime/views/contactos/add.tpl',
      1 => 1519391123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062633575a79d5b6989dd8-99807444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a79d5b6990d54_76740410',
  'variables' => 
  array (
    'encuestas' => 0,
    'enc' => 0,
    'enviar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a79d5b6990d54_76740410')) {function content_5a79d5b6990d54_76740410($_smarty_tpl) {?><div class="col-md-12">
	<h2>Agregar Contactos</h2>
	<p class="text-info">Escoja la encuesta a la que desea agregarle contactos</p>
	<?php if (isset($_smarty_tpl->tpl_vars['encuestas']->value)&&count($_smarty_tpl->tpl_vars['encuestas']->value)) {?>
		<table class="table table-hover table-condensed">
			<?php  $_smarty_tpl->tpl_vars['enc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['enc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['encuestas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['enc']->key => $_smarty_tpl->tpl_vars['enc']->value) {
$_smarty_tpl->tpl_vars['enc']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['enc']->value['nombre'];?>
</td>
					<td>
						<form action="" method="post" enctype="multipart/form-data" class="form-inline">
							<input type="file" name="excel" class="form-control">
							<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
							<input type="hidden" name="encuesta" value="<?php echo $_smarty_tpl->tpl_vars['enc']->value['id'];?>
">
							<input type="submit" value="Cargar" class="btn btn-success">
						</form>
					</td>
				</tr>
			<?php } ?>
		</table>
				
	<?php }?>
	
	
</div>
<!--
<div class="col-md-6">
	
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<input type="file" name="excel" class="form-control">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Cargar" class="btn btn-success">
		</div>
		
	</form>
</div>
--><?php }} ?>
