<?php
namespace FacturaScripts\Plugins\aereolineacarlos\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Avion extends ModelClass{

    use ModelTrait;

    public $idavion;
    public $modelo;
    public $capacidad;
    

    
    public static function primaryColumn(): string
    {
        return 'idavion';

    }
    public static function tableName(): string
    {
        return 'aviones';

    }


}