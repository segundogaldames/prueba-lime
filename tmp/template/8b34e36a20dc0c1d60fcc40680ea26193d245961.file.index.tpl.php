<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-12-01 11:48:20
         compiled from "/var/www/html/prueba-lime/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19951221665a1f0f02cd89d7-86182541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b34e36a20dc0c1d60fcc40680ea26193d245961' => 
    array (
      0 => '/var/www/html/prueba-lime/views/index/index.tpl',
      1 => 1512143298,
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1f0f02ce1420_54544407')) {function content_5a1f0f02ce1420_54544407($_smarty_tpl) {?><div class="col-md-12">
	<h4>Bienvenido(a) <?php echo $_smarty_tpl->tpl_vars['saludo']->value['nombre'];?>
</h4>
	<hr>
	<?php if (Session::get('role_id')!=2) {?>
		<h2>Panel de Administración</h2>

		<h3>Clientes</h3>
		<?php if (isset($_smarty_tpl->tpl_vars['clientes']->value)&&count($_smarty_tpl->tpl_vars['clientes']->value)) {?>
		<ul type="square">
			<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/view/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</a></li>
			<?php } ?>
		</ul>
		<?php } else { ?>
			<strong>No hay clientes disponibles</strong>
			<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
clientes/add" class="btn btn-link btn-sm">Crear cliente</a></p>
		<?php }?>
		<h3>Campañas</h3>
		<ul>
			<li>Lista de campañas</li>
		</ul>
		<h3>Ejecutivos</h3>
		<ul>
			<li>Lista de ejecutivos</li>
		</ul>
	<?php } else { ?>
		<h3>Mis Campañas</h3>
		<ul>
			<li>Mis campañas</li>
		</ul>
	<?php }?>

</div>

		
		
		
		


		
	
<?php }} ?>
