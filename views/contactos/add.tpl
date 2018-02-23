<div class="col-md-12">
	<h2>Agregar Contactos</h2>
	<p class="text-info">Escoja la encuesta a la que desea agregarle contactos</p>
	{if isset($encuestas) && count($encuestas)}
		<table class="table table-hover table-condensed">
			{foreach from=$encuestas item=enc}
				<tr>
					<td>{$enc.nombre}</td>
					<td>
						<form action="" method="post" enctype="multipart/form-data" class="form-inline">
							<input type="file" name="excel" class="form-control">
							<input type="hidden" name="enviar" value="{$enviar}">
							<input type="hidden" name="encuesta" value="{$enc.id}">
							<input type="submit" value="Cargar" class="btn btn-success">
						</form>
					</td>
				</tr>
			{/foreach}
		</table>
				
	{/if}
	
	
</div>
<!--
<div class="col-md-6">
	
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<input type="file" name="excel" class="form-control">
		</div>
		<div class="form-group">
			<input type="hidden" name="enviar" value="1">
			<input type="submit" value="Cargar" class="btn btn-success">
		</div>
		
	</form>
</div>
-->