<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-02 10:58:47
         compiled from "/var/www/html/prueba-lime/views/campaign/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17738991845a21c2102c04a6-34649006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5cb31528a8e0d8849e52b2e86a64c05765c84d9' => 
    array (
      0 => '/var/www/html/prueba-lime/views/campaign/view.tpl',
      1 => 1520002725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17738991845a21c2102c04a6-34649006',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a21c2102faaa3_92766612',
  'variables' => 
  array (
    'campaign' => 0,
    '_layoutParams' => 0,
    'encuestas' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a21c2102faaa3_92766612')) {function content_5a21c2102faaa3_92766612($_smarty_tpl) {?><div class="col-md-12">
	<h2>Ver Campaña</h2>
	<p><strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['campaign']->value['nombre'];?>
</p>
	<p><strong>Cliente:</strong> <?php echo $_smarty_tpl->tpl_vars['campaign']->value['cliente'];?>
</p>
	<p><strong>Campaña ViciDial:</strong> <?php echo $_smarty_tpl->tpl_vars['campaign']->value['vici'];?>
</p>

	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign/edit/<?php echo $_smarty_tpl->tpl_vars['campaign']->value['id'];?>
" class="btn btn-link btn-sm">Editar</a>
		<?php if (Session::get('role_id')==1) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign/delete/<?php echo $_smarty_tpl->tpl_vars['campaign']->value['id'];?>
" class="btn btn-link btn-sm" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign/delete/<?php echo $_smarty_tpl->tpl_vars['campaign']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['campaign']->value['nombre'];?>
')">Eliminar</a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign" class="btn btn-link btn-sm">Campañas</a>
	</p>
	<hr>
	<?php if (isset($_smarty_tpl->tpl_vars['encuestas']->value)&&count($_smarty_tpl->tpl_vars['encuestas']->value)) {?>
		<h4>Encuestas Asociadas</h4>
		<ul type="square">
			<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['encuestas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/view/<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['nombre'];?>
</a></li>
			<?php } ?>
		</ul>
	<?php } else { ?>
		<strong>No hay encuestas asociadas o activas</strong>
	<?php }?>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/addEncuestaCampaign/<?php echo $_smarty_tpl->tpl_vars['campaign']->value['id'];?>
" class="btn btn-link btn-sm">Nueva Encuesta</a></p>

</div><?php }} ?>
