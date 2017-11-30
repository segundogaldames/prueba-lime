<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-15 12:33:38
         compiled from "/var/www/html/qepd/views/urnas/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10084161055a0c6c62658150-88266519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f0c8e9437f14e2b8b86805183efc87017121b51' => 
    array (
      0 => '/var/www/html/qepd/views/urnas/edit.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10084161055a0c6c62658150-88266519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dato' => 0,
    'planes' => 0,
    'p' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0c6c626c9e72_15709383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0c6c626c9e72_15709383')) {function content_5a0c6c626c9e72_15709383($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2"></div>
<div class="col-md-4">
	<h3>Editar Urna</h3>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label for="modelo">Modelo:<span class="text-danger">*</span></label>
			<input type="text" name="modelo" class="form-control" placeholder="Modelo de la urna" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['modelo'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="medidas">Medidas:</label>
			<input type="text" name="medidas" class="form-control" placeholder="Medidas de la urna" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['medidas'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="material">Material:<span class="text-danger">*</span></label></label>
			<input type="text" name="material" class="form-control" placeholder="Material de la urna" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['material'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="terminaciones">Terminaciones:<span class="text-danger">*</span></label></label>
			<input type="text" name="terminaciones" class="form-control" placeholder="Terminaciones de la urna" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['terminaciones'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="color">Color:<span class="text-danger">*</span></label></label>
			<input type="text" name="color" class="form-control" placeholder="Color de la urna" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['color'])===null||$tmp==='' ? '' : $tmp);?>
">
		</div>
		<div class="form-group">
			<label for="plan">Plan actual: <?php echo $_smarty_tpl->tpl_vars['dato']->value['plan'];?>
<span class="text-danger">*</span></label>
			<select name="plan" id="" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['plan_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['plan'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['planes']->value)&&count($_smarty_tpl->tpl_vars['planes']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar Cambios" class="btn btn-success">&nbsp;&nbsp;
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
urnas" class="btn btn-link">Volver</a>
		</div>
	</form>
</div>
<div class="col-md-4">
	
</div>	


	
	
	
<?php }} ?>
