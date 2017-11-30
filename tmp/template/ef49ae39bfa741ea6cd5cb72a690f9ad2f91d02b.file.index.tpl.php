<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-16 14:20:39
         compiled from "/var/www/html/qepd/views/planes/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9490757595a0dd6f7e3ab94-62987827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef49ae39bfa741ea6cd5cb72a690f9ad2f91d02b' => 
    array (
      0 => '/var/www/html/qepd/views/planes/index.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9490757595a0dd6f7e3ab94-62987827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'planes' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0dd6f7ec5dd2_94597953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0dd6f7ec5dd2_94597953')) {function content_5a0dd6f7ec5dd2_94597953($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/add">Agregar Planes</a></p>
</div>
<div class="col-md-8">
	<?php if (isset($_smarty_tpl->tpl_vars['planes']->value)&&count($_smarty_tpl->tpl_vars['planes']->value)) {?>
		<h3>Lista de Planes</h3>
		<table class="table table-hover">
			<th>
				Nombre
			</th>
			<th>
				Código
			</th>
			<th>
				Empresa
			</th>
			<th>
				Acciones
			</th>
			
				
					<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['planes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['p']->value['codigo'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['p']->value['empresa'];?>
</td>
							<td>
								<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/view/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
								<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/delete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/delete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
');">Eliminar</a>
							</td>
						</tr>

					<?php } ?>
				
			
		</table>
	<?php } else { ?>
		<h2>No hay planes disponibles</h2>
		<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/add">Agregar Planes</a></p>
	<?php }?>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
