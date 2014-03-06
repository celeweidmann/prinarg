<div>
	<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
		<!--
		<div class="horario col-md-10 col-md-offset-1">
			<h4 class="titulo text-center">Horario de atención:<br><br>09:00 hs<br><br>a<br><br>17:00 hs</h4>
		</div>-->
		<div class="horario col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
			<img class="img-responsive" src="/img/horario_atencion.png"/>
		</div>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-9 col-xs-12">
		<div class="row">
			<h4 class="titulo">Contáctenos por los siguientes medios</h4><hr class="linea">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-2 text-right">
						<span class=" glyphicon glyphicon-map-marker"></span>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
						<address class="contacto">
							Boulevard Pellegrini 2735<br>
							Santa Fe | CP 3000 | Argentina
						</address>
					</div>
				</div>
				<div class="row">
					<hr class="linea-corta col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-2 text-right">
						<span class=" glyphicon glyphicon-envelope"></span>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
						<address class="contacto">
							ventas@printaargentina.com.ar<br>
							tintas2006@yahoo.com.ar
						</address>
					</div>
				</div>
				<div class="row">
					<hr class="linea-corta col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-2 text-right">
						<span class=" glyphicon glyphicon-earphone"></span>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-10">
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
			<div class="col-lg-12 col-md-12 col-sm-12">
			 <?php
                //echo $this->Form->create('Contacto',array('url' => array('controller'=>'contactos', 'action'=>'index' ,  'model'=> 'false')));
                echo $this->Form->create('Contacto',array('url' => array('controller'=>'contactos', 'action'=>'index' ,  'model'=> 'false'), 'class'=>'form-horizontal'));
            ?>
           
           <!--  <form class="form-horizontal" role="form">-->
			<?php
				echo '<div class="form-group col-lg-12 col-md-12"><label>Cliente</label>'.$this->Form->input('Model.cliente', array(
    																			'type' => 'select',
    																			'name' => 'tipocliente',
    																			'label' => '',
    																			'multiple' => 'checkbox',
    																			'options' => array(
            																		'cliente 1' => 'Consumidor Final',
            																		'cliente 2' => 'Empresa',
            																		'cliente 3' => 'Institución'
    																			), 'class'=>'checkbox-inline'
																			)).'</div>';
			
				echo '<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">'.$this->Form->input( 'nombre', array('value'=>'', 'type'=>'text', 'class' => 'form-control',
                                            'placeholder' => 'Aqui su nombre',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                           )).'</div>';
               	
               	echo '<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">'.$this->Form->input( 'apellido', array('value'=>'', 'type'=>'text', 'class' => 'form-control',
                                            'placeholder' => 'Aqui su apellido',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                           )).'</div>';
                       	
               	echo '<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">'.$this->Form->input( 'direccionenvio', array('label'=>'Dirección de Envío','value'=>'', 'type'=>'text', 'class' => 'form-control',
                                            'placeholder' => 'Dirección de envío',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                           )).'</div>';
                
				echo '<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">'.$this->Form->input( 'direccionfacturacion', array('label'=>'Dirección de Facturación','value'=>'', 'type'=>'text', 'class' => 'form-control',
                                            'placeholder' => 'Dirección de facturación',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                           )).'</div>';
				
				echo '<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">'.$this->Form->input( 'ciudad', array('value'=>'', 'type'=>'text', 'class'=>'required form-control',
                                            'placeholder' => 'Ciudad',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error')) )).'</div>';
            
				echo '<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">'.$this->Form->input( 'cp', array('label'=>'C.P.', 'value'=>'', 'type'=>'text', 'class'=>'required form-control',
                                            'placeholder' => 'Código Postal',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error')) )).'</div>';
			
				echo '<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">'.$this->Form->input( 'telephone', array('label'=>'Teléfono', 'value'=>'', 'type'=>'text', 'class'=>'required form-control',
                                            'placeholder' => 'Teléfono',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error')) )).'</div>';
            
				echo '<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">'.$this->Form->input( 'celular', array('value'=>'', 'type'=>'text', 'class'=>'required form-control',
                                            'placeholder' => 'Celular',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error')) )).'</div>';
			
                echo '<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">'.$this->Form->input( 'email', array('value'=>'', 'type'=>'email', 'class'=>'required form-control',
                                            'placeholder' => 'Aqui su dirección de correo',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error')) )).'</div>';

                echo '<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">'.$this->Form->input( 'consulta', array(
                 							'class' => 'form-control',
                                            'value'=>'', 'type'=>'textarea', 'rows'=>'6',
                                            'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
                                            )).'</div>';
											
				echo '<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12"><label>Medio de Contacto</label>'.$this->Form->input('Model.medio', array(
    																			'type' => 'select',
    																			'name' => 'tipomedio',
    																			'label' => '',
    																			'multiple' => 'checkbox',
    																			'options' => array(
            																		'medio 1' => 'telefono',
            																		'medio 2' => 'celular',
            																		'medio 3' => 'e-mail'
    																			), 'class'=>'checkbox-inline'
																			)).'</div>';
			
                ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
					<button type="submit" class="btn btn-formulario">Enviar
						<?php echo $this->Form->end(); ?>
					</button>
				</div>
			</form>
			<?php
                echo $this->Form->create('Contactos',array('url' => array('controller'=>'contactos', 'action'=>'index' ,  'model'=> 'false'), 'class'=>'form-horizontal'));
            ?>
			</div>
		</div>
	</div>
</div>