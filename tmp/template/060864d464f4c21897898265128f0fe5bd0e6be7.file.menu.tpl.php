<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-30 14:11:05
         compiled from "/var/www/html/prueba-lime/views/layout/default/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12450614905a1f14b33b84f6-95564181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '060864d464f4c21897898265128f0fe5bd0e6be7' => 
    array (
      0 => '/var/www/html/prueba-lime/views/layout/default/menu.tpl',
      1 => 1512065456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12450614905a1f14b33b84f6-95564181',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1f14b33b9fd2_13055235',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1f14b33b9fd2_13055235')) {function content_5a1f14b33b9fd2_13055235($_smarty_tpl) {?><header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
index">Meta Solutions</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      
	      <?php if (!Session::get('autenticado')) {?>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/login">Iniciar Sesión</a>
	      </li>
	      <?php } else { ?>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
index">Inicio <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/cerrar">Cerrar Sesión</a>
	      </li>
	      <li class="nav-item">
	      	<?php if (Session::get('role_id')!=2) {?>
	        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/add">Crear Usuario</a>
	      </li>
	       <li class="nav-item">
	        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
limesurvey/index.php/admin/authentication/sa/login">Encuestas</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Administración
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios">Usuarios</a>
	          <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
roles">Roles</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Clientes</a>
	           <a class="dropdown-item" href="#">Campañas</a>
	        </div>
	      </li>
	      	<?php }?>
	       <?php }?>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Contacto</a>
	      </li>
	    </ul>
	  </div>
	</nav>
</header>



<?php }} ?>
