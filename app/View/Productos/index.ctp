<div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="items form">
				<?php echo $this->Form->create(); ?>
					<fieldset>
						<legend><h4 class="titulo"><?php echo __('Buscar'); ?></h4></legend>
						<?php
							echo $this->Form->input('marca_id', array('empty' => 'Elije una marca'));
					        echo $this->Form->input('modelo_id', array('empty' => 'Elije un modelo'));
					        echo $this->Form->input('version_id', array('empty' => 'Elije una version'));	
							
						?>
					</fieldset>
				<?php echo $this->Form->end(__('Buscar'), array('action' => 'buscar')); ?>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<ul class="nav nav-tabs  hidden-xs">
  				<li><?php echo $this->Html->link("Reciclados", array('controller'=>'pages', 'action'=>'reciclado'), array('class'=>'pestania'))?></li>
  				<li><?php echo $this->Html->link("Recuperación", array('controller'=>'pages', 'action'=>'recuperacion'), array('class'=>'pestania'))?></li>
  				<li class="active"><?php echo $this->Html->link("Firmware Disponible", array('controller'=>'pages', 'action'=>'firmware'), array('class'=>'pestania'))?></li>
  				
  				<!--<li><?php echo $this->Html->link("Preguntas Frecuentes", array('controller'=>'pages', 'action'=>'preguntas'), array('class'=>'pestania'))?></li>-->
			</ul>
			<div class="col-xs-12 visible-xs">
				<h4 class="titulo">Firmware Disponible</h4>
				<hr class="linea">
			</div>
			<div class="col-lg-12 col-md-12 text-right frase-listado">
				<br>
				<img class="pull-right" src="/img/info.png">
				<em >
					Consulte sin compromiso por otros modelos que no figuran en el Listado: &nbsp; <br>
					ventas@printaargentina.com &nbsp;
				</em>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<hr class="linea">
				<table class="table table-striped">
				<?php
					foreach ($productos as $producto) {
							
						echo '<tr>';
						echo '<td>'.$producto['Marca']['marca'].'</td>';
						echo '<td>'.$producto['Modelo']['modelo'].'</td>';
						echo '<td>'.$producto['Version']['version'].'</td>';
						
						echo '</tr>';
					}
				?>	
				</table>
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			
		</div>
	</div>
</div>	
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<br><br><br><br>
	<hr class="linea">
	 <?php echo $this->element('marcascarousel'); ?>
</div>