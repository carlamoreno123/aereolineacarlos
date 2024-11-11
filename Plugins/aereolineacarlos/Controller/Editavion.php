<?php

namespace FacturaScripts\Plugins\aereolineacarlos\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;




class EditAvion extends EditController
{
    public function getModelClassName(): string
    {
        return 'Avion';
    }
}