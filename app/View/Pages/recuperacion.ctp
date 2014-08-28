<div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
			<?php echo $this->element('marcas_x1'); ?>
		</div>
	</div>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<ul class="nav nav-tabs  hidden-xs">
  				<!--<li><?php echo $this->Html->link("Preguntas Frecuentes", array('controller'=>'pages', 'action'=>'preguntas'), array('class'=>'pestania'))?></li>-->
  				<li><?php echo $this->Html->link("Reciclado", array('controller'=>'pages', 'action'=>'reciclado'), array('class'=>'pestania'))?></li>
  				<li class="active"><?php echo $this->Html->link("Recuperación", array('controller'=>'pages', 'action'=>'recuperacion'), array('class'=>'pestania'))?></li>
  				<li><?php echo $this->Html->link("Firmware Disponible / Recarga de Cartuchos", array('controller'=>'productos', 'action'=>'buscar'), array('class'=>'pestania'))?></li>
			</ul>
			<h4 class="titulo visible-xs">Recuperación</h4>
			<hr class="linea visible-xs">
			<div class="destacado">
				<p>
				Debido a innumerables consultas de usuarios que han tenido malas experiencias al intentar 
				desbloquear sus impresoras utilizando archivos de desbloqueo (Firmwares) de procedencia 
				DESCONOCIDA, hemos instaurado el servicio de RECUPERACIÓN DE DESBLOQUEO (RESET / FIRMWARE).
				</p>
			</div>
			<br>
			<p>
				Si usted observa en la hoja de informe de la placa madre una anotación anormal, por ejemplo:
			</p>
			<hr class="linea">
			<p>
				a) Machine Serial Number:
				<br>
				I) PBA_i-DPT_USBNo1
				<br>
				II) 0000-00000000000
				<br>
				III) Seriales de 14 digitos
				<br><br>
				Algunos ejemplos:<br>
	 			ML-2165W SERIAL: "0000-00000000000"<br>
	 			CLP-310 / CLP-315 SERIAL: "0000-00000000000"<br>
				CLP-365 / CLP-365W SERIAL: "PBA_i-DPT_USBNo1"<br>
				CLX-3305 / clx-3305WSERIAL: "PBA_i-DPT_USBNo1"
			</p>
			<hr class="linea">
			<div class="destacado">
				<p class="text-center">
				<em>
				Por favor comuníquese con nosotros, su impresora aún se puede recuperar.
				</em>
			</p>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h4 class="titulo">¿Cómo conocer si su impresora está en ESTADO de RECUPERACIÓN?</h4><hr class="linea">
			<p>
				Luego del desbloqueo que usted hizo, la impresora cumple con varios o uno de los siguientes ITEMS:
			</p>
			<p>
				a) NO IMPRIME con ningún tipo de cartucho (Alternativo u Original).<br>
				b) Indica CONTINUAMENTE "TÓNER AGOTADO o TÓNER INCOMPATIBLE".<br>
				c) NO IMPRIME con cartuchos SIN CHIP.<br>
				d) La impresora no inicia.<br>
				e) OTROS comportamientos anormales.
			</p>
			<br>
			<p>
				Para poder RECUPERAR una impresora es necesario conocer:<br>

			    1) Modelo de la impresora<br>
    			2) Informe de la impresora (con la version actual de Firmware)<br>
    			3) Número de serie de la impresora (¡NO DE LA ETIQUETA TRASERA!), obtenido desde el panel de la impresora. También en la identificación de la placa madre puede observar una anotación anormal, por ejemplo:<br>
    			a) Machine Serial Number: PBA_i-DPT_USBNo1<br>
					<br>
			    b) Machine Serial Number: 14 caracteres<br>
	
    			c) Machine Serial Number: 0000-00000000000
			
			</p>			
		</div>
	</div>
</div>	
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<br><br><br><br>
	<hr class="linea">
	 <?php echo $this->element('marcascarousel'); ?>
</div>
