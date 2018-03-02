
	
	<div class="row justify-content-md-center">
		<div class="col-md-8">
			{if isset($encuesta) && count($encuesta)}
				<iframe src="{$encuesta.link}" marginwidth="0" marginheight="0" name="ventana_iframe" scrolling="no" border="0" 
			frameborder="0" width="750" height="4800"></iframe>							
			{/if}
		</div>
	</div>
</div>