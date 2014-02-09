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
                   
                	# Envia la consulta al mail de Ventas de Printa Argentina
                    # ventas@printaargentina.com.ar
                    $to = 'ventas@printaargentina.com.ar';
										
					# Armo el mensaje para enviar al mail.   
                    $mensaje = 'Enviado por: '.$this->data['Contacto']['nombre']."\n".
                               'Mail de contacto: '.$this->data['Contacto']['email']."\n".
                               'Tipo de consulta: Página de Contacto'."\n\n".
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