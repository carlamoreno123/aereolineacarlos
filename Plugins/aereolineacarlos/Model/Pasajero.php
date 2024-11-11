<?php
namespace FacturaScripts\Plugins\aereolineacarlos\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Pasajero extends ModelClass{

    use ModelTrait;

    public $idpasajero;
    public $nombre;
    public $apellidos;
    public $dni;
    public $direccion;
    public $estadocivil; 
    public $numbilletes;
    

    
    public static function primaryColumn(): string
    {
        return 'idpasajero';

    }
    public static function tableName(): string
    {
        return 'pasajeros';

    }


}