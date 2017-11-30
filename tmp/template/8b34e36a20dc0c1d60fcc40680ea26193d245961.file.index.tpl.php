<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-30 12:16:39
         compiled from "/var/www/html/prueba-lime/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19951221665a1f0f02cd89d7-86182541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b34e36a20dc0c1d60fcc40680ea26193d245961' => 
    array (
      0 => '/var/www/html/prueba-lime/views/index/index.tpl',
      1 => 1512058595,
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
		<ul>
			<li>Lista de clientes</li>
		</ul>
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
