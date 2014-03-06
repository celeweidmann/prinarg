<?php

class ProductosController extends AppController {
    public $name = 'Productos';
    var $helpers = array('Session');
    public function index(){
    	$this->layout = 'default';
		
        //$string = file_get_contents("http://russer.workspace.com/productos/getNuevosProductos");
		$string = file_get_contents("http://p-printer.com/productos/getNuevosProductos");
		$json_a = json_decode($string, true);
		
		debug($json_a);
		
		$this->set('productos', $json_a);
		
		foreach ($json_a as $elemento) {
			$marcas[] = $elemento['Marca']['marca'];
			$modelos[] = $elemento['Modelo']['modelo'];
			$versions[] = $elemento['Version']['version'];
						
    	}
		$marcas =  array_unique($marcas);
		$modelos =  array_unique($modelos);
		$versions =  array_unique($versions);
		$this->set('marcas',  $marcas);
		$this->set('modelos', $modelos);
		$this->set('versions', $versions);
		
		//debug($versiones);
	}

    public function busqueda(){
    	$this->layout = 'default';
		
        //$string = file_get_contents("http://russer.workspace.com/productos/getNuevosProductos");
		//$string = file_get_contents("http://p-printer.com/productos/getNuevosProductos");
		$string = file_get_contents("http://p-printer.com/productos/getProductos");
		$json_a = json_decode($string, true);
		
		if($this->data['Producto']['marca_id']!=''){
			//debug($this->data['Producto']['marca_id']);
			//debug($this->data['Producto']['modelo_id']);
			//debug($this->data['Producto']['version_id']);
			//debug($json_a['0']['Modelo']['modelo']);
			//debug($this->data);
			//debug($json_a[$this->data['Producto']['marca_id']]['Marca']['marca']);
			//debug($json_a[$this->data['Producto']['modelo_id']]['Modelo']['modelo']);
		}
		//debug($json_a);
		
		# Seteo los valores que aparecen en las opciones de búsqueda
		$this->set('productos', $json_a);
		foreach ($json_a as $elemento) {
		/*	$marcas[] = $elemento['Marca']['marca'];
			$modelos[] = $elemento['Modelo']['modelo'];
			$versions[] = $elemento['Version']['version'];*/
    	}	
		
		/*
		$marcas =  array_unique($marcas);
		$modelos =  array_unique($modelos);
		$versions =  array_unique($versions);
		$this->set('marcas',  $marcas);
		$this->set('modelos', $modelos);
		$this->set('versions', $versions);
		*/
		# Si no seleccionó ninguna opción, muestra todos los elementos.
		if(	$this->data['Producto']['marca_id']=='' && 
			$this->data['Producto']['modelo_id']=='' &&
			$this->data['Producto']['version_id']=='') {
				$this->set('productosListado', $json_a);
				
				# Todas las opciones de búsqueda disponible
				foreach ($json_a as $elemento) {
					$marcas[] = $elemento['Marca']['marca'];
					$modelos[] = $elemento['Modelo']['modelo'];
					$versions[] = $elemento['Version']['version'];
				}
				$marcas =  array_unique($marcas);
				$modelos =  array_unique($modelos);
				$versions =  array_unique($versions);
									
		} else {
			
			# Si seleccionó la marca	
			if( $this->data['Producto']['marca_id']!=''){
				
				# Si sólo selecciona la marca y NO seleccion modelo ni versión
				if($this->data['Producto']['modelo_id']=='' &&	$this->data['Producto']['version_id']=='') {
					foreach ($json_a as $elemento) {
						if($elemento['Marca']['marca'] == $json_a[$this->data['Producto']['marca_id']]['Marca']['marca']){
							$productosListado[] = $elemento;
						}
					}
					$this->set('productosListado', $productosListado);
				} else {
					 # Si selecciona marca y modelo
				 	if($this->data['Producto']['modelo_id']!=''){
				 	
						# Si no selecciona versión
						if($this->data['Producto']['version_id']==''){
							foreach ($json_a as $elemento) {
								if(($elemento['Marca']['marca'] == $json_a[$this->data['Producto']['marca_id']]['Marca']['marca']) &&
						   			($elemento['Modelo']['modelo'] == $json_a[$this->data['Producto']['modelo_id']]['Modelo']['modelo'])){
									$productosListado[] = $elemento;
								}
							}
							$this->set('productosListado', $productosListado);
						} else{
					
							# Si selecciona Versión
							if($this->data['Producto']['version_id']!=''){
								foreach ($json_a as $elemento) {
									if(($elemento['Marca']['marca'] == $json_a[$this->data['Producto']['marca_id']]['Marca']['marca']) &&
						   				($elemento['Modelo']['modelo'] == $json_a[$this->data['Producto']['modelo_id']]['Modelo']['modelo']) &&
										($elemento['Version']['version'] == $json_a[$this->data['Producto']['version_id']]['Version']['version'])){
										$productosListado[] = $elemento;
									}
								}
								$this->set('productosListado', $productosListado);
							}
						}			
					} else {
						# Si NO selecciona modelo y si version
						if($this->data['Producto']['version_id']!=''){
							foreach ($json_a as $elemento) {
								if(($elemento['Marca']['marca'] == $json_a[$this->data['Producto']['marca_id']]['Marca']['marca']) &&
									($elemento['Version']['version'] == $json_a[$this->data['Producto']['version_id']]['Version']['version'])){
										$productosListado[] = $elemento;
								}
							}
							$this->set('productosListado', $productosListado);
						}
					}
				}

				foreach ($json_a as $elemento) {
					$marcas[] = $elemento['Marca']['marca'];
					if($elemento['Marca']['marca']=='SAMSUNG'){
						$modelosSamsung[] = $elemento['Modelo']['modelo'];	
					} elseif($elemento['Marca']['marca']=='XEROX'){
						$modelosXerox[] = $elemento['Modelo']['modelo'];
					}
					$versions[] = $elemento['Version']['version'];
				}
				$marcas =  array_unique($marcas);
				$modelos =  array_unique($modelos);
				$versions =  array_unique($versions);


			} else {
				
				# Si selecciono modelo y no marca
				if( $this->data['Producto']['modelo_id']!=''){
					# Si seleccionó version
					if($this->data['Producto']['version_id']!=''){
						foreach ($json_a as $elemento) {
							if(($elemento['Modelo']['modelo'] == $json_a[$this->data['Producto']['modelo_id']]['Modelo']['modelo']) &&
								($elemento['Version']['version'] == $json_a[$this->data['Producto']['version_id']]['Version']['version'])){
									$productosListado[] = $elemento;
							}
						}
					} else {
						# Si NO seleccionó Version
						foreach ($json_a as $elemento) {
							if(($elemento['Modelo']['modelo'] == $json_a[$this->data['Producto']['modelo_id']]['Modelo']['modelo'])){
									$productosListado[] = $elemento;
							}
						}
					}
					$this->set('productosListado', $productosListado);
				} else {
					# Si selecciono version
					if($this->data['Producto']['version_id']!=''){
						foreach ($json_a as $elemento) {
							if(($elemento['Version']['version'] == $json_a[$this->data['Producto']['version_id']]['Version']['version'])){
									$productosListado[] = $elemento;
							}
						}
					}
					$this->set('productosListado', $productosListado);
				}
				
				
			}
		$marcas =  array_unique($marcas);
		$modelos =  array_unique($modelos);
		
		if($json_a[$this->data['Producto']['marca_id']]['Marca']['marca'] == 'SAMSUNG'){
			$modelos =  array_unique($modelosSamsung);
		} elseif($json_a[$this->data['Producto']['marca_id']]['Marca']['marca'] == 'XEROX'){
			$modelos =  array_unique($modelosXerox);
		}
		$versions =  array_unique($versions);
		}

		
		$this->set('marcas',  $marcas);
		$this->set('modelos', $modelos);
		$this->set('versions', $versions);
		debug($json_a[$this->data['Producto']['marca_id']]['Marca']['marca']);
		debug($json_a[$this->data['Producto']['modelo_id']]['Modelo']['modelo']);
	}

	
	public function buscar(){
		# seteo layout
		$this->layout = 'default';
		
		debug($ultimamarca);
		
		# me traigo todos los productos cargados en p-printer.com
		$string = file_get_contents("http://p-printer.com/productos/getProductos");
		$json_a = json_decode($string, true);

		# Seteo los valores que aparecen en las opciones de búsqueda
		$this->set('productos', $json_a);
		
		# Si no seleccionó ninguna opción, muestra todos los elementos.
		if(	$this->data['Producto']['marca_id']=='') {
			if($this->data['Producto']['modelo_id']==''){
				$this->set('productosListado', $json_a);
	
			} else {
				$this->set('productosListado', $json_a);
			}			
					
				# Todas las opciones de búsqueda disponible
				foreach ($json_a as $elemento) {
					$marcas[] = $elemento['Marca']['marca'];
					$modelos[] = $elemento['Modelo']['modelo'];
				}
				$marcas =  array_unique($marcas);
				$modelos =  array_unique($modelos);
				$this->set('marcas',  $marcas);
				$this->set('modelos', $modelos);

		} else {
			# Si seleccionó la marca	
			if( $this->data['Producto']['marca_id']!=''){
				
				foreach ($json_a as $elemento) {
					$marcas[] = $elemento['Marca']['marca'];
					if($elemento['Marca']['marca']=='SAMSUNG'){
						if(!in_array($elemento['Modelo']['modelo'], $modelosSamsung)){
							$modelosSamsung[] = $elemento['Modelo']['modelo'];	
						}	
					} elseif($elemento['Marca']['marca']=='XEROX'){
						if(!in_array($elemento['Modelo']['modelo'], $modelosXerox)){
							$modelosXerox[] = $elemento['Modelo']['modelo'];
						}
					}	
				}
				if($json_a[$this->data['Producto']['marca_id']]['Marca']['marca'] == 'SAMSUNG'){
					$modelos =  array_unique($modelosSamsung);
				} elseif($json_a[$this->data['Producto']['marca_id']]['Marca']['marca'] == 'XEROX'){
					$modelos =  array_unique($modelosXerox);
				}		
				$marcas =  array_unique($marcas);
				$modelos =  array_unique($modelos);
				$this->set('marcas',  $marcas);
				$this->set('modelos', $modelos);
				
				# Si no selecciona modelo
				if($this->data['Producto']['modelo_id']=='') {
					foreach ($json_a as $elemento) {
						if($elemento['Marca']['marca'] == $json_a[$this->data['Producto']['marca_id']]['Marca']['marca']){
							$productosListado[] = $elemento;
						}
					}
					$this->set('productosListado', $productosListado);
				} else {
					# Si selecciona modelo
					if($this->data['Producto']['modelo_id']!=''){
						
						//if($this->$ultimamarca == $json_a[$this->data['Producto']['marca']]['Marca']['marca'] || $this->$ultimamarca == ''){
							foreach ($json_a as $elemento) {
								if(($elemento['Marca']['marca'] == $json_a[$this->data['Producto']['marca_id']]['Marca']['marca']) &&
							   	($elemento['Modelo']['modelo'] == $modelos[$this->data['Producto']['modelo_id']])){
									$productosListado[] = $elemento;
								}
								else {
									if(!$modelos[$this->data['Producto']['modelo_id']]){
										foreach ($json_a as $elemento) {
											if($elemento['Marca']['marca'] == $json_a[$this->data['Producto']['marca_id']]['Marca']['marca']){
												$productosListado[] = $elemento;
											}
										}
										break;
									}
								}
							}
							$this->set('productosListado', $productosListado);	
						/*} else {
							foreach ($json_a as $elemento) {
								if($elemento['Marca']['marca'] == $json_a[$this->data['Producto']['marca_id']]['Marca']['marca']){
									$productosListado[] = $elemento;
								}
							}
							break;
							$this->set('productosListado', $productosListado);
						}*/
						
						
					}
				}
			}
		} 
	}

	public function solicitar($marca, $modelo){
		debug($marca);
		debug($modelo);
		$this->set('marca', $marca);
		$this->set('modelo', $modelo);
	}	
	
	public function enviar(){
		$this->layout = 'default';
		
		$to = 'celeweidmann@gmail.com';
		
		# Armo el mensaje para enviar al mail.   
        $mensaje = 	'Tipo de consulta: Solicitud Firmware'."\n\n".
        			'Datos de Contacto'."\n".
        			'Mail: '.$this->data['Producto']['email']."\n".
        			'Teléfono: '.$this->data['Producto']['telefono']."\n\n".
                    
                    'Solicitud de Reset para Impresora: '."\n".'Marca: '.$this->data['Producto']['marca']."\n".'Modelo: '.$this->data['Producto']['modelo'];
										
		$header = 'From: ' . $this->data['Contacto']['email'] . " \r\n";
		$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$header .= "Mime-Version: 1.0 \r\n";
		$header .= "Content-Type: text/plain; charset=UTF-8";
					
        if(mail($to, '=?UTF-8?B?'.base64_encode('Consulta Printa Argentina').'?=', $mensaje, $header )){
        	$this->redirect(array('controller' => 'productos', 'action' => 'buscar'));
        }
	}
}
