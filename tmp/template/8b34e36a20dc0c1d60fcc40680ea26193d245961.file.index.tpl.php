<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-27 10:34:01
         compiled from "/var/www/html/prueba-lime/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19951221665a1f0f02cd89d7-86182541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b34e36a20dc0c1d60fcc40680ea26193d245961' => 
    array (
      0 => '/var/www/html/prueba-lime/views/index/index.tpl',
      1 => 1519742035,
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
    'clientes' => 0,
    '_layoutParams' => 0,
    'c' => 0,
    'campaign' => 0,
    'ejecutivos' => 0,
    'ej' => 0,
    'encuestas' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1f0f02ce1420_54544407')) {function content_5a1f0f02ce1420_54544407($_smarty_tpl) {?><div class="col-md-6">
	<h4>Bienvenido(a) <?php echo $_smarty_tpl->tpl_vars['saludo']->value['nombre'];?>
</h4>
	<hr>
	<?php if (Session::get('role_id')!=2) {?>
		<h3>Panel de Administración</h3>
		<hr>
		<h4>Clientes</h4>
		<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)&&count($_smarty_tpl->tpl_vars['clientes']->value)) {?>
			<ul type="square">
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/view/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</a>
					</li>
				<?php } ?>
			</ul>
		<?php } else { ?>
			<strong>No hay clientes disponibles</strong>
			<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/add" class="btn btn-link btn-sm">Crear cliente</a></p>
		<?php }?>
		<hr>
		<h4>Campañas</h4>
		<?php if (isset($_smarty_tpl->tpl_vars['campaign']->value)&&count($_smarty_tpl->tpl_vars['campaign']->value)) {?>
			<ul type="square">
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['campaign']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign/view/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</a>
					</li>
				<?php } ?>
			</ul>
		<?php } else { ?>
			<strong>No hay campañas disponibles</strong>
			<p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
campaign/add" class="btn btn-link btn-sm">Crear Campaña</a>
			</p>
		<?php }?>
		<hr>
		<?php if (isset($_smarty_tpl->tpl_vars['ejecutivos']->value)&&count($_smarty_tpl->tpl_vars['ejecutivos']->value)) {?>
			<h4>Ejecutivos</h4>
			<ul type="square">
				<?php  $_smarty_tpl->tpl_vars['ej'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ej']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ejecutivos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ej']->key => $_smarty_tpl->tpl_vars['ej']->value) {
$_smarty_tpl->tpl_vars['ej']->_loop = true;
?>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/view/<?php echo $_smarty_tpl->tpl_vars['ej']->value['id'];?>
" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->tpl_vars['ej']->value['nombre'];?>
</a>
					</li>
				<?php } ?>
			</ul>
		<?php } else { ?>
			<strong>No hay ejecutivos registrados</strong>
			<p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/add" class="btn btn-link btn-sm">Crear Ejecutivo</a>
			</p>
		<?php }?>
	<?php } else { ?>
		<?php if (isset($_smarty_tpl->tpl_vars['encuestas']->value)&&count($_smarty_tpl->tpl_vars['encuestas']->value)) {?>
			<h4>Mis Encuestas</h4>
			<ul type="square">
				<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['encuestas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/contactoEncuesta/<?php echo $_smarty_tpl->tpl_vars['e']->value['encuesta_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value['nombre'];?>
</a>
					</li>

				<?php } ?>

			</ul>
		<?php } else { ?>
			<strong>No hay encuestas disponibles</strong>
		<?php }?>
	<?php }?>

</div>

		
		
		
		


		
	
<?php }} ?>
