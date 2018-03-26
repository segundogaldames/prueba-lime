<?php if(isset($this->_paginacion)):?>

	<div class="pagination" style="text-align: center">
		<ul class="pagination">
			<?php if($this->_paginacion['primero']):?>
				<li class="page-item"><a class="pagina page-link" pagina="<?php echo $this->_paginacion['primero'];?>" href="javascript:void(0);">Primero</a></li>
			<?php else:?>
				<li class="page-item disabled"><a href="javascript:void(0)" class="page-link">Primero<span class="sr-only">(current)</span></a></li>
			<?php endif;?>

			&nbsp;

			<?php if($this->_paginacion['anterior']):?>
				<li class="page-item"><a class="pagina page-link" pagina="<?php echo $this->_paginacion['rango'][$i];?>" href="javascript:void(0);">&laquo;</a></li>
			<?php else:?>
				<li class="page-item disabled"><a href="javascript:void(0)" class="page-link">&laquo;</a></li>
			<?php endif;?>

			&nbsp;

			<?php for($i = 0;$i < count($this->_paginacion['rango']);$i++):?>
				<?php if($this->_paginacion['actual'] == $this->_paginacion['rango'][$i]):?>
					<li class="page-item disabled"><a class="page-link" href="javascript:void(0);"><?php echo $this->_paginacion['rango'][$i];?></a></li>
				<?php else:?>
					<li class="page-item"><a class="pagina page-link" pagina="<?php echo $this->_paginacion['rango'][$i];?>" href="javascript:void(0);">
					<?php echo $this->_paginacion['rango'][$i];?></a></li>
				<?php endif;?>
			<?php endfor;?>

			&nbsp;


			<?php if($this->_paginacion['siguiente']):?>
				<li><a class="pagina page-link" pagina="<?php echo $this->_paginacion['siguiente'];?>" href="javascript:void(0);">&raquo;</a></li>
			<?php else:?>
				<li class="page-item disabled"><a href="javascript:void(0)" class="page-link">&raquo;<span class="sr-only">(current)</span></a></li>
			<?php endif;?>

			&nbsp;

			<?php if($this->_paginacion['ultimo']):?>
				<li><a class="pagina page-link" pagina="<?php echo $this->_paginacion['ultimo'];?>" href="javascript:void(0);">Último</a></li>
			<?php else:?>
				<li class="page-item disabled"><a href="javascript:void(0)" class="page-link">Último<span class="sr-only">(current)</span></a></li>
			<?php endif;?>
		</ul>
		
	</div>
	

<?php endif;?>