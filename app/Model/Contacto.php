<?php
class Contacto extends AppModel {

    public $name = 'Contacto';
    public $useTable = false;
    public $validate = array(
    	'email' => array (
            'rule'          => 'email',
            'message'       => 'Debe escribir una dirección de email válida.'
        ),
        'nombre' => array(
            'rule'          => 'notEmpty',
            'allowEmpty'    => false,
            'message'       => 'Debe escribir su nombre.'
        ),
        'consulta' => array(
            'rule'          => 'notEmpty',
            'allowEmpty'    => false,
            'message'       => 'Debe escribir una consulta a enviar.'
        ),
    );

    var $_schema = array(
        'email'     => array('type'=>'string', 'length'=>100),
        'nombre'    => array('type'=>'string', 'length'=>100), 
        'consulta'   => array('type'=>'text', 'length'=>800),
    );
}