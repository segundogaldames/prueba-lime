<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-04 11:40:55
         compiled from "/var/www/html/prueba-lime/views/encuestas/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4494719575a253df9dde5b2-81359827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dceb4f9fea13ba7ec79868292e213f0966c298d' => 
    array (
      0 => '/var/www/html/prueba-lime/views/encuestas/add.tpl',
      1 => 1512402041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4494719575a253df9dde5b2-81359827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a253dfa0e92a6_73380433',
  'variables' => 
  array (
    'datos' => 0,
    'campaign' => 0,
    'c' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a253dfa0e92a6_73380433')) {function content_5a253dfa0e92a6_73380433($_smarty_tpl) {?><div class="col-md-6">
	<h2>Nueva Encuesta</h2>
	<form action="" method="post" name="form">
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="nombre" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['nombre'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Nombre de la encuesta">
		</div>
		<div class="form-group">
			<label>Link</label>
			<input type="url" name="link" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['link'])===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="Link de la encuesta">
		</div>
		<div class="form-group">
			<label>Campaña</label>
			<select name="campaign" class="form-control">
				<option value="">Seleccione</option>
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
