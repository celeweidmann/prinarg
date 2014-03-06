<div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="items form">
				<?php echo $this->Form->create(); ?>
					<fieldset>
						<legend><h4 class="titulo"><?php echo __('Buscar'); ?></h4></legend>
						<div class="form-group">
							<?php echo $this->Form->input('marca_id', array('empty' => 'todas las marcas', 'class'=>'form-control', 'onchange'=>'submit();javascript:limpiar()'));?>
						</div>
						<?php if ($this->data['Producto']['marca_id'] != ''){
								echo '<div class="form-group">';
								echo $this->Form->input('modelo_id', array('empty' => 'todos los modelos', 'class'=>'form-control', 'onchange'=>'submit()', 'id'=>'elmodelo'));
								
								echo '</div>'; 
								}
							?>
					</fieldset>
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
			</ul>
			<div class="col-xs-12 visible-xs">
				<h4 class="titulo">Firmware Disponible</h4>
				<hr class="linea">
			</div>
			<div class="col-lg-12 col-md-12 text-right frase-listado">
				<br>
				<a href="/contactos"><img class="pull-right" src="/img/info.png"></a>
				<em >
					Consulte sin compromiso por otros modelos que no figuran en el Listado: &nbsp; <br>
					ventas@printaargentina.com &nbsp;
				</em>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<hr class="linea">
				<table class="table table-striped">
				<?php
					foreach ($productosListado as $producto) {
						$losproductos[] = $producto;
						echo '<tr>';
						echo '<td>'.$producto['Marca']['marca'].'</td>';
						echo '<td>'.$producto['Modelo']['modelo'].'</td>';
						echo '<td>'.$producto['Version']['version'].'</td>';
						echo '<td><a href="/solicitar/'.$producto['Marca']['marca'].'/'.$producto['Modelo']['modelo'].'">
									<span class="btn glyphicon glyphicon-shopping-cart"></span>
								</a></td>';
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

<!-- Modal -->
<div class="modal fade" id="micarrito" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h4 class="modal-title" id="myModalLabel">Envío de Solicitud</h4>
      		</div>
      		<div class="modal-body">
				<form role="form">
		  			<div class="form-group">
		    			<label for="exampleInputEmail1">Email</label>
		    			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="tu email">
		  			</div>
		  			<div class="form-group">
		    			<label for="exampleInputEmail1">Teléfono</label>
		    			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="tu número telefónico">
		  			</div>
		  			<div>
		  				<?php echo $producto['Marca']['marca'] .' - '.$producto['Modelo']['modelo'];?>
		  				
		  				<?php echo $this->data['Producto']['id_marca'];?>
		  			</div>
				</form>
			</div>
      		<div class="modal-footer">
      			<button type="submit" class="btn btn-default">Submit</button>
        		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      		</div>
    	</div>
  	</div>
</div>