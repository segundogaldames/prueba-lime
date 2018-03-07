<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-07 11:29:58
         compiled from "/var/www/html/prueba-lime/views/encuestassupervisores/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1964740175aa00334de18a5-10976068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ea79b69c42bbbfe0cc4a2e613d36eb7f1710197' => 
    array (
      0 => '/var/www/html/prueba-lime/views/encuestassupervisores/add.tpl',
      1 => 1520436592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1964740175aa00334de18a5-10976068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5aa00334e1afb3_44193060',
  'variables' => 
  array (
    'usuarios' => 0,
    'u' => 0,
    'enviar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa00334e1afb3_44193060')) {function content_5aa00334e1afb3_44193060($_smarty_tpl) {?><div class="col-md-6">
	<h2>Agregar Asociación</h2>
	<form action="" method="post">
		<div class="form-group">
			<label>Usuario</label>
			<select name="usuario" class="form-control">
				<option value="">Seleccione...</option>
				<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['u']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
			<input type="submit" value="Guardar" class="btn btn-success">
		</div>
	</form>
	
</div><?php }} ?>
