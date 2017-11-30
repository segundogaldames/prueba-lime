<!DOCTYPE html>
<html>
   <head>
   	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{$titulo|default:"Sin Titulo"}</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="{$_layoutParams.ruta_css}fileinput.min.css">
      <link rel="stylesheet" type="text/css" href="{$_layoutParams.ruta_css}resets.css">
      <link rel="stylesheet" type="text/css" href="{$_layoutParams.ruta_css}estilos.css">
      <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
      <script type="text/javascript" src="{$_layoutParams.ruta_js}fileinput.min.js"></script>
      <script type="text/javascript" src="{$_layoutParams.ruta_js}jquery.validate.js"></script>
      <script type="text/javascript" src="{$_layoutParams.ruta_js}additional-methods.js"></script>
      <script type="text/javascript" src="{$_layoutParams.ruta_js}funciones.js"></script>
      
      
      {if isset($_layoutParams.js) && count($_layoutParams.js)}
        {foreach item=js from=$_layoutParams.js}
          <script type="text/javascript" src="{$js}"></script>
        {/foreach}

      {/if}

   </head>
   <body>
      {include file="menu.tpl"}
      <div class="row">
        <div class="container">
           <noscript><p>Debe tener el soporte de Javascript habilitado</p></noscript>
            {if isset($_error)}
              <div style="padding-top: 45px"></div>
              <p class="alert alert-danger">{$_error}</p>
            {/if}

            {if isset($_mensaje)}
              <div style="padding-top: 45px"></div>
              <p class="alert alert-success">{$_mensaje}</p>
            {/if}

            {include file=$_contenido}
          </div>
        </div>
           
  </body>
</html>