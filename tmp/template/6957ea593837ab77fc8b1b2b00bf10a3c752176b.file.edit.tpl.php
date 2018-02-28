<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-28 11:44:22
         compiled from "/var/www/html/prueba-lime/views/encuestas/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9821687925a259142f1c506-83911253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6957ea593837ab77fc8b1b2b00bf10a3c752176b' => 
    array (
      0 => '/var/www/html/prueba-lime/views/encuestas/edit.tpl',
      1 => 1519832659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9821687925a259142f1c506-83911253',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a259142f3d862_56709931',
  'variables' => 
  array (
    'dato' => 0,
    'campaign' => 0,
    'c' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a259142f3d862_56709931')) {function content_5a259142f3d862_56709931($_smarty_tpl) {?><div class="col-md-8">
	<h2>Editar Encuesta</h2>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Nombre:</label>			
			<input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Nombre de la encuesta">
		</div>
		<div class="form-group">
			<label>Link: <?php if (Session::get('role_id')==3) {
echo $_smarty_tpl->tpl_vars['dato']->value['link'];
}?></label>
			<?php if (Session::get('role_id')==1) {?>
			<input type="url" name="link" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['dato']->value['link'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Link de la encuesta">
			<?php }?>
		</div>
		<div class="form-group">
			<label>Status</label>
			<select name="status" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['status'];?>
"><?php if ($_smarty_tpl->tpl_vars['dato']->value['status']==1) {?>Activa<?php } else { ?>No activa<?php }?></option>
				<option value="1">Activar</option>
				<option value="2">Desactivar</option>
			</select>
		</div>
		<div class="form-group">
			<label>Campaña</label>
			<select name="campaign" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['campaign_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dato']->value['campaign'];?>
</option>
				<?php if (isset($_smarty_tpl->tpl_vars['campaign']->value)&&count($_smarty_tpl->tpl_vars['campaign']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['campaign']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</option>
					<?php } ?>
				<?php }?>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas" class="btn btn-link">Volver</a>
		</div>
	</form>
</div><?php }} ?>
