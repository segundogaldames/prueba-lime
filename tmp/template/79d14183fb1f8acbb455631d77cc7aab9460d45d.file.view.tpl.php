<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-27 12:59:05
         compiled from "/var/www/html/qepd/views/empresas/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11823700305a1c39afea8927-54675662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79d14183fb1f8acbb455631d77cc7aab9460d45d' => 
    array (
      0 => '/var/www/html/qepd/views/empresas/view.tpl',
      1 => 1511801940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11823700305a1c39afea8927-54675662',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1c39b000c305_01013952',
  'variables' => 
  array (
    'empresa' => 0,
    '_layoutParams' => 0,
    'sede' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1c39b000c305_01013952')) {function content_5a1c39b000c305_01013952($_smarty_tpl) {?><div style="padding-top: 50px"></div>
<div class="col-md-2"></div>
<div class="col-md-4">
	
	<h3>Ver Empresa</h3>
	
	<?php if (isset($_smarty_tpl->tpl_vars['empresa']->value)&&count($_smarty_tpl->tpl_vars['empresa']->value)) {?>
		<p style="font-size: 18px"><strong>Nombre:</strong> <?php echo $_smarty_tpl->tpl_vars['empresa']->value['nombre'];?>
</p>
		<p style="font-size: 18px"><strong>Email:</strong> <?php echo $_smarty_tpl->tpl_vars['empresa']->value['email'];?>
</p>	
		<p style="font-size: 18px"><strong>RUT:</strong> <?php echo $_smarty_tpl->tpl_vars['empresa']->value['rut'];?>
</p>	
		<p style="font-size: 18px"><strong>Usuario:</strong> <?php echo $_smarty_tpl->tpl_vars['empresa']->value['nom_usuario'];?>
 <?php echo $_smarty_tpl->tpl_vars['empresa']->value['apellido'];?>
</p>
		<p style="font-size: 18px"><strong>Tipo Empresa:</strong> <?php echo $_smarty_tpl->tpl_vars['empresa']->value['tipo'];?>
 </p>
	<?php }?>
	<p>
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas/edit/<?php echo $_smarty_tpl->tpl_vars['empresa']->value['id'];?>
">Editar</a>&nbsp;&nbsp;
		<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
empresas">Volver</a>
	</p>
	<hr>
	<?php if (isset($_smarty_tpl->tpl_vars['sede']->value)&&count($_smarty_tpl->tpl_vars['sede']->value)) {?>
	<h4>Sedes</h4>
		<table class="table table-hover">
			<tr>
				<th>Nombre</th>
				<th>Calle Nº</th>
				<th>Ciudad/Comuna</th>
			</tr>
			
				<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sede']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
					<tr>
						<td><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/view/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['sede'];?>
</a></td>
						<td><?php echo $_smarty_tpl->tpl_vars['s']->value['calle'];?>
 <?php echo $_smarty_tpl->tpl_vars['s']->value['numero'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['s']->value['comuna'];?>
</td>
					</tr>

				<?php } ?>
			
		</table>
	<?php } else { ?>
		<strong>No hay sedes asociadas</strong>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
sedes/add">Agregar sede</a></p>
	<?php }?>
</div>
<div class="col-md-4">
	
</div>	
<?php }} ?>
