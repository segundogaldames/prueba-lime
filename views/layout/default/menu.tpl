<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="{$_layoutParams.root}index">Meta Solutions</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      
	      {if !Session::get('autenticado')}
	      <li class="nav-item">
	        <a class="nav-link" href="{$_layoutParams.root}usuarios/login">Iniciar Sesión</a>
	      </li>
	      {else}
	      <li class="nav-item">
	        <a class="nav-link" href="{$_layoutParams.root}index">Inicio <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="{$_layoutParams.root}usuarios/cerrar">Cerrar Sesión</a>
	      </li>
	      <li class="nav-item">
	      	{if Session::get('role_id') != 2}
	        <a class="nav-link" href="{$_layoutParams.root}usuarios/add">Crear Usuario</a>
	      </li>
	       <li class="nav-item">
	        <a class="nav-link" href="{$_layoutParams.root}limesurvey/index.php/admin/authentication/sa/login">Encuestas</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Administración
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="{$_layoutParams.root}usuarios">Usuarios</a>
	          <a class="dropdown-item" href="{$_layoutParams.root}roles">Roles</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="{$_layoutParams.root}clientes">Clientes</a>
	           <a class="dropdown-item" href="#">Campañas</a>
	        </div>
	      </li>
	      	{/if}
	       {/if}
	      <li class="nav-item">
	        <a class="nav-link" href="#">Contacto</a>
	      </li>
	    </ul>
	  </div>
	</nav>
</header>



