<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-02 10:58:52
         compiled from "/var/www/html/prueba-lime/views/encuestas/addEncuestaCampaign.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15903034035a9966ac6872b9-23623968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '624f594c9243cbb7944ac8a887814c05f578050c' => 
    array (
      0 => '/var/www/html/prueba-lime/views/encuestas/addEncuestaCampaign.tpl',
      1 => 1520002660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15903034035a9966ac6872b9-23623968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
    'enviar' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a9966ac6a0824_44679838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9966ac6a0824_44679838')) {function content_5a9966ac6a0824_44679838($_smarty_tpl) {?><div class="col-md-6">
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
			<label>Tipo</label>
			<select name="tipo" class="form-control">
				<option value="">Seleccione</option>
				<option value="1">Encuesta</option>
				<option value="2">Auditoria</option>
			</select>
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="<?php echo $_smarty_tpl->tpl_vars['enviar']->value;?>
">
			<input type="submit" value="Guardar" class="btn btn-success">
			<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas" class="btn btn-link">Volver</a>
		</div>
	</form>
</div><?php }} ?>
