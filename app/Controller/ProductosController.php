<?php
class ProductosController extends AppController {
	public $name = 'Productos';
    var $helpers = array('Session');

	/**
	 * index method
	 *
	 */
    public function index(){
    	$this->layout = 'default';
		
		$string = file_get_contents("http://p-printer.com/productos/getNuevosProductos");
		$json_a = json_decode($string, true);
		
		$this->set('productos', $json_a);
		foreach ($json_a as $elemento) {
			$marcas[] = $elemento['Marca']['marca'];
			$modelos[] = $elemento['Modelo']['modelo'];
			$versions[] = $elemento['Version']['version'];
    	}
		$marcas =  array_unique($marcas);
		$modelos =  arsort(array_unique($modelos));
		$versions =  array_unique($versions);
		$this->set('marcas',  $marcas);
		$this->set('modelos', $modelos);
		$this->set('versions', $versions);
	}
	
	/**
	 * buscar method
	 *
	 */
	public function buscar(){
		# seteo layout
		$this->layout = 'default';
		# me traigo todos los productos cargados en p-printer.com
		$string = file_get_contents("http://p-printer.com/productos/getProductos");
		$json_a = json_decode($string, true);

		# Seteo los valores que aparecen en las opciones de búsqueda
		$this->set('productos', $json_a);
		
		# Si no seleccionó ninguna opción, muestra todos los elementos.
		if(	$this->data['Producto']['marca_id']=='') {
			if($this->data['Producto']['modelo_id']==''){
				$results = Set::sort($json_a, '{n}.Version.version', 'asc');
				$results = Set::sort($results, '{n}.Modelo.modelo', 'asc');
				$this->set('productosListado', $results);
				//$this->set('productosListado', $json_a);
			} else {
				$results = Set::sort($json_a, '{n}.Marca.marca', 'asc');
				$results = Set::sort($results, '{n}.Version.version', 'asc'); //ordena version
				$results = Set::sort($results, '{n}.Modelo.modelo', 'asc');
				$this->set('productosListado', $results);
			}			
			
			# Todas las opciones de búsqueda disponible
			foreach ($json_a as $elemento) {
				$marcas[] = $elemento['Marca']['marca'];
				$modelos[] = $elemento['Modelo']['modelo'];
			}
			$marcas =  array_unique($marcas);
			$modelos =  array_unique($modelos);
			sort($modelos);
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
				sort($modelos); //ordeno los modelos para la lista de selección.
				$this->set('marcas',  $marcas);
				$this->set('modelos', $modelos);
				
				# Si no selecciona modelomodelos)
				if($this->data['Producto']['modelo_id']=='') {
					foreach ($json_a as $elemento) {
						if($elemento['Marca']['marca'] == $json_a[$this->data['Producto']['marca_id']]['Marca']['marca']){
							$productosListado[] = $elemento;
						}
					}
					$results = Set::sort($productosListado, '{n}.Marca.marca', 'asc');
					$results = Set::sort($results, '{n}.Version.version', 'asc'); //ordeno version
					$results = Set::sort($results, '{n}.Modelo.modelo', 'asc');
					$this->set('productosListado', $results);
				} else {
					# Si selecciona modelo
					if($this->data['Producto']['modelo_id']!=''){
						foreach ($json_a as $elemento) {
							if(($elemento['Marca']['marca'] == $json_a[$this->data['Producto']['marca_id']]['Marca']['marca']) &&
							   	($elemento['Modelo']['modelo'] == $modelos[$this->data['Producto']['modelo_id']])){
									$productosListado[] = $elemento;
							} else {
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
						$results = Set::sort($productosListado, '{n}.Marca.marca', 'asc');
						$results = Set::sort($results, '{n}.Version.version', 'asc'); //ordeno version
						$results = Set::sort($results, '{n}.Modelo.modelo', 'asc');
						$this->set('productosListado', $results);
					}
				}
			}
		} 
		# me traigo todos los productos cargados en p-printer.com
		$nuevos = file_get_contents("http://p-printer.com/productos/getNuevosProductos");
		$productosnuevos = json_decode($nuevos, true);

		# Seteo los valores que aparecen en las opciones de búsqueda
		$this->set('productosnuevos', $productosnuevos);
	}

	/**
	 * solicitar method
	 *
	 */
	public function solicitar($marca, $modelo){
		$this->set('marca', $marca);
		$this->set('modelo', $modelo);
	}

	/**
	 * enviar method
	 *
	 */
	public function enviar(){
		$this->layout = 'default';
		$to = 'ventas@printaargentina.com.ar';
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
?>