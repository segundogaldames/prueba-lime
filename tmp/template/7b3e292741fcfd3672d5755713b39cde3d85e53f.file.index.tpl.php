<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-16 14:20:13
         compiled from "/var/www/html/qepd/views/servicios/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5661668025a0dd6ddb79224-86770870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b3e292741fcfd3672d5755713b39cde3d85e53f' => 
    array (
      0 => '/var/www/html/qepd/views/servicios/index.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5661668025a0dd6ddb79224-86770870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
    'servicios' => 0,
    'serv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a0dd6ddba9322_85381395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0dd6ddba9322_85381395')) {function content_5a0dd6ddba9322_85381395($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/add">Agregar Servicio</a></p>
</div>
<div class="col-md-8">
	<h3>Lista de Servicios</h3>
	<table class="table table-hover">
		<th>
			Servicio
		</th>
		<th>
			Tipo Empresa
		</th>
		<th>
			Acciones
		</th>
		
			<?php if (isset($_smarty_tpl->tpl_vars['servicios']->value)&&count($_smarty_tpl->tpl_vars['servicios']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['serv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['serv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servicios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['serv']->key => $_smarty_tpl->tpl_vars['serv']->value) {
$_smarty_tpl->tpl_vars['serv']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['serv']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['serv']->value['tipo'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/view/<?php echo $_smarty_tpl->tpl_vars['serv']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/delete/<?php echo $_smarty_tpl->tpl_vars['serv']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
servicios/delete/<?php echo $_smarty_tpl->tpl_vars['serv']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['serv']->value['nombre'];?>
');">Eliminar</a>
						</td>
					</tr>

				<?php } ?>
			<?php }?>
		
	</table>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
