<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-28 15:35:25
         compiled from "/var/www/html/prueba-lime/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19951221665a1f0f02cd89d7-86182541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b34e36a20dc0c1d60fcc40680ea26193d245961' => 
    array (
      0 => '/var/www/html/prueba-lime/views/index/index.tpl',
      1 => 1519846511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19951221665a1f0f02cd89d7-86182541',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1f0f02ce1420_54544407',
  'variables' => 
  array (
    'saludo' => 0,
    '_layoutParams' => 0,
    'encuestas' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1f0f02ce1420_54544407')) {function content_5a1f0f02ce1420_54544407($_smarty_tpl) {?><div class="row">
	<div class="col-md-6">
		<h2>Bienvenido(a) <?php echo $_smarty_tpl->tpl_vars['saludo']->value['nombre'];?>
</h2>
		<hr>
		<!--Mostrar menu para administrador y supervisor-->
		<?php if (Session::get('role_id')!=2) {?>
		<ul type="square">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes" class="btn btn-link">Clientes</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign" class="btn btn-link">Campañas</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas" class="btn btn-link">Encuestas</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/ejecutivos" class="btn btn-link">Ejecutivos</a></li>
		</ul>
		<?php }?>
		<!--Mostrar encuestas para ejecutivos-->
		<?php if (Session::get('role_id')==2) {?>
			<ul type="square">
				<?php if (isset($_smarty_tpl->tpl_vars['encuestas']->value)&&count($_smarty_tpl->tpl_vars['encuestas']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['encuestas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/contactoEncuesta/<?php echo $_smarty_tpl->tpl_vars['e']->value['encuesta_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['nombre'];?>
</a></li>
					<?php } ?>
				<?php }?>
			</ul>
		<?php }?>
	</div>
</div><?php }} ?>
