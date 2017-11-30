<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-24 17:01:50
         compiled from "/var/www/html/qepd/views/cinerarios/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2631317615a18806fc1d0a5-10405372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c1c4150aae6e3b4898fa036e87faee4442b0e65' => 
    array (
      0 => '/var/www/html/qepd/views/cinerarios/index.tpl',
      1 => 1511557303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2631317615a18806fc1d0a5-10405372',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a18806fc590e0_21344660',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'cinerarios' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a18806fc590e0_21344660')) {function content_5a18806fc590e0_21344660($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cinerarios/add">Agregar Cinerarios</a></p>
</div>
<div class="col-md-8">
	<?php if (isset($_smarty_tpl->tpl_vars['cinerarios']->value)&&count($_smarty_tpl->tpl_vars['cinerarios']->value)) {?>
		<h3>Lista de Cinerarios</h3>
		<table class="table table-hover">
			<th>
				Plan Asociado
			</th>
			<th>
				Acciones
			</th>
			
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cinerarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['c']->value['plan'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cinerarios/edit/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
							<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cinerarios/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cinerarios/delete/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
', 'el cinerio del <?php echo $_smarty_tpl->tpl_vars['c']->value['plan'];?>
')">Eliminar</a>
						</td>
					</tr>
				<?php } ?>
		</table>
	<?php } else { ?>
		<h2>No hay cinerarios asociados</h2>
		<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cinerarios/add">Agregar Cinerarios</a></p>
	<?php }?>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
