<?php

namespace FacturaScripts\Plugins\aereolineacarlos\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;




class EditPasajero extends EditController
{
    public function getModelClassName(): string
    {
        return 'Pasajero';
    }
}