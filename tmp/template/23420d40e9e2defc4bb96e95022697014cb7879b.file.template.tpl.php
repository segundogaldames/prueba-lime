<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-02-26 15:43:40
         compiled from "/var/www/html/prueba-lime/views/layout/default/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6417541945a1f0f02c1b067-05851076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23420d40e9e2defc4bb96e95022697014cb7879b' => 
    array (
      0 => '/var/www/html/prueba-lime/views/layout/default/template.tpl',
      1 => 1519674218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6417541945a1f0f02c1b067-05851076',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1f0f02cadce1_86043200',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'js' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1f0f02cadce1_86043200')) {function content_5a1f0f02cadce1_86043200($_smarty_tpl) {?><!DOCTYPE html>
<html>
   <head>
   	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin Titulo" : $tmp);?>
</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
fileinput.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
resets.css">
      <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
estilos.css">
      <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
      <!--<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>-->
      <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
fileinput.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
jquery.validate.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
additional-methods.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
funciones.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript">
        var _root_ = '<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
'
      <?php echo '</script'; ?>
>
      
      
      <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])&&count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])) {?>
        <?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
          <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
        <?php } ?>

      <?php }?>

   </head>
   <body>
      <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <div class="row">
        <div class="container">
           <noscript><p>Debe tener el soporte de Javascript habilitado</p></noscript>
            <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)) {?>
              <div style="padding-top: 45px"></div>
              <p class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</p>
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)) {?>
              <div style="padding-top: 45px"></div>
              <p class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</p>
            <?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          </div>
        </div>
           
  </body>
</html><?php }} ?>
