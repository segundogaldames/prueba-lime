<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-05 16:19:24
         compiled from "/var/www/html/prueba-lime/views/encuestas/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9185742495a257f02d3df57-44357234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110ae28df20e9a2cb34bac3e1f9c5ad3e9ea8016' => 
    array (
      0 => '/var/www/html/prueba-lime/views/encuestas/view.tpl',
      1 => 1520281161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9185742495a257f02d3df57-44357234',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a257f02d85481_54982699',
  'variables' => 
  array (
    'encuesta' => 0,
    '_layoutParams' => 0,
    'criterios' => 0,
    'cr' => 0,
    'usuarios' => 0,
    'u' => 0,
    'cargas' => 0,
    'car' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a257f02d85481_54982699')) {function content_5a257f02d85481_54982699($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/prueba-lime/libs/smarty/libs/plugins/modifier.date_format.php';
?><div class="col-md-12">
	<h2>Ver encuesta: <?php echo $_smarty_tpl->tpl_vars['encuesta']->value['nombre'];?>
</h2>
	<p><strong>Link:</strong> <?php echo $_smarty_tpl->tpl_vars['encuesta']->value['link'];?>
</p>
	<p><strong>Status:</strong> <?php if ($_smarty_tpl->tpl_vars['encuesta']->value['status']==1) {?>Activa<?php } else { ?>No activa<?php }?></p>
	<p><strong>Campaña:</strong> <?php echo $_smarty_tpl->tpl_vars['encuesta']->value['campaign'];?>
</p>
	<p><strong>Tipo:</strong> <?php if ($_smarty_tpl->tpl_vars['encuesta']->value['tipo']==1) {?>Encuesta<?php } else { ?>Auditoría<?php }?></p>
	<p><strong>Creado:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['encuesta']->value['creado'],"%d-%m-%Y %H:%M");?>
</p>
	<p><strong>Modificado:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['encuesta']->value['actualizado'],"%d-%m-%Y %H:%M");?>
</p>
	
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/edit/<?php echo $_smarty_tpl->tpl_vars['encuesta']->value['id'];?>
" class="btn btn-link btn-sm">Editar</a>
		<?php if (Session::get('role_id')==1) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/delete/<?php echo $_smarty_tpl->tpl_vars['encuesta']->value['id'];?>
" class="btn btn-link btn-sm" onclick="return eliminar('<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas/delete/<?php echo $_smarty_tpl->tpl_vars['encuesta']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['encuesta']->value['nombre'];?>
')">Eliminar</a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestas" class="btn btn-link btn-sm">Encuestas</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/contactoEncuesta/<?php echo $_smarty_tpl->tpl_vars['encuesta']->value['id'];?>
" class="btn btn-link btn-sm">Ejecutar</a>
	</p>

	<hr>
	<!--lista de criterios asociados-->
	<h4>Criterios Asociados</h4>
	<?php if (isset($_smarty_tpl->tpl_vars['criterios']->value)&&count($_smarty_tpl->tpl_vars['criterios']->value)) {?>
		<ul type="square">
			<?php  $_smarty_tpl->tpl_vars['cr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['criterios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cr']->key => $_smarty_tpl->tpl_vars['cr']->value) {
$_smarty_tpl->tpl_vars['cr']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
criterios/view/<?php echo $_smarty_tpl->tpl_vars['cr']->value['id'];?>
"><?php echo ucwords($_smarty_tpl->tpl_vars['cr']->value['nombre']);?>
</a></li>
			<?php } ?>
		</ul>
	<?php } else { ?>
		<strong>No hay criterios asociados</strong>
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
criterios/addCriterioEncuesta/<?php echo $_smarty_tpl->tpl_vars['encuesta']->value['id'];?>
" class="btn btn-link">Crear Criterio</a></p>
	<hr>
	
	<!--Lista los usuarios asociados a una encuesta y permite asociar usuarios-->
	<!--<h4>Ejecutivos asociados</h4>
	<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
		<ul type="square"></ul>
			<?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/view/<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->tpl_vars['u']->value['usuario'];?>
</a></li>
			<?php } ?>
	<?php } else { ?>
		<strong>No hay ejecutivos asociados</strong>
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
encuestasusuarios/addUsuarioEncuesta/<?php echo $_smarty_tpl->tpl_vars['encuesta']->value['id'];?>
" class="btn btn-link">Asociar Usuarios</a></p>
	
	<hr>-->

	<!--Lista de cargas realizadas asociadas a un usuario-->
	<!--<h4>Listas de Contactos Asociados</h4>
	<?php if (isset($_smarty_tpl->tpl_vars['cargas']->value)&&count($_smarty_tpl->tpl_vars['cargas']->value)) {?>
		<ul type="square">
			<?php  $_smarty_tpl->tpl_vars['car'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['car']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cargas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['car']->key => $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
cargas/view/<?php echo $_smarty_tpl->tpl_vars['car']->value['id'];?>
" class="btn btn-link">Carga <?php echo $_smarty_tpl->tpl_vars['car']->value['id'];?>
</a></li>
			<?php } ?>
		</ul>
	<?php } else { ?>
		<strong>No hay listas de contactos cargadas</strong>
	<?php }?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
contactos/addContactosEncuesta/<?php echo $_smarty_tpl->tpl_vars['encuesta']->value['id'];?>
" class="btn btn-link">Cargar Contactos</a></p>

</div>--><?php }} ?>
