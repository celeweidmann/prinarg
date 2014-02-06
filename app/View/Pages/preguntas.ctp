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
  				<li><?php echo $this->Html->link("Firmware Disponible", array('controller'=>'pages', 'action'=>'firmware'), array('class'=>'pestania'))?></li>
  				<li><?php echo $this->Html->link("Recuperación", array('controller'=>'pages', 'action'=>'recuperacion'), array('class'=>'pestania'))?></li>
  				<li class="active"><?php echo $this->Html->link("Preguntas Frecuentes", array('controller'=>'pages', 'action'=>'preguntas'), array('class'=>'pestania'))?></li>
			</ul>
			<div col-md-12>
			</div>
			</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ol>
				<br>
				<li>
					<p class="text-justify">
					¿Cómo averiguar si su impresora se encuentra en estado "ORIGINAL o NORMAL"?<br>
					Imprima una hoja de diagnóstico y verifique que la "Version Firmware" no contenga 
					una letra "f".
					</p>
				</li><br>
				<li>
					<p class="text-justify">
					¿Por qué el reset que realicé utilizando un archivo de procedencia DESCONOCIDA funcionó al principio (agregó la letra "f"), 
					pero luego de algunos días dejó de funcionar?<br>
					Respuesta: esto sucede con las impresoras con cartuchos con chip que aún permiten impresiones, generalmente el usuario desconoce 
					que la letra "f" en la version de firmware NO ES GARANTÍA DE UN BUEN DESBLOQUEO, la verificación final se debe hacer imprimiendo 
					SIN CHIP (o chip cubierto/tapado) en el cartucho.
					</p>
				</li><br>
				<li>
					<p class="text-justify">
					¿Por qué su desbloqueo funcionará?, me dijeron que no es posible y que muchos arruinaron sus impresoras por hacer el reset con 
					archivos de procedencia desconocida "libres". ¿Es peligroso para mi impresora?<br>
					Respuesta: nuestro servicio de reset / firmware FUNCIONA 100% en impresoras en estado ORIGINAL, es decir que NO HAN SIDO MODIFICADAS 
					con intentos anteriores de reset o peor aún con "PUENTES con cables" en el chip de la impresora en donde se almacena la información. 
					Los comentarios generalmente provienen de usuarios que han tenido malas experiencias por realizar y utilizar archivos de procedencia 
					desconocida "libres".
					</p>
				</li><br>
				<li>
					<p class="text-justify">
					Intenté resetear mi impresora por mi cuenta, ahora tiene una letra "f" en la versión de firmware, pero la luz sigue ROJA y no imprime. 
					¿Tiene solución o puedo recuperarla con ustedes?<br>
					Respuesta: si su "Version Firmware" contiene una letra "f" al final, significa que alguien YA INTENTÓ desbloquearla por su cuenta utilizando 
					archivos de procedencia DESCONOCIDA. Si aún así no puede imprimir con cartuchos (originales o alternativos) sin chip , o directamente no puede 
					imprimir NADA, entonces usted tiene una impresora MAL DESBLOQUEADA. Si éste es SU CASO diríjase a:
					<?php echo $this->Html->link("RECUPERACIÓN DE DESBLOQUEO", array('controller'=>'pages', 'action'=>'recuperacion'), array('class'=>'pestania btn btn-default'))?>
					<br><br>
					Una impresora BIEN DESBLOQUEADA también contiene una letra "f" al final de la "Version Firmware", pero la DIFERENCIA es que PERMITE 
					imprimir con cartuchos (originales o alternativos) sin chip, problemas o luz de aviso de error.
					
					<div class="caja-preguntas">
						Si usted en la hoja de informe observa en la identificación de la placa madre una anotación anormal, por ejemplo:<br>
						a) Machine Serial Number: PBA_i-DPT_USBNo1<br>

						b) Machine Serial Number: 14 caracteres<br>

						c) Machine Serial Number: 0000-00000000000 <br>
						Por favor comuníquese con nosotros, su impresora aún se puede recuperar.
					</div>
					
					Para ver casos de impresoras BIEN DESBLOQUEADAS con nuestro servicio, por favor observar las imágenes de 
					<?php echo $this->Html->link("EJEMPLOS", array('controller'=>'pages', 'action'=>'firmware'), array('class'=>'pestania btn btn-default'))?>
					</p>
				</li><br>
				<li>
					<p class="text-justify">
 					¿Luego de desbloquear mi impresora se pierde alguna configuración o función?<br>
 					Respuesta: no se pierde ninguna configuración o función, usted podrá utilizar cartuchos originales, alternativos o cartuchos recargados. 
 					Para eso puede utilizar nuestro servicio de 
 					<?php echo $this->Html->link("reciclado de cartuchos", array('controller'=>'pages', 'action'=>'reciclado'), array('class'=>'pestania btn btn-default'))?>
 					<br><br>
					Ante cualquier inquietud, no dude en comunicarse con nosotros a través de nuestros 
					<?php echo $this->Html->link("DATOS De CONTACTO", array('controller'=>'pages', 'action'=>'contacto'), array('class'=>'pestania btn btn-default'))?>
 					</p>					
				</li>				
			</ol>
			</p>
		</div>
	</div>
</div>	
</div>
<div class="col-md-12">
	<br><br><br><br>
	<hr class="linea">
	 <?php echo $this->element('marcascarousel'); ?>
</div>
