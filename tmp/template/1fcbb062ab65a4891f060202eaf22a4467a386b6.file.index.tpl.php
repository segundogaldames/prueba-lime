<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-24 15:44:43
         compiled from "/var/www/html/qepd/views/sepultaciones/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11384588325a1345076c9305-26309143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fcbb062ab65a4891f060202eaf22a4467a386b6' => 
    array (
      0 => '/var/www/html/qepd/views/sepultaciones/index.tpl',
      1 => 1511552680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11384588325a1345076c9305-26309143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a134507754004_07517350',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'sepultaciones' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a134507754004_07517350')) {function content_5a134507754004_07517350($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2">
	<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sepultaciones/add">Agregar Sepultaciones</a></p>
</div>
<div class="col-md-8">
	<?php if (isset($_smarty_tpl->tpl_vars['sepultaciones']->value)&&count($_smarty_tpl->tpl_vars['sepultaciones']->value)) {?>
		<h3>Lista de Sepultaciones</h3>
		<table class="table table-hover">
			<th>
				Plan Asociado
			</th>
			<th>
				Acciones
			</th>
			
				
					<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sepultaciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['s']->value['plan'];?>
</td>
							<td>
								<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sepultaciones/view/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
">Ver</a>&nbsp;&nbsp;
								<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sepultaciones/delete/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sepultaciones/delete/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
', 'el servicio sepultaciones del <?php echo $_smarty_tpl->tpl_vars['s']->value['plan'];?>
');">Eliminar</a>
							</td>
						</tr>

					<?php } ?>
				
			
		</table>
	<?php } else { ?>
		<h2>No hay sepultaciones asociadas</h2>
		<p class="enlace"><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sepultaciones/add">Agregar Sepultaciones</a></p>
	<?php }?>
</div>
<div class="col-md-2">
	
</div>	


	
	
	
<?php }} ?>
