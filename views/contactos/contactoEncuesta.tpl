<style type="text/css">
	th{
		text-align: right;
	}
	#contactos{
		background-color: #c6ebed;
		padding: 10px;
		border-radius: 10px 10px 10px 10px;
		-moz-border-radius: 10px 10px 10px 10px;
		-webkit-border-radius: 10px 10px 10px 10px;
		border: 0px solid #000000;
		font-size: 14px;
	}
</style>
<div class="container">
	<!--fila para mostrar datos de contacto-->
	<div class="row" id="contactos">
		<div class="col-md-12 justify-content-md-center">
			<h4 style="text-align: center">Datos de contacto</h4>
		</div>
		<!--columna 1 para mostrar datos telefonicos-->
		<div class="col-md-4 offset-md-2">
			{if isset($contacto) && count($contacto)}
			<table class="table table-hover" id="contacto">
				<tr>
					<th>Nombre:</th>
					<td>{ucwords($contacto.nombre)}</td>
				</tr>
				<tr>
					<th>Teléfono 1:</th>
					<td>{$contacto.telefono}</td>
				</tr>
				{if isset($contacto.telefono2)}
				<tr>
					<th>Teléfono 2:</th>
					<td>{$contacto.telefono2}</td>
				</tr>
				{/if}
				{if isset($contacto.telefono3)}
				<tr>
					<th>Teléfono 3:</th>
					<td>{$contacto.telefono3}</td>
				</tr>
				{/if}
				{if isset($contacto.telefono4)}
				<tr>
					<th>Teléfono 4:</th>
					<td>{$contacto.telefono4}</td>
				</tr>
				{/if}
				{if isset($contacto.telefono5)}
				<tr>
					<th>Teléfono 5:</th>
					<td>{$contacto.telefono5}</td>
				</tr>
				{/if}
				{if isset($contacto.telefono6)}
				<tr>
					<th>Teléfono 6:</th>
					<td>{$contacto.telefono6}</td>
				</tr>
				{/if}
				{if isset($contacto.telefono7)}
				<tr>
					<th>Teléfono 7:</th>
					<td>{$contacto.telefono7}</td>
				</tr>
				{/if}
				{if isset($contacto.telefono8)}
				<tr>
					<th>Teléfono 8:</th>
					<td>{$contacto.telefono8}</td>
				</tr>
				{/if}
				{if isset($contacto.telefono9)}
				<tr>
					<th>Teléfono 9:</th>
					<td>{$contacto.telefono9}</td>
				</tr>
				{/if}
				{if isset($contacto.telefono10)}
				<tr>
					<th>Teléfono 10:</th>
					<td>{$contacto.telefono10}</td>
				</tr>
				{/if}
			</table>
			{/if}
		</div>
		<!--columna 2 para mostrar otros datos del contacto-->
		<div class="col-md-4">
			{if isset($contacto) && count($contacto)}
			<table class="table table-hover">
				<!--mostrar rut-->
				{if isset($contacto.rut)}
				<tr>
					<th>RUT:</th>
					<td>{$contacto.rut}</td>
				</tr>
				{/if}
				<!--mostrar comuna-->
				{if isset($contacto.comuna)}
				<tr>
					<th>{ucwords($campos.comuna)}:</th>
					<td>{$contacto.comuna}</td>
				</tr>
				{/if}
				<!--mostrar region-->
				{if isset($contacto.region)}
				<tr>
					<th>{ucwords($campos.region)}:</th>
					<td>{$contacto.region}</td>
				</tr>
				{/if}
				<!--mostrar codigo-->
				{if isset($contacto.codigo)}
				<tr>
					<th>{ucwords($campos.codigo)}:</th>
					<td>{$contacto.codigo}</td>
				</tr>
				{/if}
				<!--mostrar dato1-->
				{if isset($contacto.dato1)}
				<tr>
					<th>{ucwords($campos.dato1)}:</th>
					<td>{$contacto.dato1}</td>
				</tr>
				{/if}
				<!--mostrar dato2-->
				{if isset($contacto.dato2)}
				<tr>
					<th>{ucwords($campos.dato2)}:</th>
					<td>{$contacto.dato2}</td>
				</tr>
				{/if}
				<!--mostrar dato3-->
				{if isset($contacto.dato3)}
				<tr>
					<th>{ucwords($campos.dato3)}:</th>
					<td>{$contacto.dato3}</td>
				</tr>
				{/if}
				<!--mostrar dato4-->
				{if isset($contacto.dato4)}
				<tr>
					<th>{ucwords($campos.dato4)}:</th>
					<td>{$contacto.dato4}</td>
				</tr>
				{/if}
				<!--mostrar dato5-->
				{if isset($contacto.dato5)}
				<tr>
					<th>{ucwords($campos.dato5)}:</th>
					<td>{$contacto.dato5}</td>
				</tr>
				{/if}
				<!--mostrar dato6-->
				{if isset($contacto.dato6)}
				<tr>
					<th>{ucwords($campos.dato6)}:</th>
					<td>{$contacto.dato6}</td>
				</tr>
				{/if}
				<!--mostrar dato7-->
				{if isset($contacto.dato7)}
				<tr>
					<th>D{ucwords($campos.dato7)}:</th>
					<td>{$contacto.dato7}</td>
				</tr>
				{/if}
				<!--mostrar dato8-->
				{if isset($contacto.dato8)}
				<tr>
					<th>{ucwords($campos.dato8)}:</th>
					<td>{$contacto.dato8}</td>
				</tr>
				{/if}
				<!--mostrar dato9-->
				{if isset($contacto.dato9)}
				<tr>
					<th>{ucwords($campos.dato9)}:</th>
					<td>{$contacto.dato9}</td>
				</tr>
				{/if}
				<!--mostrar dato10-->
				{if isset($contacto.dato10)}
				<tr>
					<th>{ucwords($campos.dato10)}:</th>
					<td>{$contacto.dato10}</td>
				</tr>
				{/if}
				<!--mostrar dato11-->
				{if isset($contacto.dato11)}
				<tr>
					<th>{ucwords($campos.dato11)}:</th>
					<td>{$contacto.dato11}</td>
				</tr>
				{/if}
				<!--mostrar fecha1-->
				{if isset($contacto.fecha1)}
				<tr>
					<th>{ucwords($campos.fecha1)}:</th>
					<td>{$contacto.fecha1}</td>
				</tr>
				{/if}
				<!--mostrar fecha2-->
				{if isset($contacto.fecha2)}
				<tr>
					<th>{ucwords($campos.fecha2)}:</th>
					<td>{$contacto.fecha2}</td>
				</tr>
				{/if}
				<!--mostrar fecha3-->
				{if isset($contacto.fecha3)}
				<tr>
					<th>{ucwords($campos.fecha3)}:</th>
					<td>{$contacto.fecha3}</td>
				</tr>
				{/if}
			</table>
			{/if}
		</div>
	</div>
	<!--Formulario de cambio de estado de llamada-->
	<div class="row justify-content-md-center">

		<div class="col-md-6">
			<hr>
			.<form action="" method="post">
				<div class="form-group">
					<label>Estado de Llamada</label>
					<select name="llamada" class="form-control">
						<option value="">Selecione</option>
						{if isset($estado_llamadas) && count($estado_llamadas)}
							{foreach from=$estado_llamadas item=ell}
								<option value="{$ell.id}">{$ell.nombre}</option>
							{/foreach}
						{/if}
					</select>
				</div>
				<div class="form-group">
					<input type="hidden" name="contacto" value="{$contacto.id}">
					<input type="hidden" name="enviar" value="{$enviar}">
					<input type="submit" value="Guardar" class="btn btn-success">
					<a href="{$_layoutParams.root}index" class="btn btn-primary">Volver</a>
				</div>
			</form>
		</div>
	</div>
	
	<div class="row justify-content-md-center">
		<div class="col-md-8">
			{if isset($encuesta) && count($encuesta)}
				<iframe src="{$encuesta.link}" marginwidth="0" marginheight="0" name="ventana_iframe" scrolling="no" border="0" 
			frameborder="0" width="750" height="4800"></iframe>							
			{/if}
		</div>
	</div>
</div>