<?php

namespace FacturaScripts\Plugins\aereolineacarlos\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;




class EditBillete extends EditController
{
    public function getModelClassName(): string
    {
        return 'Billete';
    }
}