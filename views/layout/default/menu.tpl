<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  	<a class="navbar-brand" href="{$_layoutParams.root}index">Meta Solutions</a>
	 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    	<ul class="navbar-nav ml-auto">
	      
	      		<li class="nav-item">
	        		<a class="nav-link" href="{$_layoutParams.root}index">Inicio <span class="sr-only">(current)</span></a>
	      		</li>
	     	{if Session::get('autenticado') && Session::get('role_id') != 2}
	      		<li class="nav-item">
	        		<a class="nav-link" href="https://survey.metaservicios.cl/index.php/admin/authentication/sa/login" target="_blank">Lime Survey</a>
	      		</li>
	      	{/if}
	    	{if Session::get('role_id') == 1}
	      		<li class="nav-item">
	        		<a class="nav-link" href="{$_layoutParams.root}usuarios/add">Crear Usuario</a>
	     		</li>
	     	{/if}
	      	{if Session::get('autenticado') && Session::get('role_id') != 2}
		      	<li class="nav-item dropdown">
		        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administración</a>
		        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		        		{if Session::get('role_id')==1}
		          			<a class="dropdown-item" href="{$_layoutParams.root}usuarios">Usuarios</a>
		          			<a class="dropdown-item" href="{$_layoutParams.root}roles">Roles</a>
		          			<div class="dropdown-divider"></div>
		          		{/if}
		         		<a class="dropdown-item" href="{$_layoutParams.root}clientes">Clientes</a>
		           		<a class="dropdown-item" href="{$_layoutParams.root}campaign">Campañas</a>
		           		{if Session::get('role_id')==1}
		           			<a class="dropdown-item" href="{$_layoutParams.root}encuestas">Encuestas</a>
		           		{/if}
		           		<a class="dropdown-item" href="{$_layoutParams.root}encuestasusuarios">Encuestas y Usuarios</a>
		           		{if Session::get('role_id')==1}
		           			<a class="dropdown-item" href="{$_layoutParams.root}encuestassupervisores">Encuestas y Supervisores</a>
		           		{/if}
		           		<div class="dropdown-divider"></div>
		           		<a class="dropdown-item" href="{$_layoutParams.root}cargas">Listas</a>
		           		<a class="dropdown-item" href="{$_layoutParams.root}contactos">Contactos</a>
		           		{if Session::get('role_id')==1}
		           			<a class="dropdown-item" href="{$_layoutParams.root}camposcontactos">campos Contacto Encuesta</a>
		            		<div class="dropdown-divider"></div>
		            		<a class="dropdown-item" href="{$_layoutParams.root}estadollamadas">Estado Llamadas</a>
		            		<a class="dropdown-item" href="{$_layoutParams.root}estadocontactos">Estado Contactos</a>
		            	{/if}
		        	</div>
		      	</li>
	      	 {/if}
		    	{if Session::get('autenticado')}
		      		<li class="nav-item">
		        		<a class="nav-link" href="{$_layoutParams.root}usuarios/cerrar">Cerrar Sesión</a>
		      		</li>
		    	{else}
		       		<li class="nav-item">
		        		<a class="nav-link" href="{$_layoutParams.root}usuarios/login">Iniciar Sesión</a>
		      		</li>
		      	{/if}
		    
	    	</ul>
	  	</div>
	</nav>
</header>



