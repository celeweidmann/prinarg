<div>
	<div class="col-md-4">
		<div class="horario col-md-10 col-md-offset-1">
			<h4 class="titulo text-center">Horario de atención:<br><br>09:00 hs<br><br>a<br><br>17:00 hs</h4>
		</div>
	</div>
	<div class="col-md-8">
		<div class="row">
			<h4 class="titulo">Contáctenos por los siguientes medios</h4><hr class="linea">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3 text-right">
						<span class=" glyphicon glyphicon-map-marker"></span>
					</div>
					<div class="col-md-9">
						<address class="contacto">
							Boulevard Pellegrini 2735<br>
							Santa Fe | CP 3000 | Argentina
						</address>
					</div>
				</div>
				<div class="row">
					<hr class="linea-corta col-md-8 col-md-offset-2">
					<div class="col-md-3 text-right">
						<span class=" glyphicon glyphicon-envelope"></span>
					</div>
					<div class="col-md-9">
						<address class="contacto">
							ventas@printaargentina.com.ar<br>
							tintas2006@yahoo.com.ar
						</address>
					</div>
				</div>
				<div class="row">
					<hr class="linea-corta col-md-8 col-md-offset-2">
					<div class="col-md-3 text-right">
						<span class=" glyphicon glyphicon-earphone"></span>
					</div>
					<div class="col-md-9">
						<address class="contacto">
							0054 - (0342) -4566748<br>
							0054 - (0342) -156136940
						</address>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<h4 class="titulo">Consultas</h4><hr class="linea">
			<div class="col-md-12">
			 <?php
                //echo $this->Form->create('Contacto',array('url' => array('controller'=>'contactos', 'action'=>'index' ,  'model'=> 'false')));
                echo $this->Form->create('Contacto',array('url' => array('controller'=>'contactos', 'action'=>'index' ,  'model'=> 'false'), 'class'=>'form-horizontal'));
            ?>
           
           <!--  <form class="form-horizontal" role="form">-->
			<?php
				echo '<div class="form-group col-md-12"><label>Cliente</label>'.$this->Form->input('Model.cliente', array(
    																			'type' => 'select',
    																			'label' => '',
    																			'multiple' => 'checkbox',
    																			'options' => array(
            																		'Value 1' => 'Consumidor Final',
            																		'Value 2' => 'Empresa',
            																		'Value 3' => 'Institución'
    																			), 'class'=>'checkbox-inline'
																			)).'</div>';
			
				echo '<div class="form-group col-md-12">'.$this->Form->input( 'nombre', array('value'=>'', 'type'=>'text', 'class' => 'form-control',
                                            'placeholder' => 'Aqui su nombre',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                           )).'</div>';
               	
               	echo '<div class="form-group col-md-12">'.$this->Form->input( 'apellido', array('value'=>'', 'type'=>'text', 'class' => 'form-control',
                                            'placeholder' => 'Aqui su apellido',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                           )).'</div>';
                       	
               	echo '<div class="form-group col-md-12">'.$this->Form->input( 'direccionenvio', array('label'=>'Dirección de Envío','value'=>'', 'type'=>'text', 'class' => 'form-control',
                                            'placeholder' => 'Dirección de envío',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                           )).'</div>';
                
				echo '<div class="form-group col-md-12">'.$this->Form->input( 'direccionfacturacion', array('label'=>'Dirección de Facturación','value'=>'', 'type'=>'text', 'class' => 'form-control',
                                            'placeholder' => 'Dirección de facturación',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                           )).'</div>';
				
				echo '<div class="form-group col-md-6">'.$this->Form->input( 'ciudad', array('value'=>'', 'type'=>'email', 'class'=>'required form-control',
                                            'placeholder' => 'Ciudad',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error')) )).'</div>';
            
				echo '<div class="form-group col-md-6">'.$this->Form->input( 'cp', array('label'=>'C.P.', 'value'=>'', 'type'=>'email', 'class'=>'required form-control',
                                            'placeholder' => 'Código Postal',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error')) )).'</div>';
			
				echo '<div class="form-group col-md-6">'.$this->Form->input( 'telephone', array('label'=>'Teléfono', 'value'=>'', 'type'=>'text', 'class'=>'required form-control',
                                            'placeholder' => 'Teléfono',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error')) )).'</div>';
            
				echo '<div class="form-group col-md-6">'.$this->Form->input( 'celular', array('value'=>'', 'type'=>'text', 'class'=>'required form-control',
                                            'placeholder' => 'Celular',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error')) )).'</div>';
			
                echo '<div class="form-group col-md-12">'.$this->Form->input( 'email', array('value'=>'', 'type'=>'email', 'class'=>'required form-control',
                                            'placeholder' => 'Aqui su dirección de correo',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error')) )).'</div>';

                echo '<div class="form-group col-md-12">'.$this->Form->input( 'consulta', array(
                 							'class' => 'form-control',
                                            'value'=>'', 'type'=>'textarea', 'rows'=>'6',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                            )).'</div>';
											
				echo '<div class="form-group col-md-12"><label>Medio de Contacto</label>'.$this->Form->input('Model.cliente', array(
    																			'type' => 'select',
    																			'label' => '',
    																			'multiple' => 'checkbox',
    																			'options' => array(
            																		'Value 1' => 'telefono',
            																		'Value 2' => 'celular',
            																		'Value 3' => 'e-mail'
    																			), 'class'=>'checkbox-inline'
																			)).'</div>';
			
                ?>
				<div class="col-md-12 text-center">
					<button type="submit" class="btn btn-formulario">Enviar
						<?php echo $this->Form->end(); ?>
					</button>
				</div>
			</form>
			
			<!--<form class="form-horizontal" role="form">-->
			<?php
                //echo $this->Form->create('Contacto',array('url' => array('controller'=>'contactos', 'action'=>'index' ,  'model'=> 'false')));
                echo $this->Form->create('Contactos',array('url' => array('controller'=>'contactos', 'action'=>'index' ,  'model'=> 'false'), 'class'=>'form-horizontal'));
            ?>
			</div>
		</div>
	</div>
</div>