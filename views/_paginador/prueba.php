<?php if(isset($this->_paginacion)):?>
	<ul class="pagination">
		<?php if($this->_paginacion['primero']):?>
			<li class="page-item"><a class="page-link" href="<?php echo $link . $this->_paginacion['primero'];?>">Inicio</a></li>
		<?php else:?>
			<li class="page-item disabled"><a class="page-link" href="#">Inicio</a></li>
		<?php endif;?>

		&nbsp;

		<?php if($this->_paginacion['anterior']):?>
			<li class="page-item"><a class="page-link" href="<?php echo $link . $this->_paginacion['primero'];?>">&laquo;</a></li>
		<?php else:?>
			
			<li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
		<?php endif;?>

		&nbsp;

		<?php for($i = 0;$i < count($this->_paginacion['rango']);$i++):?>
			<?php if($this->_paginacion['actual'] == $this->_paginacion['rango'][$i]):?>
				<li class="page-item disabled"><a class="page-link" href="#"><?php echo $this->_paginacion['rango'][$i];?></a></li>
			<?php else:?>
				<a class="page-link" href="<?php echo $link . $this->_paginacion['rango'][$i];?>"><?php echo $this->_paginacion['rango'][$i];?></a>
			<?php endif;?>
		<?php endfor;?>

		&nbsp;


		<?php if($this->_paginacion['siguiente']):?>
			<li class="page-item"><a class="page-link" href="<?php echo $link . $this->_paginacion['siguiente'];?>">&raquo;</a></li>
		<?php else:?>
			<li class="page-item disabled"><a class="page-link" href="#">&raquo;</a></li>
		<?php endif;?>

		&nbsp;

		<?php if($this->_paginacion['ultimo']):?>
			<li class="page-item"><a class="page-link" href="<?php echo $link . $this->_paginacion['ultimo'];?>">Fin</a></li>
		<?php else:?>
			<li class="page-item disabled"><a class="page-link" href="#">Fin</a></li>
		<?php endif;?>
	</ul>

<?php endif;?>