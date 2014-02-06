<div>
<div class="col-md-3">
	<div class="row">
		<div class="col-md-2">
			
		</div>
	</div>
</div>
<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs">
  				<li class="active"><?php echo $this->Html->link("Firmware Disponible", array('controller'=>'pages', 'action'=>'firmware'), array('class'=>'pestania'))?></li>
  				<li><?php echo $this->Html->link("Recuperación", array('controller'=>'pages', 'action'=>'recuperacion'), array('class'=>'pestania'))?></li>
  				<li><?php echo $this->Html->link("Preguntas Frecuentes", array('controller'=>'pages', 'action'=>'preguntas'), array('class'=>'pestania'))?></li>
			</ul>
			<div class="col-md-12 text-right frase-listado">
				<br>
				<img class="pull-right" src="/img/info.png">
				<em >
					Consulte sin compromiso por otros modelos que no figuran en el Listado: &nbsp; <br>
					ventas@printaargentina.com &nbsp;
				</em>
			</div>
			<div class="col-md-12">
				<hr class="linea">
			</div>
			</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			
		</div>
	</div>
</div>	
</div>
<div class="col-md-12">
	<br><br><br><br>
	<hr class="linea">
	 <?php echo $this->element('marcascarousel'); ?>
</div>
