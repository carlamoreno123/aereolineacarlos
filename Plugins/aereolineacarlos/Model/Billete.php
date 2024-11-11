<?php
namespace FacturaScripts\Plugins\aereolineacarlos\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Billete extends ModelClass{

    use ModelTrait;

    public $idbillete;
    public $idpasajero;
    public $idavion;
    public $idvuelo;
    public $clase;
    public $precio;
    public $formapago; 
    public $asiento;
    public $avion;
    public $modelo; 
    public $capacidad; 
    
    
    

    
    public static function primaryColumn(): string
    {
        return 'idbillete';

    }
    public static function tableName(): string
    {
        return 'billetes';

    }


}