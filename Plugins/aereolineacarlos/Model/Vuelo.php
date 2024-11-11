<?php
namespace FacturaScripts\Plugins\aereolineacarlos\Model;

use FacturaScripts\Core\Model\Base\ModelTrait;
use FacturaScripts\Core\Model\Base\ModelClass;

class Vuelo extends ModelClass{

    use ModelTrait;

    public $idvuelo;
    public $origen;
    public $destino;
    public $fecha;
    public $horasalida;
    public $horallegada;
    public $modeloavion;

    public static function primaryColumn(): string
{
    /// sustituya id por el nombre de la columna que es la clave primaria
    return 'idvuelo';
}
public static function tableName(): string
{
    // sustituya my_table por el nombre de la tabla
    return 'vuelos';
}


}