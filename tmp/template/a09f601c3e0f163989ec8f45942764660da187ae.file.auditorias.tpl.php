<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-02 17:18:54
         compiled from "/var/www/html/prueba-lime/views/contactos/auditorias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9647769235a99bfbee62244-13450891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a09f601c3e0f163989ec8f45942764660da187ae' => 
    array (
      0 => '/var/www/html/prueba-lime/views/contactos/auditorias.tpl',
      1 => 1520025490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9647769235a99bfbee62244-13450891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'encuesta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a99bfbee70af0_14603835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a99bfbee70af0_14603835')) {function content_5a99bfbee70af0_14603835($_smarty_tpl) {?>
	
	<div class="row justify-content-md-center">
		<div class="col-md-8">
			<?php if (isset($_smarty_tpl->tpl_vars['encuesta']->value)&&count($_smarty_tpl->tpl_vars['encuesta']->value)) {?>
				<iframe src="<?php echo $_smarty_tpl->tpl_vars['encuesta']->value['link'];?>
" marginwidth="0" marginheight="0" name="ventana_iframe" scrolling="no" border="0" 
			frameborder="0" width="750" height="4800"></iframe>							
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
