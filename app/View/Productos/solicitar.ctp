<div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="items form">
				<!--
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
					</fieldset>-->
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
  				<li class="active"><?php echo $this->Html->link("Firmware Disponible / Recarga de Cartuchos", array('controller'=>'pages', 'action'=>'firmware'), array('class'=>'pestania'))?></li>		
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
				<legend>Solicitud de información</legend>
				<p>
					Completa el formulario para que podamos contactarnos y asesorarte sobre el pedido de solicitud
					para reset de firmware de la impresora:<br>
				</p>
				<p>

				<?php 
					$url = Router::url( $this->here, true );
					$pieces = explode('/', $url, 6);
					$modelo = explode('(', $pieces[5]);
					$modelo = str_replace("%20", " ", $modelo);
					
					echo '&nbsp<b>Marca:</b> '.$pieces[4].'</br>';			
					echo '&nbsp<b>Modelo:</b> '.$modelo['0'].'</br>';
				?>
				</p>
				
           	 	<?php
                	echo $this->Form->create('Producto', array(
                				'url' => array(
                					'controller'=>'productos', 
                					'action'=>'enviar',
                					'model'=> 'false'), 
                				'class'=>'form-horizontal col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1'));
            	?>
		  			<?php echo $this->Form->input('email', array('class'=>'form-control', 'type'=>'email','placeholder'=>'tu email', 'required'=>'required' ,'div' => 'form-group'));?>
		  			<?php echo $this->Form->input('telefono', array('class'=>'form-control', 'type'=>'text','placeholder'=>'tu teléfono', 'required'=>'required', 'div' => 'form-group' ));?>
					<?php echo $this->Form->input('marca', array('type' => 'hidden', 'value' =>$marca));?>
					<?php echo $this->Form->input('modelo', array('type' => 'hidden', 'value' => $modelo));?>
				<button type="submit" class="btn btn-formulario">Enviar</button>
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