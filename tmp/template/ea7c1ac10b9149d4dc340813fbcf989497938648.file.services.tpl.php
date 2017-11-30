<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-11-29 15:48:18
         compiled from "/var/www/html/prueba-lime/views/layout/default/services.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16897258335a1f0f02ce6790-77610457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea7c1ac10b9149d4dc340813fbcf989497938648' => 
    array (
      0 => '/var/www/html/prueba-lime/views/layout/default/services.tpl',
      1 => 1510760982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16897258335a1f0f02ce6790-77610457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5a1f0f02cedd42_85248061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1f0f02cedd42_85248061')) {function content_5a1f0f02cedd42_85248061($_smarty_tpl) {?><!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="services" class="services bg-primary">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>Servicios</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-3">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-stack-1x text-primary">Imagen</i>
                            </span>
                            <h4>
                                <strong>Funerarias</strong>
                               
                            </h4>
                            <p>Elige el mejor plan funerario</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/9" class="cotizar">Cotizar</a>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-stack-1x text-primary">Imagen</i>
                        </span>
                            <h4>
                                <strong>Crematorios</strong>
                            </h4>
                            <p>Elige el mejor servicio de cremación</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/10" class="cotizar">Cotizar</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-stack-1x text-primary">Imagen</i>
                        </span>
                            <h4>
                                <strong>Sepulturas</strong>
                            </h4>
                            <p>Elige el mejor plan de cementerio</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/11" class="cotizar">Cotizar</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-stack-1x text-primary">Imagen</i>
                        </span>
                            <h4>
                                <strong>Servicios de Sepultación</strong>
                            </h4>
                            <p>Elige el mejor servicio de sepultación</p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
planes/planesServicios/12" class="cotizar">Cotizar</a>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<?php }} ?>
