<?php
App::uses('CakeEmail', 'Network/Email');

class ContactosController extends AppController {
    public $name = 'Contactos';
    var $components = array('Email');

    public function index(){
    	$this->layout = 'default';
		
        if ($this->request->is('post')) {
            if(isset($this->data['Contacto'])){
                $this->Contacto->set($this->data);          
                # Valido los datos del formulario
                if($this->Contacto->validates()){
                   
					# Verifica datos medio de contacto de checkbox
					$clientes = $this->data['tipocliente'];
					$clientescount = sizeof($clientes);						
					foreach ($clientes as $cliente) {
						switch ($cliente) {
							case 'cliente 1':
								$tipocliente = $tipocliente.' Consumidor Final ';		
								break;
							case 'cliente 2':
								$tipocliente = $tipocliente.' Empresa ';
								break;
							case 'cliente 3':
								$tipocliente = $tipocliente.' Institución ';
								break;
							default:
								break;
						}
						if(($clientescount-1) > 0){
							$tipocliente = $tipocliente.' | ';
							$clientescount -=1;
						}	
					}
					
					# Verifica datos tipo de cliente de checkbox
					$medios = $this->data['tipomedio'];	
					$medioscount = sizeof($medios);				
					foreach ($medios as $medio) {
						switch ($medio) {
							case 'medio 1':
								$mediocontacto= $mediocontacto.' teléfono ';		
								break;
							case 'medio 2':
								$mediocontacto = $mediocontacto.' celular ';
								break;
							case 'medio 3':
								$mediocontacto = $mediocontacto.' email ';
								break;
							default:
								break;
							
						}	
						if(($medioscount-1) > 0){
							$mediocontacto = $mediocontacto.' | ';
							$medioscount -=1;
						}					
					}
				   
                	# Envia la consulta al mail de Ventas de Printa Argentina
                    # ventas@printaargentina.com.ar
                    $to = 'ventas@printaargentina.com.ar';
										
					# Armo el mensaje para enviar al mail.   
                    $mensaje = 	'Tipo de consulta: Página de Contacto de Printa Argentina'."\n\n".
                    			'Enviado por: '.$this->data['Contacto']['nombre'].' '.$this->data['Contacto']['apellido']."\n".
                               	'Tipo de cliente: '.$tipocliente."\n".
                               	'Mail de contacto: '.$this->data['Contacto']['email']."\n".                               
                               	'Datos de envio:'."\n".
                               	'Dirección de Envío: '.$this->data['Contacto']['direccionenvio']."\n".
                               	'Dirección de Facturación: '.$this->data['Contacto']['direccionfacturacion']."\n".
                               	'Ciudad: '.$this->data['Contacto']['ciudad']." - C.P.:".$this->data['Contacto']['cp']."\n".
                               	'Teléfono: '.$this->data['Contacto']['telephone']."\n".
                               	'Celular: '.$this->data['Contacto']['telephone']."\n".
                               	'Email: '.$this->data['Contacto']['email']."\n\n".
                               	'Medio de contacto: '.$mediocontacto."\n\n".   
								'Consulta: '."\n".$this->data['Contacto']['consulta'];
										
					$header = 'From: ' . $this->data['Contacto']['email'] . " \r\n";
					$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
					$header .= "Mime-Version: 1.0 \r\n";
					$header .= "Content-Type: text/plain; charset=UTF-8";
					
					
                    if(mail($to, '=?UTF-8?B?'.base64_encode('Consulta Printa Argentina').'?=', $mensaje, $header )){
                    		
                    	# Mensaje indicando que la consulta se ha enviado con éxito.
                        $this->Session->setFlash('<div class=" col-md-8 col-md-offset-4 alert alert-success  alert-dismissable"> 
                        					 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        					Su consulta ha sido enviada con éxito. Nos comunicaremos a la brevedad. </div>');
                    }
                }
            }
        }
    }
}